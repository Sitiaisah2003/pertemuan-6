<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datasiswa extends CI_Controller {

	public function index()
	{
		$this->load->view('view-form-siswa');
	}
	public function save()
	{
		$data['nama'] = $this->input->post('nama');
		$data['nis'] = $this->input->post('nis');
		$data['tgl_lahir'] = $this->input->post('tgl_lahir');
		$data['tmp_lahir'] = $this->input->post('tmp_lahir');
		$data['alamat'] = $this->input->post('alamat');
		$data['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$data['agama'] = $this->input->post('agama');	
		$this->load->view('view-data-siswa',$data);
	}
}
