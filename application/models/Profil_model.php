<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Profil_model extends CI_Model
{

    public function getProfil()
    {
        return $this->db->get('tb_profil_ptsl')->row();
    }

    public function edit()
    {
        $id = $this->input->post('id_profil_ptsl', true);
        $config['upload_path']          = './assets/img/foto_user/';
        $config['allowed_types']        = 'jpeg|jpg|png';

        $this->load->library('upload', $config);

        if (!empty($_FILES['foto_ptsl']['tmp_name'])) {

            if (!$this->upload->do_upload('foto_ptsl')) {
                echo $this->upload->display_errors();
            } else {
                $old_image = $this->db->get_where('tb_profil_ptsl', ['id' => $id])->row();
                $old_image = $old_image->foto;

                if ($old_image != 'default.jpg') {
                    unlink(FCPATH . 'assets/img/foto_user/' . $old_image);
                }
                $data = [
                    'foto' => $this->upload->data('file_name'),
                    'nama' => $this->input->post('nama_ptsl', true)
                ];
            }
        } else {
            $data = [
                'nama' => $this->input->post('nama_ptsl', true)
            ];
        }


        return $this->db->where('id', $id)->update('tb_profil_ptsl', $data);
    }
}
