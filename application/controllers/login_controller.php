<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class login_controller extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('login_model');
    }
     public function Login_info()
     {
     $email=$this->input->post('email',true);
     $password=$this->input->post('password',true);
     $result=$this->login_model->login_data($email,$password);
   if($result) {
      $data=array() ; 
      $data['regi_id']=$result->regi_id;
      $data['first_name']=$result->first_name;
      $data['middle_name']=$result->middle_name;
      $data['last_name']=$result->last_name;
      $data['type']=$result->type;
      $this->session->set_userdata($data);
      redirect("admin_controller",'refresh');
    }else{
        $data['message']='Please enter valid email/password';
        $this->session->set_userdata($data);
        redirect('homeController/login');
         }
    }
}
