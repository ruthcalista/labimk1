<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class crud extends CI_Controller {
	function __construct() {
		parent::__construct();
		$this->load->model('m_data');
		$this->load->helper('url');
	}

	public function index() {
		$data['mahasiswa'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil', $data);
	}

	public function input() {
		$this->load->view('input');
	}

	public function simpan() {
		$data = array('nama'=>$this->input->post('nama'), 'nim'=>$this->input->post('nim'), 'alamat'=>$this->input->post('alamat'),
		'gender' => $this->input->post('gender'));
		$proses = $this->m_data->simpan($data);

		if (!$proses) {
			header('Location: crud');
		}

		else {
			echo "Data Gagal Disimpan";
			echo "<br>";
			echo "<a href='".base_url('index.php/crud/input/')."'>Kembali ke form</a>";
		};
	}

	function edit($id) {
		$where = array('nim'=>$id);
		$data['mahasiswa'] = $this->m_data->edit_data($where,'mahasiswa')->result();
		$this->load->view('update',$data);
	}

	function update() {
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$gender = $this->input->post('gender');

		$data = array('nim'=>$nim, 'nama'=>$nama, 'gender'=> $gender,
			'alamat'=> $alamat);
		$where = array('nim'=>$nim);

		$this->m_data->update_data($where,$data,'mahasiswa');
		redirect('crud');
	}
	public function delete($nim) {
		$where = array('nim'=>$nim);
		$this->m_data->delete_data($where,'mahasiswa');
		redirect('crud');
	}
}
