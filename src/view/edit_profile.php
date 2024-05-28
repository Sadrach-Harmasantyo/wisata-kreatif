<?php include 'navbar.php'; ?>

<div style="padding: 20px; border: 1px solid black;">
    <h2>Edit Profile</h2>
    <form action="?c=User&m=update_profile" method="post">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" value="<?php echo $user->username; ?>"><br><br>
        <label for="password">Password (leave blank if you don't want to change):</label><br>
        <input type="password" id="password" name="password"><br><br>
        <input type="submit" value="Update Profile">
    </form>
</div>
