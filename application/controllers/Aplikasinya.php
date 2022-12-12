<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Aplikasinya extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');
        $this->load->view('templates/topbar');
        $this->load->view('templates/sidebar');
        $this->load->view('tulis_catatan');
        $this->load->view('templates/footer');
    }

    public function tambah_catatan()
    {
        $tanggal         = $this->input->post('tanggal');
        $jam      = $this->input->post('jam');
        $lokasi    = $this->input->post('lokasi');
        $suhu    = $this->input->post('suhu');

        $data = array(
            'tanggal'    => $tanggal,
            'jam'   => $jam,
            'lokasi' => $lokasi,
            'suhu'  => $suhu,
        );
        $this->m_catatan->get_catatan($data, 'catatan');
        $this->session->set_flashdata('message',
         '<div class="alert aleret-info alert-dismissible" role="alert">
         <button type="button" class="close"
            data-dismiss="alert" alert-label="Close"><span aria-hidden="true">&times;</span></button>
            Data Berhasil ditambahkan!
            </div>');
        redirect('dashboard');
    }
}
