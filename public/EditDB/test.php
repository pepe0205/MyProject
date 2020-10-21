<?php
    require "connect.php";

    $id = $_POST['id'];
    $qr = "SELECT path FROM image_library WHERE product_id = '$id'";
    $data = mysqli_query($con, $qr);

    while($row=mysqli_fetch_assoc(($data))) {
        echo $row['path'];
    }
?>