<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lesson extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Lesson_model');
    } 

    /*
     * Listing of lesson
     */
    function index()
    {
        $data['lesson'] = $this->Lesson_model->get_all_lesson();
        
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
		$this->form_validation->set_rules('view','View','integer');
		$this->form_validation->set_rules('account','Account','required|max_length[100]');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nameLesson' => $this->input->post('nameLesson'),
				'view' => $this->input->post('view'),
				'account' => $this->input->post('account'),
				'image' => $this->input->post('image'),
				'description' => $this->input->post('description'),
            );
            
            $lesson_id = $this->Lesson_model->add_lesson($params);
            redirect('lesson/index');
        }
        else
        {            
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
			$this->form_validation->set_rules('view','View','integer');
			$this->form_validation->set_rules('account','Account','required|max_length[100]');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nameLesson' => $this->input->post('nameLesson'),
					'view' => $this->input->post('view'),
					'account' => $this->input->post('account'),
					'image' => $this->input->post('image'),
					'description' => $this->input->post('description'),
                );

                $this->Lesson_model->update_lesson($lessonID,$params);            
                redirect('lesson/index');
            }
            else
            {
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
    function remove($lessonID)
    {
        $lesson = $this->Lesson_model->get_lesson($lessonID);

        // check if the lesson exists before trying to delete it
        if(isset($lesson['lessonID']))
        {
            $this->Lesson_model->delete_lesson($lessonID);
            redirect('lesson/index');
        }
        else
            show_error('The lesson you are trying to delete does not exist.');
    }
    
}
