
<?php 
    require "../../private/file_path.php"; 

    $page_title = "Login";
    $login = true;
?>



<?php 
    require SHARED_PATH . '/nav.php';
    // require SHARED_PATH . '/header.php';
?>

<!-- Login Form Section -->
<div class="user_account">
    <div class="image_overlay"></div>
    <form class="login_form" action="#" method="post">
        <p class="form_detail">Login</p>
        <div class="user_username">
            <!-- <i class="account_icon fa-solid fa-user"></i> -->
            <input type="text" placeholder="Enter email or username" name="user_name" class="input_field">
        </div>
        <div class="user_password">
            <!-- <i class="account_icon fa-solid fa-unlock-keyhole"></i> -->
            <input type="password" placeholder="Enter password" name="password" class="input_field">
        </div>
        <div class="send_box">
            <input class="page_anchor" type="submit" name="login" value="Login">
            <span class="rotate rotate_hide"></span>
        </div>
    </form>
</div>


</body>
</html>
<?php 
    require SHARED_PATH . '/footer.php';
?>