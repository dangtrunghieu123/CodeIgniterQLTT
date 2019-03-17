<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Course extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Course_model');
    } 

    /*
     * Listing of courses
     */
    function index()
    {
        $data['courses'] = $this->Course_model->get_all_courses();
        
        $data['_view'] = 'course/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new course
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('nameCourse','NameCourse','required|max_length[250]');
		$this->form_validation->set_rules('amountReg','AmountReg','integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'nameCourse' => $this->input->post('nameCourse'),
				'amountReg' => $this->input->post('amountReg'),
				'image' => $this->input->post('image'),
				'description' => $this->input->post('description'),
            );
            
            $course_id = $this->Course_model->add_course($params);
            redirect('course/index');
        }
        else
        {            
            $data['_view'] = 'course/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a course
     */
    function edit($courseID)
    {   
        // check if the course exists before trying to edit it
        $data['course'] = $this->Course_model->get_course($courseID);
        
        if(isset($data['course']['courseID']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('nameCourse','NameCourse','required|max_length[250]');
			$this->form_validation->set_rules('amountReg','AmountReg','integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'nameCourse' => $this->input->post('nameCourse'),
					'amountReg' => $this->input->post('amountReg'),
					'image' => $this->input->post('image'),
					'description' => $this->input->post('description'),
                );

                $this->Course_model->update_course($courseID,$params);            
                redirect('course/index');
            }
            else
            {
                $data['_view'] = 'course/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The course you are trying to edit does not exist.');
    } 

    /*
     * Deleting course
     */
    function remove($courseID)
    {
        $course = $this->Course_model->get_course($courseID);

        // check if the course exists before trying to delete it
        if(isset($course['courseID']))
        {
            $this->Course_model->delete_course($courseID);
            redirect('course/index');
        }
        else
            show_error('The course you are trying to delete does not exist.');
    }
    
}
