

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotels <?php echo $page_title ?></title>
    <link rel="shortcut icon" href="<?php echo url_for('/images/nav-bar-image.png'); ?>" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo url_for('/shared/nav_footer.css') ?>">
    <link rel="stylesheet" href="<?php echo url_for('/shared/custom.css') ?>">

    <?php if(isset($home)) { ?>
        <link rel="stylesheet" href="<?php echo url_for('/css/index.css') ?>">
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
                <a href="#" class="nav_anchor nav_login">Book now</a>
            </li>
            <li class="nav_list_item">
                <a href="#" class="nav_anchor nav_login">Login</a>
            </li>
        </ul>
        <div class="nav_toggle">
            <div class="nav_toggle_lines toggle_line1"></div>
            <div class="nav_toggle_lines toggle_line2"></div>
            <div class="nav_toggle_lines toggle_line3"></div>
        </div>
    </nav>