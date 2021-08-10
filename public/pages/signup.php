
<?php 
    require "../../private/file_path.php";

    //script to process signup
    $missing = [];
    $error = [];
    require "../../private/process_signup.php";

    $page_title = "Signup";
    $signup = true;
?>


<?php 
    require SHARED_PATH . '/nav.php';
?>

<!-- Login Form Section -->
<div class="user_account" id="top">
    <form class="login_form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" onsubmit="return emptyFields()" enctype="multipart/form-data">
        <p class="form_detail">Signup 
            <span id="error" class="error_message"><?php echo ($missing || $error) ? "Please attend to the issue(s) below!" : "" ?></span>
            <span id="error" class="error_message">
                <?php echo isset($_GET['error']) ? "unable to connect to database, retry later" : "" ?>
            </span>
        </p>
        <div class="firstname">
            <label for="firstname">First Name 
                <span id="error" class="error_message">
                    <?php echo ($missing && in_array('firstname', $missing)) ? "Please enter firstname!" : "" ?>
                </span>
            </label>
            <input type="text" id="firstname" class="input_field" name="firstname" 
            <?php 
                if($missing || $error) {
                    echo "value=".$firstname."";
                }
            ?>
            >
        </div>
        <div class="lastname">
            <label for="lastname">Last Name 
                <span id="error" class="error_message">
                    <?php echo ($missing && in_array('lastname', $missing)) ? "Please enter lastname!" : "" ?>
                </span>
            </label>
            <input type="text" id="lastname" class="input_field" name="lastname" 
            <?php 
                if($missing || $error) {
                    echo "value=".$lastname."";
                }
            ?>
            >
        </div>
        <div class="contact">
            <label for="contact">Phone Number 
                <span id="error" class="error_message">
                    <?php echo ($missing && in_array('contact', $missing)) ? "Please enter contact!" : "" ?>
                    <?php echo ($error && in_array('contact', $error)) ? "Phone contact must be exactly 11 digits" : "" ?>
                    <?php echo ($error && in_array('contactTaken', $error)) ? "Phone already exists" : "" ?>
                </span>
            </label>
            <input type="text" id="contact" class="input_field" name="contact" 
            <?php 
                if($missing || $error) {
                    echo "value=".$contact."";
                }
            ?>
            >
        </div>
        <div class="email">
            <label for="email">Email 
                <span id="error" class="error_message">
                    <?php echo ($missing && in_array('email', $missing)) ? "Please enter email!" : "" ?>
                    <?php echo ($error && in_array('email', $error)) ? "not a valid email!" : "" ?>
                    <?php echo ($error && in_array('emailTaken', $error)) ? "email already exist!" : "" ?>
                </span>
            </label>
            <input type="email" id="email" class="input_field" name="email" 
            <?php 
                if($missing || $error) {
                    echo "value=".$email."";
                }
            ?>
            >
        </div>
        <div class="username">
            <label for="username">Username 
                <span id="error" class="error_message">
                    <?php echo ($missing && in_array('username', $missing)) ? "Please enter username!" : "" ?>
                    <?php echo ($error && in_array('usernameTaken', $error)) ? "username already exist!" : "" ?>
                </span>
            </label>
            <input type="text" id="username" class="input_field" name="username" 
            <?php 
                if($missing || $error) {
                    echo "value=".$username."";
                }
            ?>
            >
        </div>
        <div class="user_password">
            <label for="password">Password 
                <span id="error" class="error_message">
                    <?php echo ($missing)? "Please enter password!" : "" ?>
                    <?php echo ($error && in_array("passwordDontMatch", $error))? "password dont match!" : "" ?>
                    <?php echo ($error && in_array("passwordTooSmall", $error))? "password must be upto 8 characters!" : "" ?>
                </span>
            </label>
            <input type="password" id="password" name="password" class="input_field">
        </div>
        <div class="repeat_password">
            <label for="repeat_password">Confirm Password 
                <span id="error" class="error_message">
                    <?php echo ($missing) ? "Please enter repeat_password!" : "" ?>
                    <?php echo ($error && in_array("passwordDontMatch", $error)) ? "password dont match!" : "" ?>
                    <?php echo ($error && in_array("passwordTooSmall", $error)) ? "password must be upto 8 characters!" : "" ?>
                </span>
            </label>
            <input type="password" id="repeat_password" name="repeat_password" class="input_field">
        </div>
        <div class="passport">
            <label for="passport">Upload Passport 
                <span id="error" class="error_message">
                    <?php echo ($missing) ? "Please select passport!" : "" ?>
                </span>
            </label>
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