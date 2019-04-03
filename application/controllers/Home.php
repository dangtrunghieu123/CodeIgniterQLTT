<?php

 
class Home extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cource_model');
        $this->load->model('User_model');
        
    }

    function index()
    {
        $data['teacher'] = $this->User_model->get_user_by_Permission('GV');
        $data['courses'] = $this->Cource_model->get_all_cource();
        $data['_view'] = 'Home/index';
        $this->load->view('Home/layouts/main',$data);
    }
    
    function login(){
        $this->load->view('login/login');
    }
}