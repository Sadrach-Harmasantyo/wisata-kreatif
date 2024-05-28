<?php
class PostModel extends Model
{
     public function getAll()
     {
          // $sql = 'SELECT * FROM post ORDER BY id DESC';
          // return $this->mysqli->query($sql);
          $sql = "SELECT post.*, users.username FROM post JOIN users ON post.user_id = users.id";
          return $this->mysqli->query($sql);
     }

     public function insert($title, $content, $imagePath, $user_id)
     {
          $sql = "INSERT INTO post (title, content, image_path, user_id) 
                VALUES ('$title', '$content', '$imagePath', '$user_id')";
          $result = $this->mysqli->query($sql);
          if ($result) {
               echo 'Data inserted successfully'; // Debugging
          } else {
               echo 'Database insert error: ' . $this->mysqli->error; // Debugging
          }
          // $this->mysqli->query($sql);
     }

     // public function getById($id)
     // {
     //      $sql = "SELECT * FROM post WHERE id = $id";
     //      return $this->mysqli->query($sql);
     // }

     public function getById($id)
    {
        $sql = "SELECT post.*, users.username FROM post JOIN users ON post.user_id = users.id WHERE post.id = $id";
        return $this->mysqli->query($sql);
    }

     public function update($id, $title, $content, $imagePath = null)
     {
          if ($imagePath) {
               $sql = "UPDATE post SET title = '$title', content = '$content', image_path = '$imagePath' WHERE id = '$id'";
          } else {
               $sql = "UPDATE post SET title = '$title', content = '$content' WHERE id = '$id'";
          }
          $this->mysqli->query($sql);
     }


     public function delete($id)
     {
          $sql = "DELETE FROM post WHERE id = $id";
          $this->mysqli->query($sql);
     }
}
