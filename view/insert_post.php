<form action="?c=Post&m=create_process" method="post" enctype = "multipart/form-data">
  <label> Title:
    <input type="text" name="title" required>
  </label> <br>
  <label> Content:
    <textarea name="content" cols="30" rows="10"
      required></textarea>
  </label> <br>
  <label for="upload_gambar"> Upload Gambar:
    <input type="file" name="upload_gambar" id="upload_gambar">
  </label><br>
  <input type="submit" value="Post">
</form>
