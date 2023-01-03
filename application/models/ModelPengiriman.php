<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelPengiriman extends CI_Model
{
    //manajemen pengiriman
    public function getPengiriman()
    {
        return $this->db->get('pengiriman');
    }
    public function pengirimanWhere($where)
    {
        return $this->db->get_where('pengiriman', $where);
    }
    public function simpanPengiriman($data = null)
    {
        $this->db->insert('pengiriman', $data);
    }
    public function updatePengiriman($data = null, $where = null)
    {
        $this->db->update('pengiriman', $data, $where);
    }
    public function hapusPengiriman($where = null)
    {
        $this->db->delete('pengiriman', $where);
    }
    public function total($field, $where)
    {
        $this->db->select_sum($field);
        if (!empty($where) && count($where) > 0) {
            $this->db->where($where);
        }
        $this->db->from('pengiriman');
        return $this->db->get()->row($field);
    }

    //manajemen pelanggan
    public function getPelanggan()
    {
        return $this->db->get('pelanggan');
    }
    public function pelangganWhere($where)
    {
        return $this->db->get_where('pelanggan', $where);
    }
    public function simpanPelanggan($data = null)
    {
        $this->db->insert('pelanggan', $data);
    }
    public function hapusPelanggan($where = null)
    {
        $this->db->delete('pelanggan', $where);
    }
    public function updatePelanggan($where = null, $data = null)
    {
        $this->db->update('pelanggan', $data, $where);
    }
    //join
    public function joinPelangganPengiriman($where)
    {
        $this->db->select('pengiriman.pengirim,pelanggan.no_ktp');
        $this->db->from('pengiriman');
        $this->db->join('pelanggan', 'pelanggan.no_ktp = 
pengiriman.pengirim');
        $this->db->where($where);
        return $this->db->get();
    }
}
