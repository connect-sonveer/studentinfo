<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Students extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->model('news');
        $this->load->model('User_login');
        $this->load->model('Student');
        $this->load->helper('course_helper');
    }

    public function index()
    {
        $data = $this->show_news();
        $this->load->view('student',$data);   
    }

    public function show_news()
    {
        $result = $this->news->shownews();
        if($result == FALSE){
            $data["error"] = "Wait for some news to come";
        }
        else{
            $data["query_result"] = $this->news->shownews(); 
            return $data;
        }
    }
    
    function studentDetail(){
        $this->form_validation->set_rules('studentName', 'Student Name', 'trim|required');
        $this->form_validation->set_rules('courseName', 'Course Name', 'trim|required');
        if($this->form_validation->run() != FALSE)
        {
            $data = array(
                'studentName' => $this->input->post('studentName'),
                'courseName' => $this->input->post('courseName')
                );
                //print_r($data);
            $result = $this->Student->getStudentDetail($data);
            if ($result == true) 
            {
                $data = $this->show_news();
                $data["result"] = $result;
                $this->load->view('student',$data);
            }
            else 
            {
                $data = $this->show_news();
                $data["error"] = "No Match Found";
                $this->load->view('student',$data);
            }
        }
        else {
            $data = $this->index();
        }
    }
}

