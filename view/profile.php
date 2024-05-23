<?php include 'navbar.php'; ?>

<div style="padding: 20px; border: 1px solid black;">
    <h2>Profile</h2>
    <p>Username: <?php echo $user->username; ?></p>
    <a href="?c=User&m=edit_profile">Edit Profile</a>
</div>
