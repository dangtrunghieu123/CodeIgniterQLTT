<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Lesson_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get lesson by lessonID
     */
    function get_lesson($lessonID)
    {
        return $this->db->get_where('lesson',array('lessonID'=>$lessonID))->row_array();
    }
    function get_name_lesson($nameLesson)
    {
        return $this->db->get_where('lesson',array('nameLesson'=>$nameLesson))->row_array();
    } 
    function get_lesson_by_author($author)
    {
        return $this->db->get_where('lesson',array('author'=>$author))->row_array();
    } 
    /*
     * Get all lesson
     */
    function get_all_lesson()
    {
        $this->db->order_by('lessonID', 'desc');
        return $this->db->get('lesson')->result_array();
    }
        
    /*
     * function to add new lesson
     */
    function add_lesson($params)
    {
        $this->db->insert('lesson',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update lesson
     */
    function update_lesson($lessonID,$params)
    {
        $this->db->where('lessonID',$lessonID);
        return $this->db->update('lesson',$params);
    }
    
    /*
     * function to delete lesson
     */
    function delete_lesson($lessonID)
    {
        return $this->db->delete('lesson',array('lessonID'=>$lessonID));
    }
}
