<footer>
        <div class="footer_wrapper">
            <img class="footer_image" src="<?php echo url_for('/images/footer_logo.png') ?>" alt="footer image">
           <div class="footer_contact_wrapper">
                <p class="footer_contact">Plot 411, Musa Aliro close, Maitama, Abuja.</p>
                <p class="footer_contact">(+234)803-221-7768</p>
                <p class="footer_contact">reservation@dumont.com</p>
            </div>
            <ul class="footer_nav_wrapper">
                <li class="footer_nav_item">
                    <a class="footer_nav_anchor" href="<?php echo url_for('/') ?>">Home</a>
                
                </li>
                <li class="footer_nav_item">
                    <a class="footer_nav_anchor" href="<?php echo url_for('/pages/about.php'); ?>">About</a>
                </li>
                <li class="footer_nav_item">
                    <a class="footer_nav_anchor" href="<?php echo url_for('/pages/contact.php'); ?>">Contact</a>
                </li>
                <li class="footer_nav_item">
                    <a class="footer_nav_anchor" href="">Book Now</a>
                </li>
                <li class="footer_nav_item">
                    <a class="footer_nav_anchor" href="">Login</a>
                </li>
            </ul>
        </div>
        <p class="copyright">&copy; 2021 - Hotels.ng</p>
    </footer>
    <script src="<?php echo url_for('/shared/custom.js'); ?>"></script>
    <?php if(isset($home)) { ?>
        <script src="<?php echo url_for('/js/index.js'); ?>"></script>
    <?php } ?>
    <?php if(isset($about)) { ?>
        <script src="<?php echo url_for('/js/about.js'); ?>"></script>
    <?php } ?>
    <?php if(isset($contact)) { ?>
        <script src="<?php echo url_for('/js/contact.js'); ?>"></script>
    <?php } ?>
</body>
</html>