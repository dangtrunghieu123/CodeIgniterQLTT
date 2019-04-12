<?php

 
class Login extends CI_Controller{
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
    public function logout()
	{
        session_destroy();
        return redirect(base_url().'login');
    }
    function SendEmail(){
        if(isset($_POST)){
            try{
                $email = $this->input->post("email");
                if(!empty($email)){

                    $email=$this->User_model->get_email($email);
                    
                    if($email != null){
                        // $newPassword = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 15);
                        $email = (object)$email;
                        // $this->User_model->update_password_by_email($email->email,$newPassword);
                        $_SESSION["account"] = $email->account;
                        $config = Array(
                            'protocol' => 'smtp',
                            'smtp_host' => 'ssl://smtp.googlemail.com',
                            'smtp_port' => 465,
                            'smtp_user' => 'thukara2016@gmail.com', // change it to yours
                            'smtp_pass' => 'lethithu', // change it to yours
                            'mailtype' => 'html',
                            'charset' => 'utf-8',
                            'wordwrap' => TRUE
                        );
                        $this->load->library('email', $config);
                        $this->email->set_newline("\r\n");
                        $this->email->from('thukara2016@gmail.com','lethithu'); // change it to yours
                        $this->email->to($email->email);// change it to yours
                        $this->email->subject('reset mật khẩu');
                        // $this->email->message("Mật khẩu của bạn là:".$newPassword);
                        $this->email->message("http://localhost/CodeIgniterQLTT/login/changePass/".$email->account);
                        if($this->email->send())
                        {
                            return $this->output
                            ->set_content_type('application/json')
                            ->set_output(json_encode(array(
                                    'isSuccess' => true,
                                    'message' =>"Kiểm tra email của bạn để đổi mật khẩu",
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
                    else return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array(
                            'isSuccess' => false,
                            'message' =>"Tài khoản mật khẩu không đúng",
                            "data" => null
                    )));
                }
                else return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array(
                            'isSuccess' => false,
                            'message' =>"Tài khoản mật khẩu không đúng",
                            "data" => null
                    )));
            }
            catch(Exception $e){
                return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(
                        'isSuccess' => false,
                        'message' =>"Tài khoản mật khẩu không đúng",
                        "data" => null
                )));
            }
        }
    }

    //sign up
    function singup_ajax(){
        
            if (isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH']=="XMLHttpRequest") 
            {
                try{
                    if(isset($_POST) && count($_POST) > 0){
                    
                        $account = $this->input->post('account');
                        $email = $this->input->post('email');
                        $user = $this->User_model->get_user($account);
                        $_email = $this->User_model->get_email($email);
                        if($user == null){
                            if( $_email == null){
                                $params = array(
                                    'account'=> $this->input->post('account'),
                                    'pass' => MD5($this->input->post('pass')),
                                    'name' =>  $this->input->post('name'),
                                    'email' =>  $this->input->post('email'),
                                    'gender' => $this->input->post('gender'),
                                    'permissionID' => 'HV'
                                );
                                $user_id = $this->User_model->add_user($params);
                                return $this->output
                                ->set_content_type('application/json')
                                ->set_output(json_encode(array(
                                        'isSuccess' => true,
                                        'message' =>"Đăng kí thành công",
                                        "data" => null
                                    )));
                            }
                            else{
                                return $this->output
                                ->set_content_type('application/json')
                                ->set_output(json_encode(array(
                                        'isSuccess' => false,
                                        'message' =>"email này đã tồn tại",
                                        "data" => null
                                    )));
                            }
                            
                        }
                        else 
                            return $this->output
                            ->set_content_type('application/json')
                            ->set_output(json_encode(array(
                                    'isSuccess' => false,
                                    'message' =>"Tài khoản hoặc email đã tồn tại",
                                    "data" => null
                            )));
                            // throw new Exception("Tài khoản hoặc email đã tồn tại");
                         
                    }
                    
                }
                catch(Exception $e){
                    return $this->output
                   ->set_content_type('application/json')
                   ->set_output(json_encode(array(
                           'isSuccess' => false,
                           'message' =>$e->getMessage(),
                           "data" => null
                   )));
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
    function changePass(){
        $this->load->view('login/changePassword');
    }
    function changePassword(){
        try{
        
            if(isset($_SESSION["account"])){
                $password = MD5($this->input->post('pass'));
                $params = array(
                    'pass' => $password
                );
                $this->User_model->update_user($_SESSION["account"],$params);  
                return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(
                        'isSuccess' => true,
                        'message' =>"Mật khẩu của bạn đã được đổi!"
                )));
            }
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