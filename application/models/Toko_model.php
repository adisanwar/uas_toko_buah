<?php
class Toko_model extends CI_Model
{
    private $__produk = 'data_buah';
    private $__regis = 'registrasi';
    private $__kontak = 'kontak_kami';

    public function showDataAll()
    {
        return $this->db->get($this->__produk)->result_array();
    }


    public function inputRegistrasi()
    {

        $data = $this->input->post();
        $namalengkap = $data['nama_lengkap'];
        $email = $data['email'];
        $provinsi = $data['provinsi'];
        $jenis_kelamin = $data['jenis_kelamin'];
        $alamat = $data['alamat'];
        $kodepos = $data['kode_pos'];
        $nohp = $data['no_hp'];
        

        $dataRegistrasi = array(
            'Nmlengkap' => $namalengkap,
            'Email' => $email,
            'Provinsi' => $provinsi,
            'Alamat' => $alamat,
            'Jnskelamin' => $jenis_kelamin,
            'Kodepos' => $kodepos,
            'Nohp' => $nohp,
            
        );

        $this->db->insert($this->__regis, $dataRegistrasi);

    }

    public function inputKontak()
    {
        // $data = [
        //     "nama_pengirim" => $this->input->post('namapengirim')
        // ];

        $data = $this->input->post();
        $tanggalkirim = $data['Tanggalkirim'];
        $namapengirim = $data['namapengirim'];
        $email = $data['emailpengirim'];
        $subjek = $data['Subjekpesan'];
        $isipesan = $data['Isipesan'];
        $kategori = $data['kategoripesan'];
       

        $datakontak = array(
            'Tanggalkirim' => $tanggalkirim,
            'namapengirim' => $namapengirim,
            'emailpengirim' => $email,
            'Subjekpesan' => $subjek,
            'Isipesan' => $isipesan,
            'kategoripesan' => $kategori, 
            
        );
        // var_dump($data);
        $this->db->insert($this->__kontak, $datakontak);

    }

}

?>