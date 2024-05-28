<form action="?c=Post&m=update" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $post->id; ?>">
    <label>Title:
        <input type="text" name="title" value="<?php echo $post->title; ?>" required>
    </label><br>
    <label>Content:
        <textarea name="content" cols="30" rows="10" required><?php echo $post->content; ?></textarea>
    </label><br>
    <label>Current Image:
        <?php if (!empty($post->image_path)) : ?>
            <img src="<?php echo $post->image_path; ?>" width="300" height="300"><br>
        <?php endif; ?>
    </label><br>
    <label>Upload New Image:
        <input type="file" name="upload_gambar" id="upload_gambar">
    </label><br>
    <input type="submit" value="Update">
</form>
