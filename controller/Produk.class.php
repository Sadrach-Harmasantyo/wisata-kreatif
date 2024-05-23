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
        $produkModel = $this->loadModel('ProdukModel');
        $nama = addslashes($_POST['nama']);
        $deskripsi = addslashes($_POST['deskripsi']);
        $lokasi = addslashes($_POST['lokasi']);
        $kategori = addslashes($_POST['kategori']);
        $gambar = addslashes($_POST['gambar']); // Assume the foto is uploaded as a string path

        $produkModel->insert($nama, $deskripsi, $lokasi, $kategori, $gambar);

        $last_id = $this->mysqli->insert_id; // Get the ID of the newly inserted record
        header("Location: ?c=Produk&m=confirm&id=$last_id");
        exit;
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
