<?php
defined('BASEPATH') OR exit('No direct script access allowed');
#[\AllowDynamicProperties]

class User_model extends CI_Model {

    private $table = 'kategori';

    // Ambil semua kategori
    public function get_all_user()
    {
        return $this->db->get($this->table)->result();
    }

    // Ambil kategori berdasarkan id
    public function get_by_id($id)
    {
        return $this->db->get_where($this->table, ['id_kategori' => $id])->row();
    }

    // Ambil semua flyer berdasarkan kategori
    public function get_flyer_by_kategori($id_kategori)
    {
        $this->db->select('flyer.*, kategori.nama_kategori');
        $this->db->from('flyer');
        $this->db->join('kategori', 'kategori.id_kategori = flyer.id_kategori');
        $this->db->where('flyer.id_kategori', $id_kategori);
        $this->db->where('flyer.status', 'aktif'); // hanya ambil yang aktif
        return $this->db->get()->result();
    }

    // Ambil detail flyer
    public function get_flyer_by_id($id_flyer)
    {
        return $this->db->get_where('flyer', ['id_flyer' => $id_flyer])->row();
    }

    // Ambil 1 gambar flyer sebagai thumbnail kategori
    public function get_thumbnail_by_kategori($id_kategori)
    {
        $this->db->select('gambar');
        $this->db->from('flyer');
        $this->db->where('id_kategori', $id_kategori);
        $this->db->where('status', 'aktif'); // hanya ambil yang aktif
        $this->db->order_by('id_flyer', 'ASC');
        $this->db->limit(1);
        $result = $this->db->get()->row();
        return $result ? $result->gambar : 'default.jpg';
    }
}
