<?php

defined('BASEPATH') or exit('No direct script access allowed');

class hak_akses_model extends CI_Model
{

    public function getAllRole()
    {
        return $this->db->get('tb_role')->result();
    }

    public function storeRole()
    {
        $data = [
            'nama_role' => $this->input->post('nama_role')
        ];
        return $this->db->insert('tb_role', $data);
    }

    public function updateRole()
    {
        $data = [
            'nama_role' => $this->input->post('nama_role')
        ];
        return $this->db->where('idRole', $this->input->post('id_role'))->update('tb_role', $data);
    }

    public function deleteRole($id)
    {
        $cek = $this->db->get_where('tb_user', ['idRole' => $id])->num_rows();
        if($cek == 0){
            $this->db->where('idRole', $id)->delete('tb_role');
            return true;
        }else{
            return false;
        }
        
    }
}
