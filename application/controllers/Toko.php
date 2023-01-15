<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_model');
        $this->load->library('form_validation');
    }
	public function index()
	{
        $data['judul'] = 'Halaman Produk';
        $data['toko'] = $this->Toko_model->showDataAll();
        $this->load->view('templates/header', $data);
		$this->load->view('home/produk');
        $this->load->view('templates/footer');
	}

    public function kontak()
    {
        $data['judul'] = 'Kontak Kami';
        $this->load->view('templates/header', $data);
		$this->load->view('home/kontak');
        $this->load->view('templates/footer');
    }

    public function registrasi()
    {
        
        $data['judul'] = 'Registrasi';
        $this->load->view('templates/header', $data);
		$this->load->view('home/registrasi');
        $this->load->view('templates/footer');
    }
}
