<?php

 
class Home extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        session_start();
        $this->load->library('ciqrcode');
        $this->load->model('Cource_model');
        $this->load->model('User_model');
        $this->load->model('Clas_model');
        $this->load->model('User_clas_model');
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

    function detail_course($courseID){
        $course = $this->Cource_model->get_cource($courseID);
        if(isset($course['courseID']))
        {
            $data['_course'] = $course;
        }
        else
            show_error('The user you are trying to finđ does not exist.');
        $this->load->view('home/detailCourse',$data);
    }

    function regCourse($courseID){
        $params['data'] = 'http://www.hoangcode.com/2015/05/tao-qrcodeci-trong-codeigniter.html';
        $params['level'] = 'H';
        $params['size'] = 4;
        $params['savename'] = FCPATH.'tes.png';
        $this->ciqrcode->generate($params); 
        $data['qrcode'] =    "<img src=".base_url()."tes.png />";  
        // $data = array(
        //     'bd'             => "<img src=".base_url()."tes.png />",
        //     'title'          => "Tạo Qrcodeci trong Codeigniter",
        //     'keywords'       => "Hoangcode Programming Blog, Huong Dan, jQuery, Ajax, PHP, MySQL and Demo",
        //     'description'    => "Hoangcode là Blog về lập trình được phát triển và duy trì bởi Hoàng Code CI. Hướng dẫn cơ bản, Jquery, Ajax, PHP, Demo, CSS3, Javascript, Codeigniter and MySQL."
        // );             
       
        $data['_course']= $this->Cource_model->get_cource($courseID);
        $data['schedule'] = $this->Clas_model->get_clas_by_courseID($courseID);
        $this->load->view('home/regCourse',$data);
    }

    function loginReg()
    {
        $this->load->view('login/loginReg');
    }
    function login_regC(){
        // if(isset($_POST) && count($_POST) > 0) {
            try{
                $account = $this->input->post('account');
                $password = $this->input->post('pass');
                $user = $this->User_model->get_user($account);
                if($user != null){
                    if($user['permissionID'] != 'HV'){
                        throw new Exception("Bạn vui lòng đăng nhập với tài khoản học viên");
                    }
                    else{
                        $user = (object)$user;
                        if($user->pass == MD5($password)){
                            $_SESSION["user"] = $user;
                            return $this->output
                            ->set_content_type('application/json')
                            ->set_output(json_encode(array(
                                    'isSuccess' => true,
                                    'message' =>"Đăng nhập thành công",
                                    "data" => $_SESSION["user"]->account
                            )));
                            
                            
                        }
                        else return $this->output
                        ->set_content_type('application/json')
                        ->set_output(json_encode(array(
                                'isSuccess' => false,
                                'message' =>"Tài khoản hoặc mật khẩu không đúng",
                                "data" => null
                        )));
                    }
                  
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
                        'message' =>$e->getMessage(),
                        "data" => null
                )));
            }
        // }
    }
    function checkLogin(){
        try{
            if(!isset($_SESSION["user"])){
                throw new Exception("Bạn vui lòng đăng nhập trước");
            }
            else if($_SESSION["user"]->permissionID != 'HV'){
                throw new Exception("Bạn vui lòng đăng nhập bằng tài khoản học viên");
            }
            else
                return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(
                        'isSuccess' => true
                )));
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
    function payment(){
        if(isset($_POST) && count($_POST) > 0) { 
            try{
                
                $classID = $this->input->post('classID');
                $_course = $this->Clas_model->get_clas($classID);
                $listST = $this->User_clas_model->get_by_studentID_classID($_SESSION["user"]->account,$classID);
                if( $listST == null){
                    $params = array(
                        'studentID' => $_SESSION["user"]->account,
                        'classID' => $this->input->post('classID')
                    );
                    return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array(
                            'isSuccess' => true,
                            'message' =>"lưu thành công",
                            'data' => $params
                    )));
                }
                else
                    throw new Exception("khóa học này đã tồn tại");
                
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
    function add_student(){
        // $data['user_class'] = $this->User_clas_model->get_all_user_class();
        // $data['course'] = $this->Cource_model->get_all_cource();
        // if(isset($_POST) && count($_POST) > 0) { 
            try{
                
              
                $res = $this->input->post('data');
                $classID = $res['classID'];
                $_courseID = $this->Clas_model->get_clas($classID);
                // $listST = $this->User_clas_model->get_by_studentID_classID($_SESSION["user"]->account,$classID);
                // if($listST == null){
                    $params = array(
                        'studentID' => $res['studentID'],
                        'classID' =>$res['classID'],
                        'status' => 'Đã hoàn thành học phí',
                        'result' => 'Chưa hoàn thành khóa học',
                    );
                    $user_clas_id = $this->User_clas_model->add_user_clas($params);
                    return $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode(array(
                            'isSuccess' => true,
                            'message' =>'Đăng kí thành công',
                            'data' =>  $_courseID['courseID']
                    )));
                // }
                // else{
                //     throw new Exception("Bạn đã đăng kí lớp học này!");
                // }
            }
            catch(Exception $e){
                
                return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode(array(
                        'isSuccess' => false,
                        'message' =>$e->getMessage()
                )));
            }
        // }
    }
    function detail_user($account){
        $user = $this->User_model->get_user($account);
        if(isset($user['account']))
        {
            $data['user'] = $user;
        }
        else
            show_error('The user you are trying to delete does not exist.');
        $this->load->view('detail_user',$data);
    }
}