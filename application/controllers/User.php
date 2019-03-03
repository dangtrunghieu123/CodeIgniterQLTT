<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    } 

    /*
     * Listing of user
     */
    function index()
    {
        $data['user'] = $this->User_model->get_all_user();
        
        $data['_view'] = 'user/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new user
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('email','Email','required|valid_email');
		$this->form_validation->set_rules('phone','Phone','numeric');
		$this->form_validation->set_rules('gender','Gender','required');
		$this->form_validation->set_rules('userTypeId','UserTypeId','required');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'password' => $this->input->post('password'),
				'email' => $this->input->post('email'),
				'phone' => $this->input->post('phone'),
				'gender' => $this->input->post('gender'),
				'userTypeId' => $this->input->post('userTypeId'),
				'address' => $this->input->post('address'),
            );
            
            $user_id = $this->User_model->add_user($params);
            redirect('user/index');
        }
        else
        {            
            $data['_view'] = 'user/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a user
     */
    function edit($username)
    {   
        // check if the user exists before trying to edit it
        $data['user'] = $this->User_model->get_user($username);
        
        if(isset($data['user']['username']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('password','Password','required');
			$this->form_validation->set_rules('email','Email','required|valid_email');
			$this->form_validation->set_rules('phone','Phone','numeric');
			$this->form_validation->set_rules('gender','Gender','required');
			$this->form_validation->set_rules('userTypeId','UserTypeId','required');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'password' => $this->input->post('password'),
					'email' => $this->input->post('email'),
					'phone' => $this->input->post('phone'),
					'gender' => $this->input->post('gender'),
					'userTypeId' => $this->input->post('userTypeId'),
					'address' => $this->input->post('address'),
                );

                $this->User_model->update_user($username,$params);            
                redirect('user/index');
            }
            else
            {
                $data['_view'] = 'user/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The user you are trying to edit does not exist.');
    } 

    /*
     * Deleting user
     */
    function remove($username)
    {
        $user = $this->User_model->get_user($username);

        // check if the user exists before trying to delete it
        if(isset($user['username']))
        {
            $this->User_model->delete_user($username);
            redirect('user/index');
        }
        else
            show_error('The user you are trying to delete does not exist.');
    }
    
}
