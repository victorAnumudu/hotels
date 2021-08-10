<?php 
    require "../../../private/file_path.php"; 

    // $page_title = "Home";
    $rooms = true;
?>

<?php 
require DASHBOARD_PATH .'/shared/header_aside.php';
?>
<?php 
    $missing = [];
    $error = [];

    //if no missing field, query the database
    // $sql = "SELECT rooms.room_type, COUNT(room_number.room_number) AS num_open_rooms FROM rooms ";
    // $sql .= "JOIN room_number ON room_number.room_id = rooms.room_id ";
    // $sql .= "WHERE room_number.booked = 0 ";
    // $sql  .= "GROUP BY rooms.room_type HAVING COUNT(room_number.room_number) > 0;";

    $sql = "SELECT * FROM room_number ";
    $sql .= "WHERE booked = 0 ;";
   
    $stmt = $connection->prepare($sql);
    // $stmt->bind_param("i", 0);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows <= 0) {
        // header("location: " . url_for("/dashboard/rooms.php?norroms=yes"));
        $avaliable_rooms = [];
        $error[] = "no_rooms";
    } else {
        while($row = $result->fetch_assoc()) {
            $avaliable_rooms[] = $row;
        }
    }
    $stmt->close();
    

    if(isset($_POST['book'])){
        foreach($_POST as $key => $value){
            $value = is_array($value) ? $value : trim($value);
            if(empty($value)) {
                $missing[] = $key;
                $$key = '';
            }else{
                $$key = $value;
            }
        }

        if(!$missing){ 
           
            $date = date("Y/m/d");
            $active = 1;

            $sql = "INSERT INTO booked_record (room_number, date_booked, user_id, active) VALUES(?, ?, ?, ?);";
        
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("ssii", $room_type, $date, $id, $active);
            if($stmt->execute()){
                $booked = 1;
                $sql = "UPDATE room_number SET booked = ? WHERE room_number = ? LIMIT 1";
                $stmt = $connection->prepare($sql);
                $stmt->bind_param("is", $booked, $room_type);
                if($stmt->execute()){
                    header("location: " . url_for("/dashboard/pages/history.php"));
                } else {
                    $sql = "DELETE FROM booked_record WHERE user_id = ? AND room_number = ? LIMIT 1";
                    $stmt = $connection->prepare($sql);
                    $stmt->bind_param("is", $id, $room_number);
                    $stmt->execute();
                }
            } else {
                 header("location: " . url_for("/dashboard/pages/rooms.php?error=servererror"));
            }
        
        }
    }

    $connection->close();
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

    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" class="book_room" id="book_room" method="POST" onsubmit="return emptyFields()">
        <p>Book NOW! 
            <span id="error" class="error_message"><?php echo ($missing || $error) ? "Please attend to the issue(s) below!" : "" ?></span>
            <br>
            <span id="error" class="error_message"><?php echo ($error && in_array("no_rooms", $error)) ? "Opps! no rooms" : "" ?></span>
            <span id="error" class="error_message">
                <?php echo isset($_GET['error']) ? "unable to connect to database, retry later" : "" ?>
            </span>
        </p>
        <div class="type">
            <label for="">Select Room Type 
                <span id="error" class="error_message">
                    <?php echo ($missing && in_array('room_type', $missing)) ? "Please select room type!" : "" ?>
                </span>
            </label> <br>
            <select name="room_type" id="room_type">
                <option value=''>not selected</option>
                <?php foreach($avaliable_rooms as $key => $value) { ?>
                    <option value="<?php echo $value['room_number'] ?>" <?php //echo (($missing || $error) && $room_number == $value['room_number']) ? "selected" : "" ?>>
                    <?php echo $value['room_number'] ?>
                    </option>
                <?php } ?>
            </select>
        </div>

        <!-- <div class="no">
            <label for="">Select Room Number 
                <span id="error" class="error_message">
                    <?php// echo ($missing && in_array('room_number', $missing)) ? "Please select room number!" : "" ?>
                </span>
            </label> <br>
            <select name="room_number" id="">
                <option value="">not selected</option>
                <option value="1">001</option>
                <option value="2">002</option>
                <option value="3">003</option>
            </select>
        </div> -->
        <div class="send_box">
            <input class="page_anchor" type="submit" name="book" value="Book">
            <span class="rotate rotate_hide"></span>
        </div>
    </form>
  </div>

<?php require DASHBOARD_PATH .'/shared/footer.php'; ?>