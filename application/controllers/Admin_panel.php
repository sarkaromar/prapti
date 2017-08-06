<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Admin_panel Class
 *
 * @author      example
 * @link        http://example.com
 */
class Admin_panel extends CI_Controller {
    
    public function __construct() {

        parent :: __construct();

        $this->load->model('data');

        $this->portfolio_t = 'portfolio';
        $this->portfolio_p = './assets/images/portfolio/';
        $this->load->model('portfolio_m');
        
        $this-> user_t = 'back_users';
        $this->user_p = './assets/back/images/profile/';
        $this->load->model('user_m');
        
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header('Pragma: no-cache');
        
        if (!$this->back_user->loggedin) {
            redirect(site_url("login"));
        }
        
    }
    
    // *** index for dashboard -------------------------------------------------
    public function index() {

        redirect(site_url("admin_panel/portfolio"));
        
    }

    
    // ##############################################################################################
    //  portfolio section
    // ##############################################################################################

    public function portfolio() {

        $data['title'] = "Portfolio";
        
        $data['page'] = "back/portfolio/portfolio";
        
        $data['lists'] = $this->data->getall($this->portfolio_t);
        
        $this->load->view('back/common/template', $data);

    }

    public function add_portfolio() {
        
        if($_POST){
            
            if ($_FILES['image']['name'] != '') {

                $image_upload = $this->do_upload('image', $this->portfolio_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed');
                    redirect(site_url('admin_panel/portfolio'));

                } else {

                    $image = $image_upload["file_name"];

                }
                
            }
            
            $id = $this->portfolio_m->add($image);
            
            if ($id) {
                
                $this->session->set_flashdata('success', 'Added Successfully.');
                redirect(site_url('admin_panel/portfolio'));

            } else {
                
                $this->session->set_flashdata('danger', 'Not Added!');
                redirect(site_url('admin_panel/portfolio'));

            }

        } else {

            redirect(site_url('admin_panel/portfolio'));

        }
    }

    public function edit_portfolio($id) {
        
        if(empty($id)){

            redirect(site_url('admin_panel/portfolio'));

        }

        $data['title'] = "Edit Portfolio";
        
        $data['page'] = "back/portfolio/edit_portfolio";
        
        $data['list'] = $this->data->getone($this->portfolio_t, $id);
        
        $this->load->view('back/common/template', $data);
        
    }

    public function do_edit_portfolio() {

        if($_POST){

            $id = $this->input->post('id');

            if ($_FILES['image']['name'] != '') {

                $del_image = $this->input->post('img');

                $filename = $this->portfolio_p . $del_image;
                if (file_exists($filename)) {
                    unlink($filename);
                }

                $image_upload = $this->do_upload('image', $this->portfolio_p);

                if ($image_upload == FALSE) {

                    $this->session->set_flashdata('danger', 'Image Upload Failed!');
                    redirect(site_url('admin_panel/portfolio'));

                } else {

                    $image = $image_upload["file_name"];

                }

            } else {

                $image = $this->input->post('img');

            }

            if ($this->portfolio_m->edit($id, $image)) {

                $this->session->set_flashdata('success', 'Update Successfully.');
                redirect('admin_panel/portfolio');

            }

        } else {
            redirect('admin_panel/portfolio', 'refresh');
        }

    }

    public function delete_portfolio($id, $image) {

        $result = $this->delete($this->portfolio_t, $id, $image, $this->portfolio_p);

        if($result){

            $this->session->set_flashdata('success', 'Delete Successfully.');
            redirect('admin_panel/portfolio');

        } else{

            $this->session->set_flashdata('danger', 'Not Deleted!');
            redirect('admin_panel/portfolio');

        }

    }

    
    // ##############################################################################################
    //  user section
    // ##############################################################################################

    public function user() {
        
        if ($this->back_user->info->level == 2) {

            $data['title'] = "User";

            $data['page'] = "back/user/user";

            $data['lists'] = $this->data->getall($this->user_t);

            $this->load->view('back/common/template', $data);
            
        } else {
            
            $this->session->set_flashdata('danger', 'Your are not authorized for access');
            redirect(site_url('admin_panel'));
                        
        }

    }
    
    public function add_user() {
        
        if ($this->back_user->info->level == 2) {
        
            $data['title'] = "Add user";

            $data['page'] = "back/user/add_user";

            $this->load->view('back/common/template', $data);
        
        } else {
            
            $this->session->set_flashdata('danger', 'Your are not authorized for access');
            redirect(site_url('admin_panel'));
                        
        }
        
    }

