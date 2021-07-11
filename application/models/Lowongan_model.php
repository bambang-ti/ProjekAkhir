<?php
class Lowongan_model extends CI_model{

    public function getAll(){
        // select * from lowongan
        $query = $this->db->get('lowongan');
        return $query;
    }

    public function findById($id){
        // select * from lowongan where id=$id
        $query = $this->db->get_where('lowongan',['id'=>$id]);
        return $query->row();
    }

    public function update($data){
        $sql = "UPDATE lowongan SET deskripsi_pekerjaan=?, tanggal_akhir=?, email=?,deskripsi=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function simpan($data){
        $sql = "INSERT INTO lowongan (deskripsi_pekerjaan,tanggal_akhir,mitra_id,email,deskripsi) VALUES (?,?,?,?,?)";
        $this->db->query($sql, $data);
    }

    public function delete($data){
        $sql = "DELETE FROM lowongan WHERE id=?";
        $this->db->query($sql, $data);
    }
}





