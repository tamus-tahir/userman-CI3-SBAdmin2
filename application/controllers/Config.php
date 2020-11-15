<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Config extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Default_m');
        security();
    }

    public function index()
    {
        $this->form_validation->set_rules('copyright', 'copyright', 'required|trim');
        $this->form_validation->set_rules('login_title', 'login title', 'required|trim');
        $this->form_validation->set_rules('brand', 'brand', 'required|trim');
        $this->form_validation->set_rules('keywords', 'keywords', 'required|trim');
        $this->form_validation->set_rules('description', 'description', 'required|trim');
        $this->form_validation->set_rules('author', 'author', 'required|trim');
        $this->form_validation->set_rules('sidebar', 'sidebar', 'required|trim');
        $this->form_validation->set_error_delimiters('<div class="invalid-feedback text-capitalize">', '</div>');

        if ($this->form_validation->run() === FALSE) {

            $data['title'] = 'Configuration';
            $where = ['id_config' => 1];
            $data['ubah'] = $this->Default_m->getWhere('tabel_config', $where)->row();

            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('templates/topbar', $data);
            $this->load->view('config/index', $data);
            $this->load->view('templates/foot');
        } else {
            $path = './assets/img/';
            $type = 'jpg|jpeg|png';
            $size = 520;
            $name1 = 'logo';
            $name2 = 'background';
            $logoold = $this->input->post('logoold');
            $backgroundold = $this->input->post('backgroundold');

            $data = [
                'copyright' => $this->input->post('copyright'),
                'login_title' => $this->input->post('login_title'),
                'brand' => $this->input->post('brand'),
                'keywords' => $this->input->post('keywords'),
                'description' => $this->input->post('description'),
                'author' => $this->input->post('author'),
                'sidebar' => $this->input->post('sidebar'),
                'logo' => !empty($_FILES[$name1]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name1) : $logoold,
                'background' => !empty($_FILES[$name2]["name"]) ?  $this->Default_m->upload($path, $type, $size, $name2) : $backgroundold
            ];
            $where = ['id_config' => 1];
            $this->Default_m->update('tabel_config', $where, $data);
            if (!empty($_FILES[$name1]["name"])) {
                unlink($path . $logoold);
            }
            $this->Default_m->update('tabel_config', $where, $data);
            if (!empty($_FILES[$name2]["name"])) {
                unlink($path . $backgroundold);
            }
            $this->session->set_flashdata('flash', 'Data Berhasil Diubah');
            redirect('config');
        }
    }
}
