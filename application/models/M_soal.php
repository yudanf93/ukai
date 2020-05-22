<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_soal extends CI_Model {

	public function __construct()
    {
      parent::__construct();
      $this->load->database(); 
    }

    public function select_soal()
    {
      $this->db->select('soal.*, bab_booster.*, paket_booster.*, paket_reguler.*');
      $this->db->from('soal');  
      $this->db->join('paket_reguler', 'paket_reguler.kode_soal = soal.kode_soal', 'left');
      $this->db->join('bab_booster', 'bab_booster.kode_soal = soal.kode_soal', 'left');
      $this->db->join('paket_booster', 'paket_booster.id_booster = bab_booster.id_booster', 'left');
      $this->db->order_by('id_soal', 'DESC');  
      $query  = $this->db->get();
      return $query->result();
    }

    public function listing()
    {
      $this->db->select('soal.*');
      $this->db->from('soal');  
      $this->db->order_by('id_soal', 'DESC');  
      $query  = $this->db->get();
      return $query->result();
    }

    public function delete($data)
    {
      $this->db->where('id_soal',$data['id']);
      $this->db->delete('soal');
    }
    
    public function add($data)
    {
        $this->db->insert('soal', $data);
    }

    public function detail($id_soal){
      $query=$this->db->get_where('soal',array('id_soal'=> $id_soal));
      return $query->row();
    }

    public function edit($data,$id_soal){
      $this->db->where('id_soal',$id_soal);
      $this->db->update('soal',$data);
    }


}

/* End of file M_soal.php */
/* Location: ./application/models/M_soal.php */