<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$data['marker'] = $this->sigModel->get_data('marker')->result();
        $this->load->view('index',$data);
		$this->load->view('templates/footer');
	}
}
