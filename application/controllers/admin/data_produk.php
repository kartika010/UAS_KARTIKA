<?php
    class Data_produk extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('role_id') != '1') {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Silahkan login terlebih dahulu!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                </div>');
            redirect('auth/login');
        }
    }
    
        public function index() {
        
        $data['barang'] = $this->model_barang->tampil_data()->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/data_produk', $data);
        $this->load->view('templates_admin/footer');     
        }

        public function tambah_aksi() {
            $nama_barang        = $this->input->post('nama_barang');
            $keterangan         = $this->input->post('keterangan');
            $kategori           = $this->input->post('kategori');
            $harga              = $this->input->post('harga');
            $stok               = $this->input->post('stok');
            $gambar             = $_FILES['gambar']['name'];
            $detail             = $this->input->post('detail');
            if ($gambar = ''){}else{
                // Direktori / tempat gambar disimpan setelah diupload.
                $config ['upload_path'] = './upload';
                // Format gambar yang diizinkan untuk diupload.
                $config ['allowed_types'] = 'jpg|jpeg|png|gif|jfif'; 

                $this->load->library('upload', $config);
                // Menampilkan pesan gagal upload 
                if(!$this->upload->do_upload('gambar')) {
                    echo "Gagal mengapload gambar...!";
                }else {
                    $gambar=$this->upload->data('file_name');
                }
            }

            // Ketika gambar berhasil diupload maka data akan dimasukan ke dalam array $data.
            $data = array(
                'nama_barang'       =>$nama_barang,
                'keterangan '       =>$keterangan,
                'kategori'          =>$kategori,
                'harga'             =>$harga,
                'stok'              =>$stok,
                'gambar'            =>$gambar,
                'detail'            =>$detail
            );

            $this->model_barang->tambah_produk($data, 'tb_barang');
            redirect('admin/data_produk/index');
    
        }

        public function edit($id) {
            $where = array('id_barang' =>$id);
            $data['barang'] = $this->model_barang->edit_produk($where, 'tb_barang')->result();
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/edit_produk', $data);
        $this->load->view('templates_admin/footer');    
        }

        public function update() {
            $id                  = $this->input->post('id_barang');
            $nama_barang         = $this->input->post('nama_barang');
            $keterangan          = $this->input->post('keterangan');
            $kategori            = $this->input->post('kategori');
            $harga               = $this->input->post('harga');
            $stok                = $this->input->post('stok');
          
            // Memasukkan ke dalam Array '$data' :
            $data  = array(
                'nama_barang'    => $nama_barang,
                'keterangan'     => $keterangan,
                'kategori'       => $kategori,
                'harga'          => $harga,
                'stok'           => $stok
            );

            $where = array (
                'id_barang'      => $id
            );

            // Memasukkan ke dalam tb_barang melalui model_barang dengan menggunakan function update_data()
            $this->model_barang->update_data($where, $data, 'tb_barang');
            // Jika barang berhasil diedit maka akan diredirek.
            redirect('admin/data_produk/index');
        }

        public function hapus($id) {
            $where = array('id_barang' => $id); 
            $this->model_barang->hapus_data($where, 'tb_barang');
            // Jika barang berhasil diedit maka akan diredirek.
           redirect('admin/data_produk/index');
        }
     }

?>