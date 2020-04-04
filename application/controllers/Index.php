<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Index extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('url');
        $this->load->model('news');
        $this->load->model('user_login');
    }
    public function index()
    {
        $data = $this->show_news();
        $this->load->view('index',$data);
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
        $page_request = $this->input->post('page');
        $page_request = substr($page_request,13);
        if($page_request == "index/subscription"){
            $page_request = preg_replace('/\W\w+\s*(\W*)$/', '$1', $page_request);
        }elseif($page_request != ""){
            $page_request = rtrim($page_request,'/');
        }  else {
            $page_request = "index";
        }
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
        
        $this->load->view($page_request,$data);
    }
    public function unsubscribe()
    {
        $data = $this->show_news();
        $email = $this->input->post('email');
        $result = $this->user_login->unsubscribe_newsletter($email);
        if($result == FALSE){
            $data["error"] = "You are not yet unsubscribed to our Newslatter";
        }
        else{
            $data["error"] = "You are now unsubscribed to our Newslatter";
        }
        $this->load->view('index',$data);
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */