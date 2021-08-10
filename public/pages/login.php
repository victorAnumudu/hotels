
<?php 
    require "../../private/file_path.php"; 

    $page_title = "Login";
    $login = true;
?>

<?php 
    $missing = [];
    $error = [];
    if(isset($_POST['login'])){
        foreach($_POST as $key => $value){
            $value = is_array($value) ? $value : trim($value);
            if(empty($value)) {
                $missing[] = $key;
                $$key = '';
            }else{
                $$key = $value;
            }
        }

        if(!$missing){ //if no missing field, connect to database
            require PROJECT_PATH . "/private/db_connection.php";
            if($connection->connect_error) { // check if db connection fails
                header("location: " . url_for("/pages/login.php?error=servererror"));
            }
            else{
                 //checking if user exist
                 $stmt = $connection->prepare("SELECT * FROM customers WHERE email=? OR user_name=?");
                 $stmt->bind_param("ss", $username, $username);
                 $stmt->execute();
                 $result = $stmt->get_result();
                 $stmt->close();

                 if($result->num_rows <= 0) { // if no user found
                     $error[] = "no_user";
                 }
                 else{
                    $record = $result->fetch_assoc();
                    if(!password_verify($password, $record['password'])){
                        $error[] = "no_user";
                    }
                    else{
                        session_start();
                        $_SESSION['username'] = $username;
                        $_SESSION['id'] = $record['id'];
                        header("location: " . url_for("/dashboard/index.php"));
                    }
                 }
            }
            $connection->close();
        }
    }
?>

<?php 
    require SHARED_PATH . '/nav.php';
    // require SHARED_PATH . '/header.php';
?>

<!-- Login Form Section -->
<div class="user_account">
    <form class="login_form" action="<?php echo url_for("pages/login.php") ?>" method="post" onsubmit="return emptyFields()">
        <p class="form_detail">Login 
            <span id="error" class="error_message"><?php echo ($missing) ? "Please attend to the issue(s) below!" : "" ?></span>
            <span id="error" class="error_message"><?php echo ($error) ? "wrong user or password!" : "" ?></span>
            <span id="error" class="error_message">
                <?php echo isset($_GET['error']) ? "unable to connect to database, retry later" : "" ?>
            </span>
        </p>
        <div class="user_username">
            <span id="error" class="error_message">
                <?php echo ($missing && in_array('user_name', $missing)) ? "Please enter username or email!" : "" ?>
            </span>
            <i class="account_icon fas fa-users"></i>
            <input type="text" placeholder="Enter email or username" name="username" class="input_field input"
            <?php 
                if($missing || $error) {
                    echo "value=".$username."";
                }
            ?>
            >
        </div>
        <div class="user_password">
            <span id="error" class="error_message">
                <?php echo ($missing && in_array('password', $missing)) ? "Please enter password" : "" ?>
            </span>
            <i class="account_icon show_hide_pwd fas fa-lock"></i>
            <i class="account_icon show_hide_pwd fas fa-unlock-alt"></i>
            <input type="password" placeholder="Enter password" name="password" class="input_field input">
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