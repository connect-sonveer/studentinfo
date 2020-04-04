<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('javascript');
        $this->load->library('form_validation');
        $this->load->model('news');
        $this->load->model('user_login');
    }
    public function index()
    {
        $data = $this->show_news();
        $this->load->view('contact',$data);
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
    public function subscription()
    {
        $data = $this->show_news();
        $email = $this->input->post('email');
        $result = $this->user_login->newsletter($email);
        if($result === false){
                $data["msg"] = "You must be a user of Student's Site";
        }
        elseif($result === 0) 
        {
                $data["msg"] = "You are already subscriped to our Newsletter";
        }
        else
        {
                $data["msg"] = "You are subscriped to our Newsletter";
        }

        $this->load->view('articles',$data);
    }
    public function contactus()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('mobile', 'Mobile', 'trim|required|exact_length[10]|valid_phone_number_or_empty');
        //$this->form_validation->set_rules('message', 'Message', 'trim|required');
        
        if($this->form_validation->run() == FALSE){
            $data = $this->show_news();
            $data["error"] = "";
            $this->load->view('contact',$data);
        }else{
            $data = array(
            "name" => $this->input->post('name'),
            "email" => $this->input->post('email'),
            "mobile" => $this->input->post('mobile'),
            "subject" => $this->input->post('subject'),
            "message" => $this->input->post('msg')
            );
            
            $result = $this->user_login->contact($data);
            $data = $this->show_news();
            if($result === FALSE){
                    $data["error"] = "Some error occured, please try again";
            }else{
                    $data["error"] = "Your query has benn taken into account. Thanks for contacting us.";
            }
            $this->load->view('contact',$data);
        }
    }
}

