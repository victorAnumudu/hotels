

<div class="main_page_image">
    <div class="image_overlay"></div>
    <?php 
        if(isset($home)){ ?>
            <img class="main_image" src="<?php echo url_for('/images/home/main_image.jpg') ?>" alt="page main image">
            <?php for($i = 1; $i<=4; $i++) {?>
                <img class="main_image slide_image_offpage" src="<?php echo url_for('/images/home/slideshow/slide_'.$i.'.jpg') ?>" alt="slide image">
            <?php } ?>
        <?php } else if(isset($about)) {?>
            <img class="main_image" src="<?php echo url_for('/images/about/about_main_image.jpg') ?>" alt="page main image">
            <?php for($i = 1; $i<=4; $i++) {?>
                <img class="main_image slide_image_offpage" src="<?php echo url_for('/images/about/slideshow/slide_'.$i.'.jpg') ?>" alt="slide image">
            <?php } ?>
        <?php } else if(isset($contact)) {?>
            <img class="main_image" src="<?php echo url_for('/images/contact/contact_main_image.jpg') ?>" alt="page main image">
            <?php for($i = 1; $i<=4; $i++) {?>
                <img class="main_image slide_image_offpage" src="<?php echo url_for('/images/contact/slideshow/slide_'.$i.'.jpg') ?>" alt="slide image">
            <?php } ?>
        <?php } ?>
    <div class="header_description">
        <?php
            if(isset($home)){
                echo "<h1>Enjoy A Luxury Experience</h1>";
            } else if (isset($about)) {
                echo "<h1>We have remained UNBEATABLE for years</h1>";
            } else if (isset($contact)) {
                echo "<h1>CONTACT US</h1>";
            }
        ?>
        <p>Elegant rooms at affordable prices</p>
        <a class="page_anchor" href="<?php echo url_for("/pages/login.php") ?>">BOOK NOW</a>
    </div>

    <!-- slide controls -->
    <img class="slide_controls slide_backward" title="previous" src="<?php echo url_for("/images/slide_backward.svg") ?>" alt="slide control">
    <img class="slide_controls slide_forward" title="next" src="<?php echo url_for("/images/slide_forward.svg") ?>" alt="slide control">
</div>