<?php 
    require "../../../private/file_path.php"; 

    // $page_title = "Home";
    $edit_password = true;
?>

<?php 
require DASHBOARD_PATH .'/shared/header_aside.php';
?>

<?php 
    $missing = [];
    $error = [];
    if(isset($_POST['update'])){
        foreach($_POST as $key => $value){
            $value = is_array($value) ? $value : trim($value);
            if(empty($value)) {
                $missing[] = $key;
                $$key = '';
            }else{
                $$key = $value;
            }
        }

        if(!$missing){ //if no missing field
            if ($password != $confirm_password) { // if password do not match
                $error[] = "passwordDontMatch";
            }
            if (strlen($password) <= 7) { // if password is not upto 8 characters
                $error[] = "passwordTooSmall";
            }
            else{ // query the database
                
                //update user password
                $new_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $connection->prepare("UPDATE customers SET password=? WHERE user_name=? LIMIT 1");
                $stmt->bind_param("ss", $new_password, $username);
                $stmt->execute();
                $stmt->close();
            
                header("location: " . url_for("/dashboard/index.php"));
                
                $connection->close();
            }
     
        }
    }
?>
    
<div class="user_account">
    <form class="login_form" action="<?php echo url_for("/dashboard/pages/edit_password.php") ?>" method="post" onsubmit="return emptyFields()">
        <p class="form_detail">Update Password 
            <span id="error" class="error_message"><?php echo ($missing || $error) ? "Please attend to the issue(s) below!" : "" ?></span>
            <span id="error" class="error_message">
                <?php echo isset($_GET['error']) ? "unable to connect to database, retry later" : "" ?>
            </span>
        </p>
        <div class="user_password">
            <span id="error" class="error_message">
                <?php echo ($missing && in_array('password', $missing)) ? "Please enter password!" : "" ?>
                <?php echo ($error && in_array('passwordDontMatch', $error)) ? "password dont match" : "" ?> <br>
                <?php echo ($error && in_array('passwordTooSmall', $error)) ? "password must be up to 8 characters" : "" ?>
            </span>
            <i class="account_icon show_hide_pwd fas fa-lock"></i>
            <i class="account_icon show_hide_pwd fas fa-unlock-alt"></i>
            <input type="password" placeholder="Enter password" name="password" class="input_field input">
        </div>
        <div class="user_password">
            <span id="error" class="error_message">
                <?php echo ($missing && in_array('confirm_password', $missing)) ? "Please enter re-type password!" : "" ?>
                <?php echo ($error && in_array('passwordDontMatch', $error)) ? "password dont match" : "" ?> <br>
                <?php echo ($error && in_array('passwordTooSmall', $error)) ? "password must be up to 8 characters" : "" ?>
            </span>
            <i class="account_icon show_hide_pwd fas fa-lock"></i>
            <i class="account_icon show_hide_pwd fas fa-unlock-alt"></i>
            <input type="password" placeholder="confirm password" name="confirm_password" class="input_field input">
        </div>
        <div class="send_box">
            <input class="page_anchor" type="submit" name="update" value="Update">
            <span class="rotate rotate_hide"></span>
        </div>
    </form>
</div>

    
<?php require DASHBOARD_PATH .'/shared/footer.php'; ?>