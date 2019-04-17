<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Detail_uc extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Detail_uc_model');
    } 

    /*
     * Listing of detail_uc
     */
    function index()
    {
        $data['detail_uc'] = $this->Detail_uc_model->get_all_detail_uc();
        
        $data['_view'] = 'detail_uc/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new detail_uc
     */
    function add()
    {   
        $this->load->library('form_validation');

		$this->form_validation->set_rules('userClassID','UserClassID','required|integer');
		$this->form_validation->set_rules('courseID','CourseID','required|integer');
		
		if($this->form_validation->run())     
        {   
            $params = array(
				'userClassID' => $this->input->post('userClassID'),
				'courseID' => $this->input->post('courseID'),
            );
            
            $detail_uc_id = $this->Detail_uc_model->add_detail_uc($params);
            redirect('detail_uc/index');
        }
        else
        {            
            $data['_view'] = 'detail_uc/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a detail_uc
     */
    function edit($id)
    {   
        // check if the detail_uc exists before trying to edit it
        $data['detail_uc'] = $this->Detail_uc_model->get_detail_uc($id);
        
        if(isset($data['detail_uc']['id']))
        {
            $this->load->library('form_validation');

			$this->form_validation->set_rules('userClassID','UserClassID','required|integer');
			$this->form_validation->set_rules('courseID','CourseID','required|integer');
		
			if($this->form_validation->run())     
            {   
                $params = array(
					'userClassID' => $this->input->post('userClassID'),
					'courseID' => $this->input->post('courseID'),
                );

                $this->Detail_uc_model->update_detail_uc($id,$params);            
                redirect('detail_uc/index');
            }
            else
            {
                $data['_view'] = 'detail_uc/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The detail_uc you are trying to edit does not exist.');
    } 

    /*
     * Deleting detail_uc
     */
    function remove($id)
    {
        $detail_uc = $this->Detail_uc_model->get_detail_uc($id);

        // check if the detail_uc exists before trying to delete it
        if(isset($detail_uc['id']))
        {
            $this->Detail_uc_model->delete_detail_uc($id);
            redirect('detail_uc/index');
        }
        else
            show_error('The detail_uc you are trying to delete does not exist.');
    }
    
}
