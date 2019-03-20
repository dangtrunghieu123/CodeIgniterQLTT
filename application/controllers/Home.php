<?php

 
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model');
        $this->load->model('User_model');
        
    }

    function index()
    {
        $data['teaher'] = $this->User_model->get_all_GV();
        $data['courses'] = $this->Course_model->get_all_courses();
        $data['_view'] = 'Home/index';
        $this->load->view('Home/layouts/main',$data);
    }
  
}