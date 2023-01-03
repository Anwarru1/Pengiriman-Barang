<?php
defined('BASEPATH') or exit('No direct script access allowed');
class ModelSupir extends CI_Model
{
    //manajemen Supir
    public function getSupir()
    {
        return $this->db->get('supir');
    }
    public function SupirWhere($where)
    {
        return $this->db->get_where('supir', $where);
    }
    public function simpanSupir($data = null)
    {
        $this->db->insert('supir', $data);
    }
    public function updateSupir($data = null, $where = null)
    {
        $this->db->update('supir', $data, $where);
    }
    public function hapusSupir($where = null)
    {
        $this->db->delete('supir', $where);
    }
}
