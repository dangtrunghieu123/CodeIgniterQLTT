<?php

 
class Login extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        
    }

    function index()
    {
        $this->load->view('login/login');
    }

    function login(){
        if(isset($_POST) && count($_POST) > 0) {
            try{
                $account = $this->input->post('username');
                $password = $this->input->post('password');
                $user = $this->User_model->get_user($account);
                if($user != null){
                    $user = (object)$user;
                    
                    if($user->pass == MD5($password)){
                        return  $this->output
                        ->set_content_type('application/json','utf-8')
                        ->set_output(json_encode(array(
                                'isSuccess' => true,
                                'message' =>"Đăng nhập thành công",
                                'data' => null
                        )));
                        
                        
                    }
                }
                // else return $this->output
                // ->set_content_type('application/json','utf-8')
                // ->set_output(json_encode(array(
                //         'isSuccess' => false,
                //         'message' =>"Tài khoản hoặc mặt khẩu không đúng!",
                //         "data" => null
                // )));
                else
                    throw new Exception('  tài khoản mật khẩu không đúng');
            }
            catch(Exception $e){
                $this->output
                ->set_content_type('application/json','utf-8')
                ->set_output(json_encode(array(
                        'isSuccess' => false,
                        'message' =>$e->getMessage(),
                        'data' => null
                )));
                
            }
        }
    }

    //login admin
    function signup(){
        if(isset($_POST) && count($_POST) > 0){
            try{
                $account = $this->input->post('account');
                $pass = $this->input->post('pass');
                $name = $this->input->post('name');
                $email = $this->input->post('email');
                $gender = $this->input->post('gender');
                $user = $this->User_model->get_user($account);
                if($user != null){
                    return $this->Success(array(
                        'message' => 'Đăng kí thành công!'
                    ));
                }
                else
                    throw new Exception("tài khoản này đã tồn tại");
            }
            catch(Exception $e){
                return $this->Success(array(
                    'isSuccess' => false,
                    'message' => $e->getMessage()
                ));
            }
        }
        $this->load->view('login/signup');
    }
    //forget password
    function forgetPassword(){
        $this->load->view('login/forgetPassword');
    }
}