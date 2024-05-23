<?php
class Destinasi extends Controller
{

    public function index()
    {
        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getAll();
        $this->loadView('destinasi', ['destinasi' => $destinasi]);
    }

    public function detail()
    {
        $id = $_GET['id'];
        if (!$id) {
            header('Location: index.php?c=Destinasi');
            exit;
        }

        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasi = $destinasiModel->getById($id)->fetch_object();
        if (!$destinasi) {
            header('Location: index.php?c=Destinasi');
            exit;
        }

        $this->loadView('detailDestinasi', ['destinasi' => $destinasi]);
    }

    public function create_form()
    {
        $this->loadView('insert_destinasi');
    }

    public function create_process()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $nama = addslashes($_POST['nama']);
        $deskripsi = addslashes($_POST['deskripsi']);
        $lokasi = addslashes($_POST['lokasi']);
        $kategori = addslashes($_POST['kategori']);

        $imagePath = "";

        $uploadDir = 'uploads/';
        if (!file_exists($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        if (isset($_FILES['upload_gambar']) && $_FILES['upload_gambar']['error'] === UPLOAD_ERR_OK) {
            $uploadFile = $uploadDir . basename($_FILES['upload_gambar']['name']);

            if (move_uploaded_file($_FILES['upload_gambar']['tmp_name'], $uploadFile)) {
                $imagePath = $uploadFile;
            } else {
                die('Upload failed.');
            }
        }

        $user_id = $_SESSION['user_id'];

        // $postModel = $this->loadModel('PostModel');
        // $postModel->insert($title, $content, $imagePath, $user_id);

        $destinasiModel = $this->loadModel('DestinasiModel');
        $destinasiModel->insert($nama, $deskripsi, $lokasi, $kategori, $imagePath);

        header('Location: ?c=Destinasi');
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

    public function editDestinasi(){
        $this->loadView('edit_destinasi');
    }
}
