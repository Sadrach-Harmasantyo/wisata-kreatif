<?php include 'navbar.php'; ?>

<?php if (!$posts->num_rows) {
  echo 'No posts.';
} else {
  echo "<div style=\"display: flex; justify-content: center; flex-wrap: wrap; width: 100%; gap: 30px; \">";
  while ($post = $posts->fetch_object()) {
    echo "<div style=\"border: 1px solid black; padding: 10px;width: fit-content;\">";
    echo "<h3><a href=\"?c=Post&m=detail&id=$post->id\">$post->title</a></h3>";
    echo "<p>Posted by $post->username</p>";

    // Fungsi untuk memotong konten menjadi hanya kata pertama
    // $contentWords = explode(' ', $post->content);
    // $contentPreview = $contentWords[0] . '...';
    // echo "<p>$contentPreview</p>";

    // Fungsi untuk memotong konten
    $contentPreview = implode(' ', array_slice(explode(' ', $post->content), 0, 5)) . '...';
    echo "<p>$contentPreview</p>";

    if ($post->image_path) {
      echo "<img src=\"$post->image_path\" width=\"300\" height=\"300\">";
    }

    if ($_SESSION['role'] === 'admin' || $post->user_id == $_SESSION['user_id']) {
      echo "<a href=\"?c=Post&m=edit&id=$post->id\">Edit</a>";
      printf('<form action="?c=Post&m=delete" method="post"><input type="hidden" name="id" value="%d"><input type="submit" value="Delete"></form>', $post->id);
    }

    echo "</div>";
  }
  echo "</div>";
}
?>
