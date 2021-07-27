

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels <?php echo $page_title ?></title>
    <link rel="shortcut icon" href="<?php echo url_for('/images/nav-bar-image.png'); ?>" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4ea96ace4f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?php echo url_for('/shared/nav_footer.css') ?>">
    <link rel="stylesheet" href="<?php echo url_for('/shared/custom.css') ?>">

    <?php if(isset($home)) { ?>
        <link rel="stylesheet" href="<?php echo url_for('/css/index.css') ?>">
    <?php } ?>
    <?php if(isset($about)) { ?>
        <link rel="stylesheet" href="<?php echo url_for('/css/about.css') ?>">
    <?php } ?>
    <?php if(isset($contact)) { ?>
        <link rel="stylesheet" href="<?php echo url_for('/css/contact.css') ?>">
    <?php } ?>
    <?php if(isset($login) || isset($signup) ) { ?>
        <link rel="stylesheet" href="<?php echo url_for('/css/loginout.css') ?>">
    <?php } ?>

</head>
<body>
    <nav class="main_nav">
        <img src="<?php echo url_for('/images/nav-bar-image.png') ?>" alt="nav bar image">
        <ul class="nav_list">
            <li class="nav_list_item">
                <a href="<?php echo url_for('/'); ?>" class="nav_anchor nav_link <?php if(isset($home)){
                    echo 'active_link';
                }  ?>">Home</a>
            </li>
            <li class="nav_list_item">
                <a href="<?php echo url_for('/pages/about.php'); ?>" class="nav_anchor nav_link <?php if(isset($about)){
                    echo 'active_link';
                }  ?>">About</a>
            </li>
            <li class="nav_list_item">
                <a href="<?php echo url_for('/pages/contact.php'); ?>" class="nav_anchor nav_link <?php if(isset($contact)){
                    echo 'active_link';
                }  ?>">Contact</a>
            </li>
            <li class="nav_list_item">
                <a href="<?php echo url_for("/pages/login.php") ?>" class="nav_anchor nav_login <?php if(isset($login)){
                    echo 'nav_login_active';
                } ?>">Login</a>
            </li>
            <li class="nav_list_item">
                <a href="<?php echo url_for('/pages/signup.php'); ?>" class="nav_anchor nav_login <?php if(isset($signup)){
                    echo 'nav_login_active';
                } ?>">Signup</a>
            </li>
        </ul>
        <div class="nav_toggle">
            <div class="nav_toggle_lines toggle_line1"></div>
            <div class="nav_toggle_lines toggle_line2"></div>
            <div class="nav_toggle_lines toggle_line3"></div>
        </div>
    </nav>
