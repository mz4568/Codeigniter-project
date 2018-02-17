
<?php
    class  login_model  extends CI_model{
    public function login_data($email,$password)
    {
             $email=$this->input->post('email',true);
             $password=md5($this->input->post('password',true));
             $this->db->select('*');
             $this->db->from('data_registration');
             $this->db->where('email',$email);
             $this->db->where('password',$password);
             $this->db->where('status',1);
             $query_result=$this->db->get();
             $result= $query_result->row();
             return $result;        
    }
}