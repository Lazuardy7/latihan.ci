<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mymodel extends CI_Model {

	public function m_read($tb){
		$res=$this->db->get('tb_'.$tb);
		return $res;
	}

	public function m_create($tb,$data){
		$res=$this->db->insert('tb_'.$tb,$data);
		return $res;
	}

	public function m_update($tb,$data,$id){
		$where = array("id_$tb" => $id);
		$res=$this->db->update('tb_'.$tb,$data,$where);
		return $res;
	}

	public function m_delete($tb,$id){
		$where = array("id_$tb" => $id);
		$res=$this->db->delete('tb_'.$tb,$where);
		return $res;
	}

	public function m_getwhere($tb,$id){
		$where=array("id_$tb"=>$id);
		$res=$this->db->get_where('tb_'.$tb,$where);
		return $res;
	}
}