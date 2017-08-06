<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
    
    public function __construct() {

        parent :: __construct();

        $this->load->model('data');

        $this->portfolio_t = 'portfolio';
        
    }
    
    public function index() {
        
        $data['title'] = "Home";
        
        $this->load->view('front/common/header', $data);
        $this->load->view('front/common/slider');
        $this->load->view('front/pages/home');
        $this->load->view('front/common/footer');
        
    }
    
    // #########################################################################
    //  about us section
    // #########################################################################
    
    public function vision() {
        
        $data['title'] = "Vision";
        
        $data['page'] = "front/about_us/vision";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function mission() {
        
        $data['title'] = "Mission";
        
        $data['page'] = "front/about_us/mission";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function msg_from_chrmn() {
        
        $data['title'] = "Message from chairman";
        
        $data['page'] = "front/about_us/msg_from_chrmn";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function core_values() {
        
        $data['title'] = "Core values";
        
        $data['page'] = "front/about_us/core_values";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function corporate_goal() {
        
        $data['title'] = "Corporate goal";
        
        $data['page'] = "front/about_us/corporate_goal";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function organogram() {
        
        $data['title'] = "Organogram";
        
        $data['page'] = "front/about_us/organogram";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function client() {
        
        $data['title'] = "Client";
        
        $data['page'] = "front/about_us/client";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    
    // #########################################################################
    //  projects section
    // #########################################################################
    
    public function on_going_project() {
        
        $data['title'] = "On going project";
        
        $data['page'] = "front/projects/on_going_project";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function completed_project() {
        
        $data['title'] = "Completed project";
        
        $data['page'] = "front/projects/completed_project";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    
    // #########################################################################
    //  what we do section
    // #########################################################################

    public function roads_and_highway() {
        
        $data['title'] = "Roads and highway";
        
        $data['page'] = "front/what_we_do/roads_highway";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function bridge() {
        
        $data['title'] = "Bridge";
        
        $data['page'] = "front/what_we_do/bridge";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function material_supply() {
        
        $data['title'] = "Material supply";
        
        $data['page'] = "front/what_we_do/material_supply";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function optical_fiber() {
        
        $data['title'] = "Optical fiber";
        
        $data['page'] = "front/what_we_do/optical_fiber";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function civil() {
        
        $data['title'] = "Civil";
        
        $data['page'] = "front/what_we_do/civil";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    
    // #########################################################################
    //  equipments section
    // #########################################################################
    
    public function equipments() {
        
        $data['title'] = "Equipments";
        
        $data['page'] = "front/pages/equipments";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    
    // #########################################################################
    //  careers section
    // #########################################################################
    
    public function careers() {
        
        $data['title'] = "Careers";
        
        $data['page'] = "front/pages/careers";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    
    // #########################################################################
    //  gallery section
    // #########################################################################
    
    public function on_going_project_gallery() {
        
        $data['title'] = "On going project gallery";
        
        $data['page'] = "front/gallery/on_going_project";
        
        $data['lists'] = $this->data->getall_ongoing_gallery($this->portfolio_t);
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function completed_project_gallery() {
        
        $data['title'] = "Completed project gallery";
        
        $data['page'] = "front/gallery/completed_project";
        
        $data['lists'] = $this->data->getall_cmplt_gallery($this->portfolio_t);
        
        $this->load->view('front/common/template', $data);
        
    }
    
    
    // #########################################################################
    //  contact section
    // #########################################################################
    
    public function contact() {
        
        $data['title'] = "Contact us";
        
        $data['page'] = "front/pages/contact";
        
        $this->load->view('front/common/template', $data);
        
    }
    
    public function send_msg() {
        
        if($_POST){
            
            // recv data
            $data['name'] = $this->common->nohtml($this->input->post('name'));

            $data['email'] = $this->common->nohtml($this->input->post('email'));

            $data['sub'] = $this->common->nohtml($this->input->post('sub'));

            $data['msg'] = $this->common->nohtml($this->input->post('msg'));
            
            
            // rendering amil body -----------------------------------------
            $email_body = $this->load->view('front/email_body/contact_email.php', $data, TRUE);

            // email sending ------------------------------------------------
            $this->load->library('email');
            
            $this->email->set_mailtype('html');
            
            $this->email->set_newline("\r\n");
            
            $this->email->from('info@praptitrade.com', 'praptitrade.com'); // web mail address, domain name
            
            $this->email->to('ceo@praptitrade.com'); // to mail
            
            $this->email->subject('Want to contact');
            
            $this->email->message($email_body);
            

            if ($this->email->send()) {

                // redirecting with succsss message ----------------
                $this->session->set_flashdata("success", "Successfully sent!");
                redirect(site_url('contact'));

            } else {

                // redirecting with error message ----------------
                $this->session->set_flashdata("danger", "Not sent!"); // $this->email->print_debugger()
                redirect(site_url('contact'));

            }
            
        } else {
            
            redirect(site_url('contact'));
            
        }
        
    }
    
      
}