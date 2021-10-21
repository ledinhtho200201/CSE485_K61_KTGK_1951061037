<?php
   
    if(isset($_POST['btnSave'])){
        //Lay gia tri tren form luu vao cac bien
        $ten      =$_POST['txtHoTen'];
        $gioiTinh     =$_POST['txtGioiTinh'];
        $nhomMau     =$_POST['txtNhomMau'];
        $soMau      =$_POST['txtSoMau'];
        $ngayDK   =$_POST['txtDate'];
        $soDiDong       =$_POST['txtSdt'];
        //Thuc hien quy trinh 3 buoc:
        // Buoc 1: Ket noi Server
        require("./config/db.php");
        // Buoc 2: Khai báo truy vấn
        $sql = "INSERT INTO blood_recipient(reci_name,reci_sex,reci_bgroup,reci_bqnty,reci_reg_date,reci_phno)
        VALUES('$ten','$gioiTinh','$nhomMau','$soMau','$ngayDK','$soDiDong')";

            echo $sql."<br>";

        if(mysqli_query($conn,$sql)==TRUE){
            echo "Thêm thành công";
            header('Location: index.php');
        }else{
            echo "Chưa thêm đc...";
        }
    }
        // Buoc 3: Đóng kết nối
        mysqli_close($conn);
?>