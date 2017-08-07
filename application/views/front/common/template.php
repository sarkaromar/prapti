<?php
    if(!isset($page)){ $page = 'front/pages/home'; } 
    $this->load->view('front/common/header');
    $this->load->view('front/common/sub-header');
    $this->load->view($page); 
    $this->load->view('front/common/footer');   
?>