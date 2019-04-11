<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Student extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Cource_model');
        $this->load->model('User_model');
        $this->load->model('Lesson_model');
         $this->load->model('User_clas_model');
        $this->load->model('Clas_model');
        $this->load->model('Detail_lc_model');
        $_SESSION['navi'] = 'student';
    }

    function index()
    {
      
        $studentID = $_SESSION["user"]->account;
        $data['myCourse'] = $this->Cource_model->get_courses_of_student($studentID);
        $data['_view'] = 'student/my_course';
        $this->load->view('layouts/main',$data);
    }

    function listLesson($courseID){
        $data['name'] = $this->Cource_model->get_cource($courseID);
        $data['lesson'] = $this->Detail_lc_model->get_detail_lc_by_courseID($courseID);
        $data['_view'] = 'student/listLesson';
        $this->load->view('layouts/main',$data);
    }
    function D_lesson($lessonID){
        $data['lesson'] = $this->Lesson_model->get_lesson($lessonID);
        $data['_view'] = 'student/DetailLesson';
        $this->load->view('layouts/main',$data);
    }
}
