<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('course_helper');
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('user_login');
        $this->load->model('news');
    }

	public function index()
	{
            $this->load->view('admin/index');
            $this->output->cache(3);
    }
    
    public function shownews()
    {
        $this->load->view('admin/news');
    }

    public function courses()
    {
        $data = $this->getAllCourse();
        $this->load->view('admin/courses',$data);
    }
    
    public function login() 
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) 
        {
            if(isset($this->session->userdata['logged_in']))
            {
                $this->load->view('admin/admin_page');
            }
            else
            {
                $this->load->view('admin/index');
            }
        } 
        else 
        {
            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
                );
            $result = $this->user_login->login($data);
            if ($result == TRUE) 
            {
                $email = $this->input->post('email');
                $result = $this->user_login->read_user_information($email);
                if ($result != false) 
                {
                    $session_data = array(
                        'username' => $result[0]->username,
                        'email' => $result[0]->email,
                        'user_type' => $result[0]->usertype,
                        'dashboard' => "dashboard"
                    );
                    // Add user data in session
                    $this->session->set_userdata('logged_in', $session_data);
                    $this->load->view('admin/admin_page');
                }
            } 
            else 
            {
                $data = array(
                    'error_message' => 'Invalid Username or Password'
                );
                $this->load->view('admin/index', $data);
            }
        }
    }
    
    public function logout() 
    {   
        // Removing session data
        $sess_array = array(
            'username' => ''
        );
        $this->session->unset_userdata('logged_in', $sess_array);
        $data['message_display'] = 'Successfully Logout';
        $this->load->view('admin/index', $data);
    }
    
    ////////////////////////Below function implements both type of validation Client as well as Server Side/////////////////////////////
    
    public function news()
    {
        if ($this->input->is_ajax_request()) {
            
            $this->form_validation->set_rules('heading', 'Heading', 'trim|required');
            $this->form_validation->set_rules('article', 'Article', 'trim|required');

            if($this->form_validation->run() != FALSE){
                
                $data = array(
                    'heading' => $this->input->post('heading'),
                    'article' => $this->input->post('article')
                    );
                $result = $this->news->add_news($data);
                if ($result == true){
                    echo json_encode(["data"=>"Article Inserted","success"=>true]);
                }else{
                    //$data["type"] = $this->input->request_headers();
                    //$data["message"]="Article already exist";
                    echo json_encode(["data"=>"Article already exist","success"=>false]);
                }
            }else {
                echo json_encode(["data"=>validation_errors(),"success"=>false]);
            }
        }else{
            
            $this->form_validation->set_rules('heading', 'Heading', 'trim|required');
            $this->form_validation->set_rules('article', 'Article', 'trim|required');

            if($this->form_validation->run() != FALSE){
                
                $data = array('heading' => $this->input->post('heading'),'article' => $this->input->post('article'));
                $result = $this->news->add_news($data);
                if ($result == true){
                    $data = array('error' => 'Article Inserted');
                    $this->load->view('admin/news',$data);
                }else{
                    $data = array('error' => 'Article already exist');
                    $this->load->view('admin/news',$data);
                }
            }else {
                $this->load->view('admin/news');
            }
        }
        
    }
    public function addCourse()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required');
        $this->form_validation->set_rules('key', 'Key', 'trim|required');
        if($this->form_validation->run() != FALSE)
        {
            $data = array(
                'name' => $this->input->post('name'),
                'detail' => $this->input->post('detail'),
                'key' => $this->input->post('key')
                );
            $result = $this->news->addCourse($data);
            if ($result == true) 
            {
                //$data["json"] = json_encode(["data"=>"Course Inserted","success"=>true]);
                //$data["result"] = $this->courses();
                //$this->load->view('admin/courses',$data);
                echo json_encode(["data"=>"Course Inserted","success"=>true]);
            }
            else 
            {
                echo json_encode(["data"=>"Course or Course Key already exist","success"=>false]);
            }
        }
        else {
            //$this->courses();
            //$data["json"] = json_encode(["data"=>validation_errors(),"success"=>false]);
            //$data["result"] = $this->courses();
            //$this->load->view('admin/courses',$data);
            echo json_encode(["data"=>validation_errors(),"success"=>false]);
        }
    }
    
    public function getAllCourse(){
        $data["result"] = $this->news->getAllCourse();
        return $data;
    }
    
    public function getCourseDetail(){
        $data = array(
                'id' => $this->input->post('id')
            );
        $result = $this->news->get_course_detail($data);
        if($result == true){
            echo json_encode(["data"=>$result,"success"=>true]);
        }else{
            echo json_encode(["data"=>"No course found","success"=>false]);
        }
    }
    
    public function updateCourse()
    {
        $this->form_validation->set_rules('name', 'Name', 'trim|required');
        $this->form_validation->set_rules('detail', 'Detail', 'trim|required');
        $this->form_validation->set_rules('key', 'Key', 'trim|required');
        if($this->form_validation->run() != FALSE)
        {
            $data = array(
                'name' => $this->input->post('name'),
                'detail' => $this->input->post('detail'),
                'key' => $this->input->post('key'),
                'courseid' => $this->input->post('courseid')
                );
                //print_r($data);
            $result = $this->news->update_course($data);
            if ($result == true) 
            {
                echo json_encode(["data"=>"Course Updated","success"=>true]);
            }
            else 
            {
                echo json_encode(["data"=>"Please update some value first and try again.","success"=>false]);
            }
        }
        else {
            echo json_encode(["data"=>validation_errors(),"success"=>false]);
        }
    }
    
    public function deleteCourse()
    {
        $data = array(
            'deleteid' => $this->input->post('deleteid')
            );
            //print_r($data);
        $result = $this->news->delete_course($data);
        if ($result == true) 
        {
            echo json_encode(["data"=>"Course Deleted","success"=>true]);
        }
        else 
        {
            echo json_encode(["data"=>"Some error occurred, try again later.","success"=>false]);
        }            
    }
    public function addSubject()
    {
        $this->form_validation->set_rules('courseName', 'Course Name', 'trim|required');
        $this->form_validation->set_rules('streamName', 'Stream Name', 'trim|required');
        $this->form_validation->set_rules('subName', 'Subject Name', 'trim|required');
        $this->form_validation->set_rules('subDetail', 'Subject Detail', 'trim|required');
        $this->form_validation->set_rules('semester', 'Semester', 'trim|required');
        if($this->form_validation->run() != FALSE)
        {
            $data = array(
                'courseName' => $this->input->post('courseName'),
                'streamName' => $this->input->post('streamName'),
                'subName' => $this->input->post('subName'),
                'subDetail' => $this->input->post('subDetail'),
                'semester' => $this->input->post('semester')
                );
            $result = $this->news->addSubject($data);
            if ($result == true) 
            {
                $data = $this->getAllCourse();
                $data["msg"] = "Subject Inserted";
                $this->load->view('admin/courses',$data);
            }
            else 
            {
                $data = $this->getAllCourse();
                $data["msg"] = "Subject already exists";
                $this->load->view('admin/courses',$data);
            }
        }
        else {
            $data = $this->getAllCourse();
            $data["msg"] = "";
            $this->load->view('admin/courses',$data);
        }
    }
    
    public function getStreamByCourse(){
        
        $data = array(
                'courseName' => $this->input->post('coursename')
            );
        
        $result = $this->news->get_stream_by_course($data);
        if($result != ""){
            echo json_encode(["data"=>$result,"success"=>true]);
        }else{
            echo json_encode(["data"=>"No Stream found","success"=>false]);
        }
    }
}