    public function do_add_user() {
        
        if ($this->back_user->info->level == 2) {
        
            if($_POST){

                $this->load->library('form_validation');

                $this->form_validation->set_rules('first_name', 'First Name', 'required');

                $this->form_validation->set_rules('email', 'Email', 'required|valid_email|is_unique[back_users.email]'); // field, label, rule

                $this->form_validation->set_rules('address', 'Address', 'required');

                $this->form_validation->set_rules('phn', 'Phone', 'required');

                $this->form_validation->set_rules('password', 'Password', 'required');

                $this->form_validation->set_rules('con_password', 'Password Confirmation', 'required|matches[password]');

                if ($this->form_validation->run() == FALSE){

                    // error view
                    $data['title'] = "Add user";

                    $data['page'] = "back/user/add_user";

                    $this->load->view('back/common/template', $data);

                } else {

                    // success
                    if ($_FILES['image']['name'] != '') {

                        $image_upload = $this->do_upload('image', $this->user_p);

                        if ($image_upload == FALSE) {

                            $this->session->set_flashdata('danger', 'Image Upload Failed');
                            redirect(site_url('admin_panel/user'));

                        } else {

                            $image = $image_upload["file_name"];

                        }

                        $id = $this->user_m->add($image);

                        if ($id) {

                            $this->session->set_flashdata('success', 'Added Successfully.');
                            redirect(site_url('admin_panel/user'));

                        } else {

                            $this->session->set_flashdata('danger', 'Not Added!');
                            redirect(site_url('admin_panel/user'));

                        }

                    }

                } // form valid success

            } else {

                redirect(site_url('admin_panel/user'));

            }
        
        } else {
            
            $this->session->set_flashdata('danger', 'Your are not authorized for access');
            redirect(site_url('admin_panel'));
                        
        }
    }
    
    
    public function edit_user($id) {
        
        if ($this->back_user->info->level == 2) {
        
            if(empty($id)){

                redirect(site_url('admin_panel/user'));

            }

            $data['title'] = "Edit User";

            $data['page'] = "back/user/edit_user";

            $data['list'] = $this->data->getone($this->user_t, $id);

            $this->load->view('back/common/template', $data);
        
        } else {
            
            $this->session->set_flashdata('danger', 'Your are not authorized for access');
            redirect(site_url('admin_panel'));
                        
        }
        
    }

    public function do_edit_user() {
        
        if ($this->back_user->info->level == 2) {

            if($_POST){

                $id = $this->input->post('id');

                if ($_FILES['image']['name'] != '') {

                    $del_image = $this->input->post('img');

                    $filename = $this->user_p . $del_image;

                    if (file_exists($filename)) {

                        unlink($filename);

                    }

                    $image_upload = $this->do_upload('image', $this->user_p);

                    if ($image_upload == FALSE) {

                        $this->session->set_flashdata('danger', 'Image Upload Failed!');
                        redirect(site_url('admin_panel/user'));

                    } else {

                        $image = $image_upload["file_name"];

                    }

                } else {

                    $image = $this->input->post('img');

                }

                if ($this->user_m->edit($id, $image)) {

                    $this->session->set_flashdata('success', 'Update Successfully.');
                    redirect(site_url('admin_panel/user'));

                }

            } else {

                redirect('admin_panel/user', 'refresh');

            }
        
        } else {
            
            $this->session->set_flashdata('danger', 'Your are not authorized for access');
            redirect(site_url('admin_panel'));
                        
        }

    }
    
    public function do_pass_update() {
        
        if ($this->back_user->info->level == 2) {

            if($_POST){

                $this->load->library('form_validation');

                $this->form_validation->set_rules('password', 'Password', 'required');

                $this->form_validation->set_rules('con_password', 'Password Confirmation', 'required|matches[password]');

                if ($this->form_validation->run() == FALSE){

                    $this->session->set_flashdata('danger', 'Not Updated!');
                    redirect(site_url('admin_panel/user'));

                } else {

                    $id = $this->input->post('id');

                    if ($this->user_m->pass_update($id)) {

                        $this->session->set_flashdata('success', 'Update Successfully.');
                        redirect(site_url('admin_panel/user'));

                    }

                }

            } else {

                redirect('admin_panel/user', 'refresh');

            }
        
        } else {
            
            $this->session->set_flashdata('danger', 'Your are not authorized for access');
            redirect(site_url('admin_panel'));
                        
        }

    }

    public function delete_user($id, $image) {
        
        if ($this->back_user->info->level == 2) {

            $result = $this->delete($this->user_t, $id, $image, $this->user_p);

            if($result){

                $this->session->set_flashdata('success', 'Delete Successfully.');
                redirect('admin_panel/user');

            } else{

                $this->session->set_flashdata('danger', 'Not Deleted!');
                redirect('admin_panel/user');

            }
        
        } else {
            
            $this->session->set_flashdata('danger', 'Your are not authorized for access');
            redirect(site_url('admin_panel'));
                        
        }

    }
    
    
    
    /**
    * delete function
    * common function of this class
    * 
    * @author      example
    * @link        http://example.com
    */
    public function delete($table, $id, $image = NULL, $path = NULL) {

        if($image != NULL){

            $this->data->delete($table, $id);
            $filename = $path . $image;

            if (file_exists($filename)) {
                unlink($filename);
                return TRUE;
            } else {
                return FALSE;
            }

        } else {

            if ($this->data->delete($table, $id)) {
                return TRUE;
            } else {
                return FALSE;
            }

        }
        
    }
    
    /**
    * do upload function
    * common function of this class
    * 
    * @author      example
    * @link        http://example.com
    */
    public function do_upload($field_name , $path) {

        $config['upload_path'] = $path;
        $config['allowed_types'] = 'gif|jpg|png';
        $config['encrypt_name'] = TRUE;
        $config['max_size'] = '5120';
        $config['xss_clean'] = TRUE;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload($field_name)) {
            return false;
        } else {
            return $this->upload->data();
        }
    }
    
    /**
    * logout function
    * for backend logout
    * 
    * @author      example
    * @link        http://example.com
    */
    public function logout($hash) {
        
        $config = $this->config->item("cookieprefix");
        
        $this->load->helper("cookie");
        
        if ($hash != $this->security->get_csrf_hash()) {
            
            $this->session->set_flashdata('danger', 'You are inactive from this site!');
            redirect(site_url('login'));
            
        }
        
        delete_cookie($config . "un");
        
        delete_cookie($config . "tkn");
        
        $this->session->sess_destroy();
        
        redirect('login');
        
    }
    
    
}