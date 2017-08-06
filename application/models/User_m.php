<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User_m Class
 *
 * @author      example
 * @link        http://example.com
 */
 class User_m extends CI_Model {
     
     
     function __construct() {
        
        $this->table = 'back_users';
        parent :: __construct();
        
    }

    public function add($image) {
        
        $value = array(

            'first_name'=> $this->input->post('first_name'),
            'last_name'=> $this->input->post('last_name'),
            'email'=> $this->input->post('email'),
            'address'=> $this->input->post('address'),
            'phn'=> $this->input->post('phn'),
            'password'=> $this->common->encrypt($this->input->post('password')),
            'level'=> $this->input->post('level'),
            'image'=> $image
                
        );
        
        $result = $this->data->save($this->table, $value);

         if($result){
            return TRUE;
         }  else {
            return FALSE; 
         }
        
    }
    
    public function edit($id, $image = NULL) {

        $value = array(

            'first_name'=> $this->input->post('first_name'),
            'last_name'=> $this->input->post('last_name'),
            'email'=> $this->input->post('email'),
            'address'=> $this->input->post('address'),
            'phn'=> $this->input->post('phn'),
            'level'=> $this->input->post('level'),
            'image'=> $image
                
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }
    
    
    public function pass_update($id) {
        
        $value = array(

            'password'=> $this->common->encrypt($this->input->post('password'))
                
        );
        
        $result = $this->data->update($this->table, $id, $value);

         if($result){
            return TRUE;
         }  else {
            return FALSE; 
         }
        
    }
    
   
}