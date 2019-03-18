<?php

 
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Home_model');
        
    }

    function index()
    {
        $data['courses'] = $this->Home_model->get_all_courses();
        $data['_view'] = 'Home/index';
        $this->load->view('Home/layouts/main',$data);
    }
  
}