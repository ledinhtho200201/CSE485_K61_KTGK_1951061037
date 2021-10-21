<?php
    $reci_id=$_GET["reci_id"];
    // Buoc 1: Ket noi Server
    require("./config/db.php");
    // Buoc 2: Khai bao truy van
    $sql= "DELETE FROM blood_recipient WHERE reci_id=$reci_id";

    if(mysqli_query($conn,$sql)==TRUE){
        echo "thanhcong";
        header('Location: index.php');
    }else{
        echo "Xóa thất bại!";
    }
?>