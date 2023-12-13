<?php
class model_produk extends CI_Model
{
    public function get_all()
    {
        return $this->db->get('tb_barang')->result();
    }
    public function get_product_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('tb_barang');
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('kategori', $keyword);
        return $this->db->get()->result();
    }
}
