<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{
    public function getProfilData()
    {
        $query = $this->db->get_where('profil');
        return $query->row_array();
    }
    public function getProfilDataById($id)
    {
        $queryProfil = "SELECT * FROM profil  WHERE id = $id AND is_active = 1";
        return $this->db->query($queryProfil)->result_array();
    }
    public function getProfilDataAll()
    {
        return $this->db->get_where('profil', ['id !=' => 1])->result_array();
    }
}
