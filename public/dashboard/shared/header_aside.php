

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="<?php echo url_for("/dashboard/shared/custom.css") ?>">
    <link rel="shortcut icon" href="<?php echo url_for('/images/nav-bar-image.png'); ?>" type="image/x-icon">
    <script src="https://kit.fontawesome.com/4ea96ace4f.js" crossorigin="anonymous"></script>
    <?php if(isset($dashboard)) { ?>
        <link rel="stylesheet" href="<?php echo url_for("/dashboard/shared/index.css") ?>">
   <?php } ?>
</head>
<body>
    <header>
        <img src="<?php echo url_for("images/nav-bar-image.png") ?>" alt="nav image">
        <div>
            <div class="user_image"></div>
            <div class="nav_toggle">
                <div class="nav_toggle_lines toggle_line1"></div>
                <div class="nav_toggle_lines toggle_line2"></div>
                <div class="nav_toggle_lines toggle_line3"></div>
            </div>
        </div>
    </header>
    <aside>
        <ul class="nav_list">
            <li class="nav_item">
                <a class="nav_link <?php echo isset($dashboard) ? "nav_item_active" : "" ?>" href="">
                    <span><i class="fas fa-tachometer-alt"></i></span> <span class="aside_option">Dashboard</span>
                </a>
            </li>
            <li class="nav_item">
                <a class="nav_link <?php echo isset($rooms) ? "nav_item_active" : "" ?>" href="">
                    <span><i class="fas fa-house-user"></i></span> <span class="aside_option">Rooms</span>
                </a>
            </li>
            <li class="nav_item">
                <a class="nav_link <?php echo isset($history) ? "nav_item_active" : "" ?>" href="">
                    <span><i class="fas fa-history"></i></span> <span class="aside_option">History</span>
                </a>
            </li>
            <li class="nav_item">
                <a class="nav_link <?php echo isset($password_reset) ? "nav_item_active" : "" ?>" href="">
                    <span><i class="fas fa-cogs"></i></span> <span class="aside_option">Edit password</span>
                </a>
            </li>
            <li class="nav_item">
                <a class="nav_link <?php echo isset($logout) ? "nav_item_active" : "" ?>" href="">
                    <span><i class="fas fa-sign-out-alt"></i></span> <span class="aside_option">Logout</span>
                </a>
            </li>
        </ul>
    </aside>