<?php 
    class Model_invoice extends CI_Model{
        public function index()
        {
            // Membuat waktu default pada website, disini menggnunakan WAKTU INDONESIA BARAT(WIB)
            date_default_timezone_set('Asia/Jakarta');
            // Selanjutnya disini kita akan mengambil data pada formulir pesanan yang telah diisi oleh user, setelah user mengklik tombol pesan,
            // yaitu dengan menggunakan method post.
            $nama                  = $this->input->post('nama');
            $alamat                = $this->input->post('alamat');
            $nohp                  = $this->input->post('nohp');
            $jasa                  = $this->input->post('jasa');
            $rekening_tujuan       = $this->input->post('rekening_tujuan');
           
            // Membuat variabel invoice dan disimpan dalam bentuk array.
            $invoice = array (
                'nama'             => $nama,
                'alamat'           => $alamat,
                'nohp'             => $nohp,           
                'jasa'             => $jasa,
                'rekening_tujuan'  => $rekening_tujuan,
                // Membuat format waktu.
                'tgl_pesan'  => date('Y-m-d H:i:s'),
                // Membuat format waktu dan menentukan batas bayar. Nah pada kasus ini batas untuk melakukan pembayaran adalah 24 Jam / sehari
                // setelah user sudah melakukan pemesanan / mengklik tombol pesan.
                'batas_bayar'=> date('Y-m-d H:i:s', mktime( date('H'), date('i'), date('s'), date('m'), date('d') + 1, date('Y'))), 
            );   

            // Menginput data yang telah diambil ke tabel : tb_invoice
            $this->db->insert('tb_invoice', $invoice);
            $id_invoice = $this->db->insert_id();

            // Data tersebut juga akan diisi ke tabel : tb_pesanan.
            foreach ($this->cart->contents() as $item) {
                $data = array (
                    'id_invoice'   => $id_invoice,
                    'id_barang'    => $item['id'],
                    'nama_barang'  => $item['name'],
                    'jumlah'       => $item['qty'],
                    'harga'        => $item['price'],
                );
                $this->db->insert('tb_pesanan', $data);
            }
            return true;
        }
        // Function tam=pil_data ini berguna untuk menampilkan data yang ada pada tb_invoice.
        public function tampil_data() {
            $result = $this->db->get('tb_invoice');
            if($result->num_rows() > 0) {
                return $result->result();
            }else {
                return false;
            }
        }

        // Method di bawah digunakan untuk mengambil id yang ada pada table tb_inovoive.
        public function ambil_id_invoice($id_invoice) {
            $result = $this->db->where('id', $id_invoice)->limit(1)->get('tb_invoice');
            if($result->num_rows()> 0) {
                return $result->row();
            }else {
                return false;
            }
        }

        public function ambil_id_pesanan($id_invoice)
        {
            $result = $this->db->where('id_invoice', $id_invoice)->get('tb_pesanan');
            if ($result->num_rows() > 0) {
                return $result->result();
            }else{
                return false;
            }
         }   
        }
?>