<?php
class DestinasiModel extends Model
{
    public function insert($nama, $deskripsi, $lokasi, $kategori, $gambar)
    {
        $sql = "INSERT INTO destinasi (nama, deskripsi, lokasi, kategori, gambar) VALUES ('$nama', '$deskripsi', '$lokasi', '$kategori', '$gambar')";
        $this->mysqli->query($sql);
    }

    public function getById($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM destinasi WHERE id = $id";
        return $this->mysqli->query($sql);
    }
}
