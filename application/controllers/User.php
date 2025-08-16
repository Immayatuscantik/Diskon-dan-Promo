<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class User extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
    }

    // Halaman Kategori
    public function index()
    {
        $kategori = $this->User_model->get_all_user();

        // tambahkan thumbnail dari flyer ke setiap kategori
        foreach ($kategori as &$k) {
            $k->thumbnail = $this->User_model->get_thumbnail_by_kategori($k->id_kategori);
        }

        $data['kategori'] = $kategori;
        $this->load->view('user/kategori', $data);
    }

    // Daftar flyer dalam kategori
    public function promo($id_kategori)
    {
        $data['kategori'] = $this->User_model->get_by_id($id_kategori);
        $data['flyer'] = $this->User_model->get_flyer_by_kategori($id_kategori);
        $this->load->view('user/promo', $data);
    }

    // Detail flyer
    public function flyer($id_flyer)
    {
        // Ambil data flyer dulu
        $flyer = $this->User_model->get_flyer_by_id($id_flyer);

        $data['flyer'] = $flyer;
        $data['id_kategori'] = $flyer->id_kategori;

        // Kirim ke view
        $this->load->view('user/flyer', $data);
    }
}
