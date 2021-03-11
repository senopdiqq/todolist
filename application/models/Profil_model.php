<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{

    public function getProfil()
    {
        return $this->db->get('tb_profil_ptsl')->row();
    }

    public function edit($data, $id)
    {
        return $this->db->where('id', $id)->update('tb_profil_ptsl', $data);
    }
}
