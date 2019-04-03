<?php 

class MY_Controller extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        // $this->load->model('User_active_model');
        // $this->load->model('User_onlines_model');

        // session_start();
        // $loginPage = "auth?returnUrl=";
        // //print_r(json_encode((object)$this->controllerlist->getControllers()));
        // if(!isset($_SESSION["user"]))
        // {
        //     return redirect(base_url().$loginPage.$_SERVER['REDIRECT_QUERY_STRING'] ?? '/');
        // }
        
        //  $this->CheckPermission();
        //  $this->refreshUserActive();
    } 
    public function CheckPermission(){
        $this->load->model('User_model');
        $user = $this->User_model->get_username($_SESSION['user']->username);
        $_SESSION['listPermission'] = (array)json_decode(strtolower($user['function']));

        $class = strtolower($this->router->fetch_class());
        $method = strtolower($this->router->fetch_method());
        if(!(isset($_SESSION['listPermission'][$class]) && in_array($method,$_SESSION['listPermission'][$class]))){
            show_error("Bạn không có quyền truy cập trang này" , 403 );
        }
    }
    public function Success($ar = array(
        'isSuccess' => true,
        'message'   => "Thành công",
        'data'      => null
    )){
        $dt = array(
            'isSuccess' => $ar['isSuccess'] ?? true,
            'message' =>$ar['message'] ?? "Thành công",
            'data' => $ar['data'] ?? null
        );
        return $this->output
                ->set_content_type('application/json')
                ->set_output(json_encode($dt));
    }
    // public function refreshUserActive(){
    //  //add user_active
     
    //  $sessionId=session_id();
    //  $this->User_active_model->delete_user_active();
    //  $user_active = $this->User_active_model->get_by_sessionId($sessionId);
    //  if ( $user_active == 0 ) {
    //     date_default_timezone_set('Asia/Ho_Chi_Minh');
    //  $timeOut = time() + 600;
    
    //      $params = array(

             
    //          'sessionId' =>$sessionId,
    //          'timeIn' =>date('Y-m-d H:i:s',time()),
    //          'timeOut' =>date('Y-m-d H:i:s', $timeOut)
             
            
    //      );
        
        
    //      $user_active = $this->User_active_model->add_user_active($params);

    //  }
    //  else{
    //      $timeOut = time() + 600;
        
    //      $params = array(
             
    //          'timeOut' =>date('Y-m-d H:i:s', $timeOut),
            
    //      );
    //      $user_active = $this->User_active_model->update_user_active($sessionId,$params);
    //  }

    // }

    
}