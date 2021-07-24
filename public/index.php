
<?php 
    require "../private/file_path.php"; 

    $page_title = "Home";
    $home = true;
?>



<!-- Nav bar and header image -->
<?php 
    require SHARED_PATH . '/nav.php';
    require SHARED_PATH . '/header.php';
?>
   

<section>
    <!-- welcome section div -->
    <div class="welcome_section">
        <h2 class="section_heading">Welcome to Hotels</h2>
        <div class="section_images_div">
            <div class="welcome_image">
                <div class="image_overlay"></div>
                <img class="section_img" src="<?php echo url_for("/images/home/welcome/great_location.jpg") ?>" alt="location image">
                <p class="section_image_description">Great Location</p>
            </div>
            <div class="welcome_image">
                <div class="image_overlay"></div>
                <img class="section_img" src="<?php echo url_for("/images/home/welcome/luxury_room.jpg") ?>" alt="location image">
                <p class="section_image_description">Luxury Rooms</p>
            </div>
            <div class="welcome_image">
                <div class="image_overlay"></div>
                <img class="section_img" src="<?php echo url_for("/images/home/welcome/delicious_foods.jpg") ?>" alt="delicious image">
                <p class="section_image_description">Delicious Food</p>
            </div>
            <div class="welcome_image">
                <div class="image_overlay"></div>
                <img class="section_img" src="<?php echo url_for("/images/home/welcome/great_service.jpg") ?>" alt="services image">
                <p class="section_image_description">Great Services</p>
            </div>
        </div>
    </div>

    <!-- our room section -->
    <div class="our_room">
        <h2 class="section_heading">Our Rooms and Suites</h2>
        <p class="section_paragraph">Dumont rooms & suites are all tastefully decorated and provided with every modern amenity for your comfort and relaxation.</p>

        <div class="section_images_div">
            <div class="room_image">
                <img class="section_img" src="<?php echo url_for("/images/home/our_room/standard_room.jpg") ?>" alt="room images">
                <p class="room_description">Standard Room</p>
            </div>
            <div class="room_image">
                <img class="section_img" src="<?php echo url_for("/images/home/our_room/executive_room.jpg") ?>" alt="room images">
                <p class="room_description">Executive Room</p>
            </div>
            <div class="room_image">
                <img class="section_img" src="<?php echo url_for("/images/home/our_room/deluxe_room.jpg") ?>" alt="room images">
                <p class="room_description">Deluxe Room</p>
            </div>
        </div>
    </div>

    <!-- gallery section -->
    <div class="gallery">
        <h2 class="section_heading">Our Gallery</h2>
        <p class="section_paragraph">Well structured Gym equipment, relaxation center and alos of more!.</p>

        <div class="gallery_section_images_div">
            <div class="gallery_image">
                <img class="section_img" src="<?php echo url_for("/images/home/gallery/img-001.jpg") ?>" alt="gallery images">
            </div>
            <div class="gallery_image">
                <img class="section_img" src="<?php echo url_for("/images/home/gallery/img-002.jpg") ?>" alt="gallery images">
            </div>
            <div class="gallery_image">
                <img class="section_img" src="<?php echo url_for("/images/home/gallery/img-003.jpg") ?>" alt="gallery images">
            </div>
            <div class="gallery_image">
                <img class="section_img" src="<?php echo url_for("/images/home/gallery/img-004.jpg") ?>" alt="gallery images">
            </div>
            <div class="gallery_image">
                <img class="section_img" src="<?php echo url_for("/images/home/gallery/img-005.jpg") ?>" alt="gallery images">
            </div>
            <div class="gallery_image">
                <img class="section_img" src="<?php echo url_for("/images/home/gallery/img-006.jpg") ?>" alt="gallery images">
            </div>
        </div>
    </div>

    <!-- testimonial section -->
    <div class="testimonial">
        <h2 class="section_heading">Testimonial from people</h2>

        <?php for($i = 1; $i <=3; $i++) {?>
            <div class="testimonial_section">
                <img class="testimonial_img" src="<?php echo url_for("/images/home/testimonial/testimonial_".$i.".jpg") ?>" alt="location image">
                <p class="testimonial_text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatum illum autem aliquam dolore tempore consequuntur nihil? Laborum culpa ipsa, quaerat quibusdam quisquam quas eum. Voluptas ipsa quas recusandae, tempore, sapiente necessitatibus nihil ex possimus fugit numquam animi soluta! Asperiores, aut.</p>
            </div>
        <?php }?>
        <button class="testimonial_selector selector_left"><</button>
        <button class="testimonial_selector selector_right">></button>
    </div>

</section>


<!-- footer section -->
<?php require SHARED_PATH . '/footer.php';?>