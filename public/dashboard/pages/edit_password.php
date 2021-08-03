<?php 
    require "../../../private/file_path.php"; 

    // $page_title = "Home";
    $edit_password = true;
?>

<?php 
require DASHBOARD_PATH .'/shared/header_aside.php';
?>
    
<div class="user_account">
    <form class="login_form" action="<?php echo url_for("/dashboard/pages/edit_password.php") ?>" method="post" onsubmit="return emptyFields()">
        <p class="form_detail">Update Password <span id="error" class="error_message"><?php //php eror ?></span></p>
        <div class="user_password">
            <i class="account_icon show_hide_pwd fas fa-lock"></i>
            <i class="account_icon show_hide_pwd fas fa-unlock-alt"></i>
            <input type="password" placeholder="Enter password" name="password" class="input_field input">
        </div>
        <div class="user_password">
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