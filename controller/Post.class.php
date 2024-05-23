<?php
class Post extends Controller
{

    public function index()
    {
        $postModel = $this->loadModel('PostModel');
        $posts = $postModel->getAll();
        $this->loadView('posts', ['posts' => $posts]);
    }

    public function detail()
    {
        $id = $_GET['id'];
        if (!$id) {
            header('Location: index.php?c=Post');
            exit;
        }

        $postModel = $this->loadModel('PostModel');
        $post = $postModel->getById($id)->fetch_object();
        if (!$post) {
            header('Location: index.php?c=Post');
            exit;
        }

        $this->loadView('post_detail', ['post' => $post]);
    }

    public function create_form()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }
        $this->loadView('insert_post');
    }

    public function create_process()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $title = addslashes($_POST['title']);
        $content = addslashes($_POST['content']);
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

        $postModel = $this->loadModel('PostModel');
        $postModel->insert($title, $content, $imagePath, $user_id);

        header('Location: ?c=Post');
        exit;
    }

    public function edit()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $id = $_GET['id'];
        if (!$id) header('Location: index.php?c=Post');

        $postModel = $this->loadModel('PostModel');
        $post = $postModel->getById($id)->fetch_object();

        if ($_SESSION['role'] !== 'admin' && $post->user_id != $_SESSION['user_id']) {
            die('Unauthorized');
        }

        $this->loadView('edit', ['post' => $post]);
    }

    public function update()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $id = $_POST['id'];
        $postModel = $this->loadModel('PostModel');
        $post = $postModel->getById($id)->fetch_object();

        if ($_SESSION['role'] !== 'admin' && $post->user_id != $_SESSION['user_id']) {
            die('Unauthorized');
        }

        $title = addslashes($_POST['title']);
        $content = addslashes($_POST['content']);
        $imagePath = "";

        $currentImagePath = $post->image_path;

        if (isset($_FILES['upload_gambar']) && $_FILES['upload_gambar']['error'] === UPLOAD_ERR_OK) {
            $uploadDir = 'uploads/';
            $uploadFile = $uploadDir . basename($_FILES['upload_gambar']['name']);

            if (move_uploaded_file($_FILES['upload_gambar']['tmp_name'], $uploadFile)) {
                $imagePath = $uploadFile;

                if ($currentImagePath && file_exists($currentImagePath)) {
                    unlink($currentImagePath);
                }
            } else {
                die('Upload failed.');
            }
        }

        $postModel->update($id, $title, $content, $imagePath);
        header('Location: ?c=Post');
    }

    public function delete()
    {
        if (!isset($_SESSION['user_id'])) {
            die('Unauthorized');
        }

        $id = $_POST['id'];
        $postModel = $this->loadModel('PostModel');
        $post = $postModel->getById($id)->fetch_object();

        if ($_SESSION['role'] !== 'admin' && $post->user_id != $_SESSION['user_id']) {
            die('Unauthorized');
        }

        $currentImagePath = $post->image_path;

        if ($currentImagePath && file_exists($currentImagePath)) {
            unlink($currentImagePath);
        }

        $postModel->delete($id);
        header('Location: ?c=Post');
        exit;
    }
}
