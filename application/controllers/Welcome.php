<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{

	function __construct(){
		parent::__construct();
		$this->load->model('model_buku');
		$this->load->library('user_agent');

	}

	public function index()
	{
		$data['title']  = 'User | Dashboard';
		//Model buku tampil data
		$data['buku'] = $this->model_buku->tampil_data();
		$data['content'] = 'frontend_content/home';



		if ($this->agent->is_mobile()) {
            // Pengguna menggunakan perangkat mobile
            $this->load->view('debug/mobile');
        } else {
            // Pengguna menggunakan perangkat desktop
            $this->load->view('templates/header', $data);
		$this->load->view('templates/topBar', $data);
		$this->load->view('templates/footer');
        }


		//Template desktop
		// $this->load->view('templates/header', $data);
		// $this->load->view('templates/topBar', $data);
		// $this->load->view('templates/footer');
	}

	// public function mobile(){
	// 	$this->load->view('debug/mobile');
	// }
}
