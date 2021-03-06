<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_paket_booster extends CI_Model {

	Public function __construct()
    {
      parent::__construct();
      $this->load->database();
    }
    public function select_paket_booster()
    {
      $this->db->select('*');
      $this->db->from('paket_booster');  
      $this->db->order_by('id_booster', 'DESC');  
      $query  = $this->db->get();
      return $query->result();
    }

    public function count_semua()
    {
      $this->db->select('*');
      $this->db->from('paket_booster');
      $publish = $this->db->count_all_results();
      return $publish;
    }   
    public function count_published()      
    {  
      $this->db->select('*');
      $this->db->from('paket_booster');  
      $this->db->where('status_booster', '1');
      $publish = $this->db->count_all_results();
      return $publish;
    }
    public function count_pending()
    {
      $this->db->select('*');   
      $this->db->from('paket_booster');
      $this->db->where('status_booster', '0');
      $pending = $this->db->count_all_results();
      return $pending;
    }
    public function select_published()
    {  
      $this->db->select('*');
      $this->db->from('paket_booster');
      $this->db->where('status_booster', '1');
      $this->db->order_by('id_booster', 'DESC');
      $query = $this->db->get();
      return $query->result();
    }
    public function select_pending()
    {
      $this->db->select('*');
      $this->db->from('paket_booster');
      $this->db->where('status_booster', '0');
      $this->db->order_by('id_booster', 'DESC');
      $query  = $this->db->get();
      return $query->result();
    }   
    public function select_bab($id_booster)
    {
      $this->db->select('*');
      $this->db->from('paket_booster');
      $this->db->where('id_booster', $id_booster);  
      $this->db->order_by('id_booster', 'DESC');
      $query = $this->db->get();
      return $query->row();
    }

    public function delete($data)   
    {
      $this->db->where('id_booster',$data['id']);
      $this->db->delete('paket_booster');
    }
    public function add($data)
    {
        $this->db->insert('paket_booster', $data);
    }  

    public function detail($slug){   
      $query=$this->db->get_where('paket_booster',array('slug'=> $slug));
      return $query->row();
    }

    public function edit($data,$slug){
      $this->db->where('slug',$slug);
      $this->db->update('paket_booster',$data);
    }

}

/* End of file M_paket_booster.php */
/* Location: ./application/models/M_paket_booster.php */