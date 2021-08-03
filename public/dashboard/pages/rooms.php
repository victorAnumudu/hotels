<?php 
    require "../../../private/file_path.php"; 

    // $page_title = "Home";
    $rooms = true;
?>

<?php 
require DASHBOARD_PATH .'/shared/header_aside.php';
?>
    
  <div class="rooms">
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

    <form action="<?php echo 'rooms.php' ?>" class="book_room" id="book_room" method="GET" onsubmit="return emptyFields()">
        <p>Book NOW!</p>
        <div class="type">
            <label for="">Select Room Type</label>
            <select name="room_type" id="">
                <option value="">not selected</option>
                <option value="standard">Standard</option>
                <option value="standard">Executive</option>
                <option value="standard">Deluxe</option>
            </select>
        </div>
        <div class="no">
            <label for="">Select Room Number</label>
            <select name="room_number" id="">
                <option value="">not selected</option>
                <option value="1">001</option>
                <option value="2">002</option>
                <option value="3">003</option>
            </select>
        </div>
        <div class="send_box">
            <input class="page_anchor" type="submit" name="Submit" value="Submit">
            <span class="rotate rotate_hide"></span>
        </div>
    </form>
  </div>

<?php require DASHBOARD_PATH .'/shared/footer.php'; ?>