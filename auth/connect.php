<?php 
    $conn       = mysqli_connect("localhost","root","","bajuretail");
    if ($conn) {
        // echo "Connect";
    }
    define("BASE_URL", "http://localhost/bajuretail");
    define("BASE_CSS", "http://localhost/bajuretail/style.css");
?>
