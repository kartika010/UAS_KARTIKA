<?php 
    class Auth extends CI_Controller
    {
        public function login()
        {
            $this->form_validation->set_rules('username','Username','required', [ 
                'required' => 'Username wajib diisi!'
            ]);
            $this->form_validation->set_rules('password','Password','required', [
                'required' => 'Password tidak boleh kosong!'
            ]);
            // Jika Form validasinya salah, maka akan dialihkan ke halaman login
            if ($this->form_validation->run() == FALSE)
            {
                $this->load->view('templates/header');
                $this->load->view('form_login');
                $this->load->view('templates/footer');
                // Jika validationnya berhasil berjalan dengan baik, maka proses selanjutnya melakukan pengecekan dengan 
                // menggunakan model 'auth'
            }else {
                $auth = $this->model_auth->proses_login();

                // Jika proses login gagal maka: 
                if($auth == FALSE)
                {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Username atau Password Anda Salah!
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                </div>');
                redirect('auth/login');
                }else {
                    $this->session->set_userdata('username', $auth->username);
                    $this->session->set_userdata('role_id', $auth->role_id);

                    // Membuat switch untuk memisahkan antara login admin dan login user dengan menggunakan role_id
                    switch ($auth->role_id) {
                        // untuk kondisi pertama / 1 itu digunakan untuk login admin
                        case 1 : redirect('admin/data_produk');
                                  break;

                        // dan untuk kondisi 2 digunakan untuk login user
                        case 2 : redirect('');
                                  break;
                        
                        default:
                            break;
                    }
                }
            }
        }

        // Function untuk logout
        public function logout()
        {
            $this->session->sess_destroy();
            redirect('auth/login');
        }
    }
    
?>