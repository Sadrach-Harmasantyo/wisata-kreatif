<?php include 'navbar.php'; ?>

<div style="padding: 20px; border: 1px solid black;">
    <h2><?php echo $post->title; ?></h2>
    <p>Posted by <?php echo $post->username; ?></p>
    <p><?php echo nl2br($post->content); ?></p>
    <?php if ($post->image_path): ?>
        <img src="<?php echo $post->image_path; ?>" width="300" height="300">
    <?php endif; ?>

    <?php if ($_SESSION['role'] === 'admin' || $post->user_id == $_SESSION['user_id']): ?>
        <a href="?c=Post&m=edit&id=<?php echo $post->id; ?>">Edit</a>
        <form action="?c=Post&m=delete" method="post" style="display:inline;">
            <input type="hidden" name="id" value="<?php echo $post->id; ?>">
            <input type="submit" value="Delete">
        </form>
    <?php endif; ?>
</div>
