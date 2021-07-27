<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peta extends CI_Controller {


    public function __construct(){
        parent::__construct();
        $this->load->model('sigModel');
    }

	public function index()
	{
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('peta');
        $this->load->view('templates/footer');

	}
    public function marker()
    {
        $this->load->view('templates/header');
		$this->load->view('templates/sidebar');
        $data['marker'] = $this->sigModel->get_all_data();
		$this->load->view('marker',$data);
        $this->load->view('templates/footer');
    }
}
