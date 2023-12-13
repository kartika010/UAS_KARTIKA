<?php
defined('BASEPATH') or exit('No direct script access allowed');

class SearchController extends CI_Controller
{

    public function search()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('nama_barang', $keyword);
        $this->db->or_like('keterangan', $keyword);
        $this->db->or_like('harga', $keyword);
        $this->db->or_like('kategori', $keyword);
        $query['barang'] = $this->db->get('tb_barang')->result();
        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('searching', $query);
        $this->load->view('templates/footer');

    }
}

