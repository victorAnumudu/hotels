

<?php 
    //localhost server
    // $localserver = "localhost";
    // $db_user = "root";
    // $db_password = "";
    // $db_name = "hotel";

    //romote server
    $localserver = "remotemysql.com";
    $db_user = "uSW1hgcQEj";
    $db_password = "tI0xNjDh6j";
    $db_name = "uSW1hgcQEj";

    $connection = new mysqli($localserver, $db_user, $db_password, $db_name);

?>