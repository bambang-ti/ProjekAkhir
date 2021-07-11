<?php
class All_model extends CI_Model
{

    public function getAll($nama)
    {
        $query = $this->db->get($nama);
        return $query;
    }
    // Mengambil seluruh data table berdasarkan id
    public function findById($nama, $id)
    {
        $query = $this->db->get_where($nama, ['id' => $id]);
        return $query->row();
    }

    public function simpan($nama, $data)
    {
        $sql = "INSERT INTO " . $nama . " (nama) VALUES (?)";
        $this->db->query($sql, $data);
    }

    public function update($nama, $data)
    {
        $sql = "UPDATE " . $nama . " SET nama=? WHERE id=?";
        $this->db->query($sql, $data);
    }

    public function delete($nama, $data)
    {
        $sql = "DELETE FROM " . $nama . " WHERE id=?";
        if ($this->db->error()) {
            echo "<script>alert('Data ini tidak dapat dihapus karena telah terhubung dengan data di tabel lain')</script>";
            if ($nama == 'bidang_usaha') {
                redirect('bidang_usaha', 'refresh');
            } elseif ($nama == 'sektor_usaha') {
                redirect('sektor_usaha', 'refresh');
            } else {
                redirect('keahlian', 'refresh');
            }
        } else {
            $this->db->query($sql, $data);
        }
    }
    public function join()
    {
        $this->db->select('lowongan_keahlian.*,lowongan.deskripsi_pekerjaan as lowongan, keahlian.nama as keahlian');
        $this->db->from('lowongan_keahlian');
        $this->db->join('lowongan', 'lowongan.id = lowongan_keahlian.lowongan_id', 'left');
        $this->db->join('keahlian', 'keahlian.id = lowongan_keahlian.keahlian_id', 'left');
        $query = $this->db->get();
        return $query;
    }
}
