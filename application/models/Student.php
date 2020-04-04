<?php

Class Student extends CI_Model {
    function getStudentDetail($data){
        $studentName = $data["studentName"];
        $courseKey = $data["courseName"];
        $courseid = $this->getCourseId($courseKey);
        $courseid = $courseid[0]['courseid'];
        $this->db->select('*');
        $this->db->from('studentdetails');
        $this->db->where(array('studfname'=>$studentName,'courseid'=>$courseid));
        $query = $this->db->get();
        $result = $query->result_array();
        if($query->num_rows() != 0){
            return $result;
        }else{
            return false;
        }
    }

    function getCourseId($courseKey){
        $this->db->select('*');
        $this->db->from('course');
        $this->db->where(array('coursekey'=>$courseKey));
        $query = $this->db->get();
        $result = $query->result_array();
        if($query->num_rows() != 0){
            return $result;
        }else{
            return false;
        }
    }
    
    function getStreamId($streamKey){
        $this->db->select('*');
        $this->db->from('stream');
        $this->db->where(array('stream_key'=>$streamKey));
        $query = $this->db->get();
        $result = $query->result_array();
        if($query->num_rows() != 0){
            return $result;
        }else{
            return false;
        }
    }
}
