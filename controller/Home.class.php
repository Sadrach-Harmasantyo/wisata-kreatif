<?php
// class Home extends Controller // Ubah nama kelas menjadi 'Home'
// {

//     public function index() // Pastikan nama metode tetap 'index'
//     {
//         // Load model (Jika diperlukan)
//         // $homeModel = $this->loadModel('HomeModel');

//         // Get data from the model (Jika diperlukan)
//         // $data = $homeModel->getData();

//         // Load the view
//         $this->loadView('home'); // Ubah nama view menjadi 'home'
//     }
// }

class Home extends Controller
{
    public function index()
    {
        $postModel = $this->loadModel('PostModel');
        $posts = $postModel->getAll();
        $this->loadView('home', ['posts' => $posts]);
    }
}
?>
