<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('index');
	}

	public function read($tb){
		$data['table']=$this->mymodel->m_read($tb)->result_array();
		$this->load->view('V_R'.$tb,$data);
	}

	public function create($tb){
		$this->load->view('V_C'.$tb);
	}

	public function do_create($tb){
		$this->mymodel->m_create($tb,$_POST);
		redirect(site_url('welcome/read/'.$tb));
	}

	public function update($tb,$id){
		$data['table']=$this->mymodel->m_getwhere($tb,$id)->result_array()[0];
		$this->load->view('V_U'.$tb,$data);
	}

	public function do_update($tb,$id){
		$this->mymodel->m_update($tb,$_POST,$id);
		redirect(site_url('welcome/read/'.$tb));
	}

	public function delete($tb,$id){
		$this->mymodel->m_delete($tb,$id);
		redirect(site_url('welcome/read/'.$tb));
	}

}