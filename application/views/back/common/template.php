<?php
    if(!isset($page)){ $page = 'back/dashboard/dashboard'; } 
    
    $this->load->view('back/common/header');
    $this->load->view('back/common/sidebar');
    $this->load->view($page);
    $this->load->view('back/common/footer');

?>