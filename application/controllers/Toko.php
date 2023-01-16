<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Toko extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('Toko_model');
        // $this->load->library('form_validation');
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

        $data['kategori'] = ['Produk', 'Pelayanan', 'Lain Lain'];
        $data['judul'] = 'Kontak Kami';
        
        
        $this->form_validation->set_rules('namapengirim', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('emailpengirim', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('kategoripesan', 'Kategori', 'required');
        $this->form_validation->set_rules('Subjekpesan', 'Subjek', 'required');
        $this->form_validation->set_rules('Isipesan', 'Isi pesan', 'required');

        if ($this->form_validation->run() == FALSE) {

        	$this->load->view('templates/header', $data);
        	$this->load->view('home/kontak', $data);
        	$this->load->view('templates/footer');

        } else {

            $this->Toko_model->inputKontak(); 
            $this->load->view('home/kontak');
            var_dump($_POST);
            redirect('toko');
            
            
        }
        

    }

    public function registrasi()
    {

        $data['provinsi']=['Jawa Barat', 'Banten', 'DKI Jakarta', 'Jawa Tengah', 'Jawa Timur', 'Lampung', 'Sumatera Barat', 'Sumatera Selatan', 'Sumatera Utara'];
        $data['jenis_kelamin'] = ['LK', 'PR'];
        $data['judul'] = 'Registrasi';

        $this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        // $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
        $this->form_validation->set_rules('provinsi', 'Provinsi', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('kode_pos', 'Kode Pos', 'required');
        $this->form_validation->set_rules('no_hp', 'Nomor HP', 'required');

        if ($this->form_validation->run() == FALSE) {

        	$this->load->view('templates/header', $data);
        	$this->load->view('home/registrasi', $data);
        	$this->load->view('templates/footer');

        } else {

            $this->Toko_model->inputRegistrasi(); 
            // $this->load->view('home/kontak');
            // var_dump($_POST);
            redirect('toko');
            
            
        }
    }
}
