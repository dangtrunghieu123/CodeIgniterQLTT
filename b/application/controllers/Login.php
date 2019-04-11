<?php

 
class Login extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        
        if(!isset($_SESSION)) 
        { 
            session_start(); 
        } 
       
        $this->load->model('User_model');
        

    }

    function index()
    {
        // $returnUrl = $_GET['returnUrl'] ?? "";
        // $data['returnUrl'] = base_url().$returnUrl;
        // $ctr = new Controllerlist();
        // $ctr->getControllers();
        // echo json_encode( $ctr->getControllers());
        $this->load->view('login/login');
        

    }
    // public function logout()
	// {
    //     session_destroy();
    //     redirect('login/login');
    // }
    function SendEmail(){
        if(isset($_POST)){
            try{
                $email = $this->input->post("email");
                if(!empty($email)){

                    $email=$this->User_model->get_email($email);
                    
                    if($email != null){
                        $newPassword = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 15);
                        $email = (object)$email;
                        $this->User_model->update_password_by_email($email->email,$newPassword);
                       

                    
                    $config = Array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'ssl://smtp.googlemail.com',
                        'smtp_port' => 465,
                        'smtp_user' => 'fpohcmue@gmail.com', // change it to yours
                        'smtp_pass' => 'quangtientran1997', // change it to yours
                        'mailtype' => 'html',
                        'charset' => 'utf-8',
                        'wordwrap' => TRUE
                      );
                      ;
                            $this->load->library('email', $config);
                            $this->email->set_newline("\r\n");
                            $this->email->from('fpohcmue@gmail.com'); // change it to yours
                            $this->email->to($email->email);// change it to yours
                            $this->email->subject('Reset password thành công');
                            $this->email->message("Mật khẩu của bạn là:".$newPassword);
                            if($this->email->send())
                           {
                            return $this->output
                            ->set_content_type('application/json')
                            ->set_output(json_encode(array(
                                    'isSuccess' => true,
                                    'message' =>"Reset mật khẩu thành công",
                                    "data" => null
                            )));

                           }
                           else
                          {
                           show_error($this->email->print_debugger());
                          }
                    }
                }
                throw new Exception("Email không đúng");
            }
            catch(Exception $e){
                return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(
                        'isSuccess' => false,
                        'message' =>$e->getMessage()
                )));
            }
        }
             

    }
    // function test(){
    //     $account = $this->input->post('account');
    //     $password = $this->input->post('pass');
    //     $user = $this->User_model->get_permission_by_promissionID($account);
    //     $user = (object)$user;
    //     $_SESSION["user"] = $user;
    //     $_SESSION['listPermission'] = (array)json_decode(strtolower($user->function));
    //     echo json_encode($_SESSION['listPermission']);
    // }
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
                        $_SESSION['listPermission'] = (array)json_decode(strtolower($user->function));
                        return $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode(array(
                                'isSuccess' => true,
                                'message' =>"Đăng nhập thành công",
                                "data" => $user->permissionID
                        )));
                    }
                }
                else
                    throw new Exception('Tài khoản mật khẩu không đúng');
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