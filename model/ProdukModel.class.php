<?php
class ProdukModel extends Model
{
    public function getAll()
    {
        $sql = "SELECT * from produk order by id desc";
        return $this->mysqli->query($sql);
    }
    public function insert($nama, $deskripsi, $lokasi, $kategori, $gambar)
    {
        $sql = "INSERT INTO produk (nama, deskripsi, lokasi, kategori, gambar) VALUES ('$nama', '$deskripsi', '$lokasi', '$kategori', '$gambar')";
        $this->mysqli->query($sql);
    }

    public function getById($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM produk WHERE id = $id";
        return $this->mysqli->query($sql);
    }

    public function update($id, $nama, $deskripsi, $lokasi, $kategori, $gambar)
     {
          $sql = "UPDATE produk SET nama = '$nama', deskripsi = '$deskripsi', lokasi = '$lokasi', kategori = '$kategori', gambar='$gambar' WHERE id = '$id'";
          $this->mysqli->query($sql);
     }
}
