<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends CI_Controller {

        function __construct() {
            parent::__construct();
            $this->load->helper('url');
            $this->load->library('javascript');
            $this->load->model('news');
            $this->load->model('user_login');
        }
        public function index()
        {
            $data = $this->show_news();
            $this->load->view('about',$data);
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
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */