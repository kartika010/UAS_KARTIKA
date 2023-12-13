<?php 
    class Model_Kategori extends CI_Model {
        // get_where digunakan data yang lebih spesifik dari suatu table, misal hanya menampilkan data yang kategori allinwomenstore
        public function data_bajuRok(){
             return $this->db->get_where("tb_barang", array('kategori' => 'bajuRok'));
        }

        public function data_sepatuSendal(){
             return $this->db->get_where("tb_barang", array('kategori' => 'sepatuSendal'));
        }

        public function data_tasAksesoris(){
             return $this->db->get_where("tb_barang", array('kategori' => 'tasAksesoris'));
        }

        public function data_topiHijab(){
             return $this->db->get_where("tb_barang", array('kategori' => 'topiHijab'));
        }
    }
?>