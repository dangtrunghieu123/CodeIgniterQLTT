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
                $account = $this->input->post('account');
                $password = $this->input->post('pass');
                $user = $this->User_model->get_permission_by_promissionID($account);
                if($user != null){
                    $user = (object)$user;
                    if($user->pass == MD5($password)){
                        $_SESSION["user"] = $user;
                        return $this->Success(array(
                            'message' => 'Đăng nhập thành công!'
                        ));
                        
                    }
                }
                else
                    throw new Exception('  Tài khoản mật khẩu không đúng');
            }
            catch(Exception $e){
                return $this->Success(array(
                    'isSuccess' => false,
                    'message' => $e->getMessage()
                ));
            }
        }
    }

    //sign up
    function singup_ajax(){
        
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest") 
            {
                if(isset($_POST) && count($_POST) > 0){
                    try{
                        $account = $this->input->post('account');
                        $user = $this->User_model->get_user($account);
                        if($user == null){
                            $params = array(
                                'account'=> $this->input->post('account'),
                                'pass' => MD5($this->input->post('pass')),
                                'name' =>  $this->input->post('name'),
                                'email' =>  $this->input->post('email'),
                                'gender' => $this->input->post('gender'),
                                'permissionID' => 'HV'
                            );
                            $user_id = $this->User_model->add_user($params);
                            return $this->Success(array(
                                'message' => 'Đăng kí thành công!'
                            ));
                        }
                        else{
                            throw new Exception("tài khoản này đã tồn tại");
                        }    
                    }
                    catch(Exception $e){
                        return $this->Success(array(
                            'isSuccess' => false,
                            'message' => $e->getMessage()
                        ));
                    }
                }
            }
    }
    function signup(){
        $this->load->view('login/signup');
    }
    //forget password
    function forgetPassword(){
        $this->load->view('login/forgetPassword');
    }
}