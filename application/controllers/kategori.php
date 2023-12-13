<?php 
    class Kategori extends CI_Controller{
        public function bajuRok(){
            $data['bajuRok']   = $this->model_kategori->data_bajuRok()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('bajuRok', $data);
            $this->load->view('templates/footer');
        }

        public function sepatuSendal(){
            $data['sepatuSendal']   = $this->model_kategori->data_sepatuSendal()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('sepatuSendal', $data);
            $this->load->view('templates/footer');
        }

        public function tasAksesoris(){
            $data['tasAksesoris']   = $this->model_kategori->data_tasAksesoris()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('tasAksesoris', $data);
            $this->load->view('templates/footer');
        }

        public function topiHijab(){
            $data['topiHijab']   = $this->model_kategori->data_topiHijab()->result();
            $this->load->view('templates/header');
            $this->load->view('templates/sidebar');
            $this->load->view('topiHijab', $data);
            $this->load->view('templates/footer');
        }

        
    }
?>