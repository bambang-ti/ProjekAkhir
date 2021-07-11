<?php
class Keahlian_model extends CI_Model {
    // Mengambil seluruh data prodi
    public function getAll(){
        $query = $this->db->get('keahlian');
        return $query;
    }

    public function findById($id){
        $query = $this->db->get_where('keahlian',['id'=>$id]);
        return $query->row();
    }

    public function simpan($nama,$data){
        $sql = "INSERT INTO keahlian (nama) VALUES (?)";
        $this->db->query($sql, $data);
    }

    public function update($nama,$data){
        $sql = "UPDATE keahlian SET nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($nama,$data){
        $sql = "DELETE FROM keahlian WHERE id=?";
        $this->db->query($sql, $data);
    }
}