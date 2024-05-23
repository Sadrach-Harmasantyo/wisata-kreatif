<?php
class Destinasi extends Controller
{
    public function create_form()
    {
        $this->loadView('insert_destinasi');
    }

    public function create_process()
    {
        $destinasiModel = $this->loadModel('DestinasiModel');
        $nama = addslashes($_POST['nama']);
        $deskripsi = addslashes($_POST['deskripsi']);
        $lokasi = addslashes($_POST['lokasi']);
        $kategori = addslashes($_POST['kategori']);
        $foto = addslashes($_POST['gambar']); // Assume the foto is uploaded as a string path

        $destinasiModel->insert($nama, $deskripsi, $lokasi, $kategori, $foto);

        $last_id = $this->mysqli->insert_id; // Get the ID of the newly inserted record
        header("Location: ?c=Destinasi&m=confirm&id=$last_id");
        exit;
    }

    public function confirm()
    {
        // Check if 'id' is set and is a valid integer
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            die('Invalid ID');
        }

        $id = intval($_GET['id']);
        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getById($id);

        // Check if the query returned a result
        if ($destinasi->num_rows === 0) {
            die('No destinasi found with this ID');
        }

        $this->loadView('confirm_destinasi', ['destinasi' => $destinasi->fetch_object()]);
    }
}
