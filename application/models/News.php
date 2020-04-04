<?php

Class News extends CI_Model {
    
    public function add_news($data) 
    {
        $condition = "title =" . "'" . $data['heading'] . "'";
        $this->db->select('*');
        $this->db->from('news');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();

        if ($query->num_rows() == 0) 
        {
            $data = array(
                'title'=>$data['heading'],
                'news_content'=>$data['article']
            );
            $this->db->insert('news', $data);
            return true;
        } 
        else 
        {
            return false;
        }
    }
    
    public function shownews() 
    {
        //$query = $this->db->get('news');
        $this->db->select('*');
        $this->db->from('news');
        $this->db->limit(3);
        $this->db->order_by('created_on','desc');
        $query = $this->db->get();
        $result = $query->result_array();
        $count = count($result); 

        if(empty($count)){ 
            return FALSE;
        }
        else{
            return $result;
        }
    }
    public function addCourse($data) 
    {
        $query = "select * from course where coursename = '".$data["name"]."' or coursekey = '".$data["key"]."'";
        $result = $this->db->query($query);

        if ($result->num_rows() == 0) 
        {
            $data = array(
                'coursename'=>$data['name'],
                'comment'=>$data['detail'],
                'coursekey'=>$data['key']
            );
            $this->db->insert('course', $data);
            return true;
        } 
        else 
        {
            return false;
        }
    }
    public function getAllCourse(){
        $query = $this->db->get('course');
            if($query->num_rows() == 0){
                return FALSE;
            }  else {
                $results = $query->result();
                return $results;
            }
    }
    
    public function get_course_detail($data){
        $id = $data["id"];
        $condition = "courseid =" . "'" . $id . "'";
        $this->db->select('*');
        $this->db->from('course');
        $this->db->where($condition);
        $query = $this->db->get();
        
        if ($query->num_rows() == 1){
            $results = $query->result();
            return $results;
        } 
        else{
            return false;
        }
    }
    
    public function update_course($data){
        $data = array(
            'coursename'=>$data['name'],
            'comment'=>$data['detail'],
            'coursekey'=>$data['key'],
            'courseid'=>$data['courseid']
        );
        $this->db->where('courseid',$data["courseid"]);
        $this->db->update('course', $data);
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    
    public function delete_course($data){
        $courseid = $data['deleteid'];
        $this->db->delete('course', array('courseid' => $courseid));
        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }
    }
    public function addSubject($data) 
    {
        $courseDetail = $this->getCourseId($data['courseName']);
        $streamName = $this->getstreamId($data['streamName']);
        $this->db->select('*');
        $this->db->from('subject');
        $this->db->where(array('subname'=>$data['subName'],'courseid'=>$courseDetail[0]['courseid'],'streamid'=>$streamName[0]['id'],'semester'=>$data['semester']));
        $query = $this->db->get();
        $result = $query->result_array();
        if($query->num_rows() == 0){
            $data = array(
                'courseid'=>$courseDetail[0]['courseid'],
                'streamid'=>$streamName[0]['id'],
                'subname'=>$data['subName'],
                'semester'=>$data['semester'],
                'comment'=>$data['subDetail']
            );
            $this->db->insert('subject', $data);
            return true;
        }else{
            return false;
        }
        
        //$result = $this->db->insert('subject',$data);

    }
    function getCourseId($courseName)
    {
         $CI =& get_instance();
         $CI->load->model('studentModel');
         return $CI->studentModel->getCourseId($courseName);
    }
    
    function getstreamId($streamName)
    {
         $CI =& get_instance();
         $CI->load->model('studentModel');
         return $CI->studentModel->getStreamId($streamName);
    }
    
    function get_stream_by_course($data)
    {
        $courseDetail = $this->getCourseId($data['courseName']);
        $this->db->select('*');
        $this->db->from('stream');
        $this->db->where(array('course_id'=>$courseDetail[0]['courseid']));
        $query = $this->db->get();
        $result = $query->result_array();
        if($query->num_rows() != 0){
            return $result;
        }else{
            return false;
        }
    }
}