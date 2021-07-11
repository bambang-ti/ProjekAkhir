<?php
class Prodi_model extends CI_Model {
    // Mengambil seluruh data prodi
    public function getAll(){
        $query = $this->db->get('prodi');
        return $query;
    }

    public function findById($id){
        $query = $this->db->get_where('prodi',['id'=>$id]);
        return $query->row();
    }

    public function simpan($nama,$data){
        $sql = "INSERT INTO prodi (kode,nama) VALUES (?,?)";
        $this->db->query($sql, $data);
    }

    public function update($nama,$data){
        $sql = "UPDATE prodi SET kode=?, nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($nama,$data){
        $sql = "DELETE FROM prodi WHERE id=?";
        $this->db->query($sql, $data);
    }
}