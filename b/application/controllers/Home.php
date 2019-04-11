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

    function detail_course($id){
        // $courseID = $this->input->post('courseID');
        // print_r($courseID);
        $data['_Dcourse'] = $this->Cource_model->get_cource($id);
        if(isset($data['_Dcourse']['courseID'])){
        }
        else
            show_error('The user you are trying to finđ does not exist.');
        $this->load->view('detail_course',$data);
    }
}