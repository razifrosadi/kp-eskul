<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profil_model', 'profil');
        $this->load->model('Menu_model', 'menu');
        $this->load->model('Admin_model', 'admin');
    }
    public function index()
    {
        $data['title'] = 'my Profil';
        $data['profil'] = $this->profil->getProfilData();
        $this->form_validation->set_rules('judul_informasi', 'Judul_informasi', 'trim|required');
                $this->form_validation->set_rules('isi_informasi', 'Judul_informasi', 'trim|required');

                if ($this->form_validation->run() == false) {
                    $this->load->view('Beranda/index', $data);
        $this->load->view('templates/br_topbar', $data);
        $this->load->view('templates/br_header', $data);
        $this->load->view('templates/br_footer', $data);
    } else {
        $judul_informasi = $this->input->post('judul_informasi');
        $isi_informasi = $this->input->post('isi_informasi');

        // cek jika gambar diubah
        $upload_img = $_FILES['image']['judul_informasi'];

        if ($upload_img) {
            $config['upload_path'] = './assets/img/basca.jpg/';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']     = '2048';

            $this->load->library('upload', $config);
            if ($this->upload->do_upload('image')) {
                $old_img = $data['profil']['image'];
                if ($old_img != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/basca.jpg/' . $old_img);
                }
                $new_img = $this->upload->data('file_name');
                $this->db->set('image', $new_img);
            } else {
                echo $this->upload->display_errors();
            }
        }

        $this->db->set([
            'judul_informasi' => $judul_informasi,
            'isi_informasi' => $isi_informasi
        ]);
        // $this->db->where('email', $email);
        $this->db->update('profil');

        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Your profile has been updated!</div>');
        redirect('profil');
    }
    }
}