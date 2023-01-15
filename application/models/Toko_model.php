<?php
class Toko_model extends CI_Model
{
    private $__produk = 'data_buah';

    public function showDataAll(Type $var = null)
    {
        return $this->db->get($this->__produk)->result_array();
    }
    
}

?>