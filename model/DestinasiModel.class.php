<?php
class DestinasiModel extends Model
{
    public function getAll()
    {
         $sql = 'SELECT * FROM destinasi ORDER BY id DESC';
         return $this->mysqli->query($sql);
        //  $sql = "SELECT post.*, users.username FROM post JOIN users ON post.user_id = users.id";
        //  return $this->mysqli->query($sql);
    }
    public function insert($nama, $deskripsi, $lokasi, $kategori, $gambar)
    {
        $sql = "INSERT INTO destinasi (nama, deskripsi, lokasi, kategori, gambar) VALUES ('$nama', '$deskripsi', '$lokasi', '$kategori', '$gambar')";
        $result = $this->mysqli->query($sql);
        if ($result) {
             echo 'Data inserted successfully'; // Debugging
        } else {
             echo 'Database insert error: ' . $this->mysqli->error; // Debugging
        }
    }

    public function getById($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM destinasi WHERE id = $id";
        return $this->mysqli->query($sql);
    }
}
