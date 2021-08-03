<?php 
    require "../../../private/file_path.php"; 

    // $page_title = "Home";
    $history = true;
    $history_exist = true;
?>

<?php 
require DASHBOARD_PATH .'/shared/header_aside.php';
?>
    
    <div class="history">
        <!-- <div class="history_overlay"></div> -->
        <?php if($history_exist === true) { ?>
            <table>
            <tr>
                <th>S/N</th>
                <th>Room Type</th>
                <th>Date Booked</th>
            </tr>
            <tr>
                <th>S/N</th>
                <th>Room Type</th>
                <th>Date Booked</th>
            </tr>
        </table>
       <?php } else { ?>
            <p>No Data/Records Found!</p>
        <?php } ?>
    </div>

<?php require DASHBOARD_PATH .'/shared/footer.php'; ?>