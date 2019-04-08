<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class User_clas_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get user_clas by 
     */
    function get_user_clas($id)
    {
        return $this->db->get_where('user_class',array('id'=>$id))->row_array();
    }
    function get_student_by_classID($classID)
    {
        return $this->db->get_where('user_class',array('classID'=>$classID))->result_array();
    }   
    function get_user_clas_by_studentID($studentID)
    {
        return $this->db->get_where('user_class',array('studentID'=>$studentID))->result_array();
    }  
    /*
     * Get all user_class
     */
    function get_all_user_class()
    {
        $this->db->order_by('id', 'desc');
        return $this->db->get('user_class')->result_array();
    }
        
    /*
     * function to add new user_clas
     */
    function add_user_clas($params)
    {
        $this->db->insert('user_class',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update user_clas
     */
    function update_user_clas($id,$params)
    {
        $this->db->where('id',$id);
        return $this->db->update('user_class',$params);
    }
    
    /*
     * function to delete user_clas
     */
    function delete_user_clas($id)
    {
        return $this->db->delete('user_class',array('id'=>$id));
    }
}
