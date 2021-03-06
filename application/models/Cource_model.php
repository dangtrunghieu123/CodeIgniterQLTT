<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Cource_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get cource by courseID
     */
    function get_cource($courseID)
    {
        return $this->db->get_where('cource',array('courseID'=>$courseID))->row_array();
    }

    function get_cource_by_author($author)
    {
        return $this->db->get_where('cource',array('author'=>$author))->result_array();
    }
    /*
     * Get all cource
     */
    function get_all_cource()
    {
        $this->db->order_by('courseID', 'desc');
        return $this->db->get('cource')->result_array();
    }
    function get_time($courseID,$classID)
    {
        return $this->db->select("cl.*")->from('cource c')
        ->join('class cl','cl.courseID = c.courseID ')
        ->where(array('c.courseID'=>$courseID,'cl.classID'=>$classID))
        ->get() 
        ->result_array();
    } 
    function get_times($courseID)
    {
        return $this->db->select("cl.*,c.nameCourse,c.courseID")->from('cource c')
        ->join('class cl','cl.courseID = c.courseID ')
        ->where('c.courseID',$courseID)
        ->get() 
        ->result_array();
    } 
    function get_courses_by_teacherID($teacherID){
        return $this->db->select("c.*,cl.*")->from('class cl')
        ->join('cource c','c.courseID = cl.courseID')
        ->where('cl.teacherID',$teacherID)
        ->get() 
        ->result_array();
    }
    function get_courses_by_teacherID_distinct($teacherID){
        return $this->db->select("c.*")->distinct()->from('class cl')
        ->join('cource c','c.courseID = cl.courseID')
        ->where('cl.teacherID',$teacherID)
        ->get() 
        ->result_array();
    }
   
    function get_courses_of_student($studentID){
        return $this->db->select("c.*,cl.times,cl.teacherID,uc.result")->from('user_class uc')
        ->join('class cl','cl.classID = uc.classID')
        ->join('cource c','c.courseID = cl.courseID')
        ->where('uc.studentID',$studentID)
        ->get() 
        ->result_array();
    }
    /*
     * function to add new cource
     */
    function add_cource($params)
    {
        $this->db->insert('cource',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update cource
     */
    function update_cource($courseID,$params)
    {
        $this->db->where('courseID',$courseID);
        return $this->db->update('cource',$params);
    }
    
    /*
     * function to delete cource
     */
    function delete_cource($courseID)
    {
        return $this->db->delete('cource',array('courseID'=>$courseID));
    }
}
