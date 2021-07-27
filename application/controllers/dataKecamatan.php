<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKecamatan extends CI_Controller {

	public function tambahData()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('formTambahKecamatan');
		$this->load->view('templates/footer');
	}

	public function tambahDataAksi()
	{
		if ($this->form_validation->run() == FALSE) {
			$this->tambahData();
			$nama			 = $this->input->post('nama');
			$alamat	 		 = $this->input->post('alamat');
			$latitude		 = $this->input->post('latitude');
			$longitude	 	 	 = $this->input->post('longitude');
		}else{
				}
			
			$data = array(
				'nama'						=> $nama,
				'alamat'					=> $alamat,
				'latitude'					=> $latitude,
				'longitude'					=> $longitude,
			);

			$this->sigModel->insert_data($data,'marker');
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Di Tambahkan</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('auth');
	}

	public function updateData($id)
	{
		$where = array('id' => $id);
		$data['marker'] = $this->db->query("SELECT * FROM marker WHERE id='$id'")->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('formUpdate',$data);
		$this->load->view('templates/footer');
	}


	public function updateDataAksi()
	{
		if ($this->form_validation->run() == FALSE) {
			$this->updateData($id);
			$id			     = $this->input->post('id');
			$nama			 = $this->input->post('nama');
			$alamat	 		 = $this->input->post('alamat');
			$latitude		 = $this->input->post('latitude');
			$longitude		 = $this->input->post('longitude');
		}else{
		}
			$data = array(
				'nama'				=> $nama,
				'alamat'			=> $alamat,
				'latitude'			=> $latitude,
				'longitude'			=> $longitude,
			);

			$where = array(
				'id'  => $id,
			);
			$this->sigModel->update_data('marker',$data,$where);
			$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Di Update</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('auth');
	}

	public function deleteData($id)
	{
		$where = array('id' => $id);
		$this->sigModel->delete_data($where, 'marker');
		$this->session->set_flashdata('pesan','<div class="alert alert-success alert-dismissible fade show" role="alert">
			<strong>Data Berhasil Di Hapus</strong>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
			</button>
			</div>');
			redirect('auth');
	}

}
