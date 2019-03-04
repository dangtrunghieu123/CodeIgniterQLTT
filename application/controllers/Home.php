<?php

 
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
        $data['_view'] = 'Home/index';
        $this->load->view('Home/layouts/main',$data);
    }
}