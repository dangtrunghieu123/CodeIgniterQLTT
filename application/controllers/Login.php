<?php

 
class Login extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        
    }

    function index()
    {
        $this->load->view('login/login');
    }
}