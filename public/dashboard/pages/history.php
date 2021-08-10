<?php 
    require "../../../private/file_path.php"; 

    // $page_title = "Home";
    $history = true;
    $history_exist = false;
?>

<?php 
require DASHBOARD_PATH .'/shared/header_aside.php';

    
    $sql = "SELECT * FROM booked_record ";
    $sql .= "WHERE user_id = ? ;";
   
    $stmt = $connection->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();

    if($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $booked_rooms[] = $row;
        }
        $history_exist = true;
    }
    $stmt->close();

    if(isset($_GET['room_number'])){
        $room_number =  $_GET['room_number'];
        $booked = 0;

        $sql = "UPDATE room_number SET booked = ? WHERE room_number = ? LIMIT 1";
        $stmt = $connection->prepare($sql);
        $stmt->bind_param("is", $booked, $room_number);
        if($stmt->execute()){
            $active = 0;
            $sql = "UPDATE booked_record SET active = ? WHERE room_number = ? LIMIT 1";
            $stmt = $connection->prepare($sql);
            $stmt->bind_param("is", $active, $room_number);
            $stmt->execute();
        }
        header("location: " . url_for("/dashboard/pages/history.php"));
    }

    $connection->close();

?>
    
    <div class="history">
        <!-- <div class="history_overlay"></div> -->
        <?php if($history_exist === true) { ?>
            <p>Your Record history</p>
            <table>
            <tr>
                <th>S/N</th>
                <th>Room Type</th>
                <th>Date Booked</th>
                <th>Check out</th>
            </tr>
            <?php foreach($booked_rooms as $keys => $value) { ?>
                <tr>
                    <th><?php echo $keys + 1 ?></th>
                    <th><?php echo $value['room_number'] ?></th>
                    <th><?php echo $value['date_booked'] ?></th>
                    <th>
                        <a href="<?php echo ($_SERVER['PHP_SELF']."?room_number=".$value['room_number']) ?>">
                        <?php echo $value['active'] == 0 ? "checked Out" : "check out!"; ?>
                        </a>
                    </th>
                </tr>
            <?php } ?>
        </table>
       <?php } else { ?>
            <p>No Data/Records Found!</p>
        <?php } ?>
    </div>

<?php require DASHBOARD_PATH .'/shared/footer.php'; ?>