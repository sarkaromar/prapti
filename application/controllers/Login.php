<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Login Class
 *
 * @author      example
 * @link        http://example.com
 */
class Login extends CI_Controller {

    /**
    * construct function of this class
    *
    * @param       empty
    * @return      empty
    */
    public function __construct() {
        
        parent::__construct();
        
        $this->load->model("login_m");
        $this->load->model("user_m");
        
        if ($this->back_user->loggedin) {
            redirect(site_url('admin_panel'));
        }
        
    }

    /**
    * default view of this class
    *
    * @param       empty
    * @return      empty
    */
    public function index() {
        
        $data['title'] = "Login Area";
        
        $this->load->view('back/login/header', $data);
        
        $this->load->view('back/login/form');
        
        $this->load->view('back/login/footer');
        
    }

    /**
    * check user login info
    *
    * @param       empty
    * @return      empty
    */
    public function check() {
        
        if($_POST){

            // check is already logged in
            $config = $this->config->item("cookieprefix");
            
            if ($this->back_user->loggedin) {
                
                $this->session->set_flashdata('success', 'You are already loogeed in!');
                redirect(site_url('admin_panel'));
                
            }
            
            
            // input data & check blank email or pass 
            $email = $this->input->post("email", true);
            
            $pass = $this->common->nohtml($this->input->post("pass", true));
            
            $rem = $this->input->post("rem", true);
            
            if (empty($email) || empty($pass)) {
                
                $this->session->set_flashdata('danger', 'PLease, input valid information!');
                redirect(site_url('login'));
                
            }
            
            
            // email check
            $login = $this->login_m->get_user_by_email($email);
            if ($login->num_rows() == 0) {
                
                $this->session->set_flashdata('danger', 'Invalid username or password!');
                redirect(site_url('login'));
                
            }
            
            
            // load user info & pass check
            $r = $login->row();
            
            $id = $r->id;
            
            $phpass = new PasswordHash(12, false);
            
            if (!$phpass->CheckPassword($pass, $r->password)) {
                
                $this->session->set_flashdata('danger', 'Invalid username or password!');
                redirect(site_url('login'));
                
            }

            
            // generate token and update it
            $token = rand(1, 100000) . $email;
            
            $token = md5(sha1($token));
            
            $this->login_m->update_user_token($id, $token);

            
            // if remenberd then create cookies
            if ($rem == 1) {
                
                $ttl = 3600 * 12;
                
            } else {
                
                $ttl = 3600 * 12;
                
            }
            
            setcookie($config . "un", $email, time() + $ttl, "/");
            
            setcookie($config . "tkn", $token, time() + $ttl, "/");
            
            
            // redircting 
            $this->session->set_flashdata('success', 'Welcome! You are successfully loggedin');
            redirect(site_url('admin_panel'));
            
        } else {
            
            redirect(site_url('login'));
            
        }
        
    }
    

    
}