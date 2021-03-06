<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lesson extends MY_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lesson_model');
        $this->load->model('User_model');
        $this->load->model('Detail_lc_model');
        $this->load->model('Cource_model');
        $_SESSION['navi'] = 'lesson';
    } 

    /*
     * Listing of lesson
     */
    function index()
    {
        $data['lesson'] = $this->Lesson_model->get_all_lesson();
        $data['_cource'] = $this->Cource_model->get_all_cource();
        $data['_view'] = 'lesson/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new lesson
     */
    function add()
    {   
       
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nameLesson','NameLesson','required|max_length[250]');
		$this->form_validation->set_rules('author','Author','required|max_length[100]');
		$this->form_validation->set_rules('content','Content','required');
        $name = $this->Lesson_model->get_name_lesson($this->input->post('nameLesson'));
		if($this->form_validation->run())     
        {   
            if($name == null){
                print_r($name);
                if(isset($_POST) && count($_POST) > 0)  {
                    $params = array(
                        'nameLesson' => $this->input->post('nameLesson'),
                        'author' => $this->input->post('author'),
                        'content' => $this->input->post('content')
                    );
                    
                    $lesson_id = $this->Lesson_model->add_lesson($params);
                    redirect('lesson/index');
                }
                else{
                    $data['author'] = $this->User_model->get_author_create_lesson();        
                    $data['_view'] = 'lesson/add';
                    $this->load->view('layouts/main',$data);
                }
            }
            else{
                // echo "test";
                $data['author'] = $this->User_model->get_author_create_lesson();        
                $data['_view'] = 'lesson/index';
                $this->load->view('layouts/main',$data);
            }
        }
        else
        {    
            $data['author'] = $this->User_model->get_author_create_lesson();        
            $data['_view'] = 'lesson/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a lesson
     */
    function edit($lessonID)
    {   
        // check if the lesson exists before trying to edit it
        $data['lesson'] = $this->Lesson_model->get_lesson($lessonID);
        
        if(isset($data['lesson']['lessonID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nameLesson','NameLesson','required|max_length[250]');
			$this->form_validation->set_rules('author','Author','required|max_length[100]');
			$this->form_validation->set_rules('image','Image','required');
			$this->form_validation->set_rules('content','Content','required');
		
			if($this->form_validation->run())     
            {   
                if(isset($_POST) && count($_POST) > 0) {
                    $params = array(
                        'nameLesson' => $this->input->post('nameLesson'),
                        'author' => $this->input->post('author'),
                        'content' => $this->input->post('content'),
                    );
    
                    $this->Lesson_model->update_lesson($lessonID,$params);            
                    redirect('lesson/index');
                }
                else
                {
                    
                    $data['author'] = $this->User_model->get_author_create_lesson(); 
                    $data['_view'] = 'lesson/edit';
                    $this->load->view('layouts/main',$data);
                }
                
            }
            else
            {
                
                $data['author'] = $this->User_model->get_author_create_lesson(); 
                $data['_view'] = 'lesson/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The lesson you are trying to edit does not exist.');
    } 

    /*
     * Deleting lesson
     */
    function remove()
    {
        try{
            $id =  $this->input->post('id');
            $lesson = $this->Lesson_model->get_lesson($id);
            // check if the lesson exists before trying to delete it
            if(isset($lesson['lessonID']))
            {
                $list_courseLC = $this->Detail_lc_model->get_detail_lc_by_lessonID($lesson['lessonID']);
                if($list_courseLC != null){
                    throw new Exception("Vui lòng xóa các bài thông bài học này trong các khóa học");
                }
                $this->Lesson_model->delete_lesson($lesson['lessonID']);
                return $this->Success(array(
                    'message' => 'Xóa thành công!'
                ));
                redirect('lesson/index');
            }
            else
                show_error('The lesson you are trying to delete does not exist.');
        }
        catch(Exception $e){
            return $this->Success(array(
                'isSuccess' => false,
                'message' => $e->getMessage()
            ));
        }
        

       
    }

    function addIntoCourse(){
        try{
            
            $courseID = $this->input->post('idCourse');
            $lessonID = $this->input->post('idLesson');
            $detail_lc = $this->Detail_lc_model->get_by_lessonID_courseID($lessonID,$courseID);
            if($detail_lc === null){
                $params = array(
                    'courseID' => $courseID,
                    'lessonID' => $lessonID
                );
                $detail_lc_id = $this->Detail_lc_model->add_detail_lc($params);
                return $this->Success(array(
                    'message' => 'Thêm thành công!'
                ));
            }
            else 
                throw new Exception('bài học này đã tồn tại');
            
        }
        catch(Exception $e){
            return $this->Success(array(
                'isSuccess' => false,
                'message' => $e->getMessage()
            ));
        }
        
    }
    
    
}
