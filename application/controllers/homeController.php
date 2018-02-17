
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homeController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('home_model');
    }

	public function index()
	{
	    $data=array();
            $data['home_product_info']=$this->home_model->home_product_information();
            $this->load->view('home',$data);
	}
        public function about()
	{
		$this->load->view('about_us');
	}
        public function registration()
	{
		$this->load->view('registration');
	}
        public function login()
	{
		$this->load->view('login');
	}
}
