
<?php 
    require "../../private/file_path.php";


    if(isset($_POST["send"])){
        // $reply = "message sucesfully sent!";
        header("location: " . url_for("/pages/contact.php?id=#contact_form"));
    }

    if(isset($_GET["id"])){
        $reply = "message sucesfully sent!";
    }
?>




<?php 
    $page_title = "Contact";
    $contact = true;
?>

<?php 
    require SHARED_PATH . '/nav.php';
    require SHARED_PATH . '/header.php';
?>

<section>
    <h2 class="section_heading">Contact us</h2>
    <div class="contact">
        <div class="contact_address">
            <div class="contact_location contact_info">
                <i class="contact_icon fas fa-map-marker-alt"></i>
                <div class="contact_detail">
                    <p>Plot 411, Musa Aliro Close,</p>
                    <p>Maitama, Abuja</p>
                </div>
            </div>
            <div class="contact_tel contact_info">
                <i class="contact_icon fas fa-phone-alt"></i>
                <div class="contact_detail">
                    <p>+234 803 221 7768</p>
                    <p>+01 1717087</p>
                </div>
            </div>
            <div class="contact_email contact_info">
                <i class="contact_icon fas fa-envelope-open-text"></i>
                <div class="contact_detail">
                    <p>contact@dumont.com</p>
                    <p>reservation@dumont.com</p>
                </div>
            </div>
        </div>
        <form class="contact_form" id="contact_form" method="post" action="<?php echo url_for("/pages/contact.php") ?>" onsubmit="return emptyFields()">
            <p id="error" class="<?php echo isset($reply) ? 'success_message' : 'error_message' ?>"><?php
                if(isset($reply)){
                    echo $reply;
                }
            ?></p>
            <input class="contact_input input" type="text" name="name" placeholder="Enter your name">
            <input class="contact_input input" type="email" name="email" placeholder="Enter your email">
            <textarea class="contact_message input" name="message" id="" cols="30" rows="10"></textarea>
            <div class="send_box">
                <input class="page_anchor" type="submit" name="send" value="Send">
                <span class="rotate rotate_hide"></span>
            </div>
        </form>
    </div>
</section>

<?php 
    require SHARED_PATH . '/footer.php';
?>