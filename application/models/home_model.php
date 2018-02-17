<?php
class home_model extends CI_model {
    public function home_product_information()
    {
             $this->db->select('*');
             $this->db->from('product_table');
            // $this->db->where('user_id',$user_id);
            // $this->db->limit(4);
            //$this->db->order_by("product_id","desc");
             $query_result=$this->db->get();
             $rslt= $query_result->result();
             return $rslt;    
    }
}
