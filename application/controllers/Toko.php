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

        $data['kategori'] = ['Produk', 'Pelayanan', 'Lain - Lain'];
        $data['judul'] = 'Kontak Kami';
        $data['data_mahasiswa'] = array();

        $this->form_validation->set_rules('nama_pengirim', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('subjek', 'Subjek', 'required');
        $this->form_validation->set_rules('isi_pesan', 'Isi pesan', 'required');

        if ($this->form_validation->run() == FALSE) {

        	$this->load->view('templates/header', $data);
        	$this->load->view('home/kontak', $data);
        	$this->load->view('templates/footer');

        } else {

            $this->Mahasiswa_model->inputKontak();
            // // var_dump($datakontak);
            $this->session->set_flashdata('flash', 'Ditambahkan');
            redirect('home/produk');
            
        }

       
        // $this->load->view('templates/header', $data);
		// $this->load->view('home/kontak');
        // $this->load->view('templates/footer');

        

    }

    public function registrasi()
    {

        $data['provinsi']=['Jawa Barat', 'Banten', 'DKI Jakarta', 'Jawa Tengah', 'Jawa Timur', 'Lampung', 'Sumatera Barat', 'Sumatera Selatan', 'Sumatera Utara'];
        $data['jenis_kelamin'] = ['LK', 'PR'];
        $data['judul'] = 'Registrasi';
        $this->load->view('templates/header', $data);
		$this->load->view('home/registrasi');
        // $this->load->view('templates/footer');
    }
}
