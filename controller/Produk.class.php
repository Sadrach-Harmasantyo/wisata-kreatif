<?php
class Produk extends Controller
{

    public function index()
    {
        $produkModel = $this->loadModel('ProdukModel');
        $produk = $produkModel->getAll();
        $this->loadView('produk', ['produk' => $produk]);
    }

    public function detail()
    {
        $id = $_GET['id'];
        if (!$id) {
            header('Location: index.php?c=Produk');
            exit;
        }

        $produkModel = $this->loadModel('ProdukModel');
        $produk = $produkModel->getById($id)->fetch_object();
        if (!$produk) {
            header('Location: index.php?c=Produk');
            exit;
        }

        $this->loadView('produk_detail', ['produk' => $produk]);
    }

    public function create_form()
    {
        $this->loadView('insert_produk');
    }

    public function create_process()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $nama = addslashes($_POST['nama']);
        $deskripsi = addslashes($_POST['deskripsi']);
        $kategori = addslashes($_POST['kategori']);
        $harga = addslashes($_POST['harga']);

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

        $destinasiModel = $this->loadModel('ProdukModel');
        $destinasiModel->insert($nama, $deskripsi, $kategori, $harga, $imagePath);

        header('Location: ?c=Produk');
        exit;
    }

    public function edit()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $id = $_GET['id'];
        if (!$id) header('Location: index.php?c=Produk');

        $produkModel = $this->loadModel('ProdukModel');
        $produk = $produkModel->getById($id)->fetch_object();

        if ($_SESSION['role'] !== 'admin' && $produk->user_id != $_SESSION['user_id']) {
            die('Unauthorized');
        }

        $this->loadView('edit_produk', ['produk' => $produk]);
    }

    public function confirm()
    {
        // Check if 'id' is set and is a valid integer
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            die('Invalid ID');
        }

        $id = intval($_GET['id']);
        $produkModel = $this->loadModel('ProdukModel');
        $produk = $produkModel->getById($id);

        // Check if the query returned a result
        if ($produk->num_rows === 0) {
            die('No produk found with this ID');
        }

        $this->loadView('confirm_produk', ['produk' => $produk->fetch_object()]);
    }
}
