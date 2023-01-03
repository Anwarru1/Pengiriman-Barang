<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelKendaraan extends CI_Model
{
    //manajemen Kendaraan
    public function getKendaraan()
    {
        return $this->db->get('kendaraan');
    }
    public function kendaraanWhere($where)
    {
        return $this->db->get_where('kendaraan', $where);
    }
    public function simpanKendaraan($data = null)
    {
        $this->db->insert('kendaraan', $data);
    }
    public function updateKendaraan($data = null, $where = null)
    {
        $this->db->update('kendaraan', $data, $where);
    }
    public function hapusKendaraan($where = null)
    {
        $this->db->delete('kendaraan', $where);
    }
    public function joinKendaraanPengiriman($where)
    {
        $this->db->select('Pengiriman.kendaraan,kendaraan.no_polisi');
        $this->db->from('kendaraan');
        $this->db->join('pengiriman', 'kendaraan.no_polisi = 
pengiriman.kendaraan');
        $this->db->where($where);
        return $this->db->get();
    }
}
