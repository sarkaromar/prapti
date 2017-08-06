<?php defined('BASEPATH') OR exit('No direct script access allowed');

 class Portfolio_m extends CI_Model {

    function __construct() {
        
        $this->table = 'portfolio';
        parent :: __construct();
        
    }


    public function add($image) {
        
        $value = array(

            'name'=> $this->input->post('name'),
            'image'=> $image,
            'status'=> $this->input->post('status')
            	

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

            'name'=> $this->input->post('name'),
            'image'=> $image,
            'status'=> $this->input->post('status')
                
        );

        $result = $this->data->update($this->table, $id, $value);

        if($result){
            return TRUE;
        }  else {
            return FALSE; 
        }
    }


    
}