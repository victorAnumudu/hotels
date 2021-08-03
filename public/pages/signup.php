

<?php 
    require "../../private/file_path.php"; 

    $page_title = "Signup";
    $signup = true;
?>



<?php 
    require SHARED_PATH . '/nav.php';
    // require SHARED_PATH . '/header.php';
?>

<!-- Login Form Section -->
<div class="user_account">
    <form class="login_form" action="#" method="post" onsubmit="return emptyFields()">
        <p class="form_detail">Signup <span id="error" class="error_message"><?php //php eror ?></span></p>
        <div class="firstname">
            <label for="firstname">First Name</label>
            <input type="text" id="firstname" class="input_field" name="firstname" value="">
        </div>
        <div class="lastname">
            <label for="lastname">Last Name</label>
            <input type="text" id="lastname" class="input_field" name="lastname" value="">
        </div>
        <div class="contact">
            <label for="contact">Phone Number</label>
            <input type="text" id="contact" class="input_field" name="contact" value="">
        </div>
        <div class="email">
            <label for="email">Email</label>
            <input type="email" id="email" class="input_field" name="email" value="">
        </div>
        <div class="username">
            <label for="username">Username</label>
            <input type="text" id="username" class="input_field" name="username" value="">
        </div>
        <div class="user_password">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" class="input_field">
        </div>
        <div class="repeat_password">
            <label for="repeat_password">Confirm Password</label>
            <input type="password" id="repeat_password" name="repeat_password" class="input_field">
        </div>
        <div class="passport">
            <label for="passport">Upload Passport</label>
            <input type="file" id="passport" name="passport" accept="image/*" class="input_field">
            <!-- <input type="file" id="passport" name="passport" accept="image/*" class="input_image"> -->
            <img class="passport_image" src="" alt="passport">
        </div>
        <div class="send_box">
            <input class="page_anchor" type="submit" name="signup" value="Signup">
            <span class="rotate rotate_hide"></span>
        </div>
    </form>
</div>


</body>
</html>
<?php 
    require SHARED_PATH . '/footer.php';
?>