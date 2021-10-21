<?php
    if(isset($_POST['btnUpdate'])){
        $reciID = $_POST['txtId'];
        $ten       =$_POST['txtHoTen'];
        $gioiTinh  =$_POST['txtGioiTinh'];
        $nhomMau   =$_POST['txtNhomMau'];
        $soMau    =$_POST['txtSoMau'];
        $ngayDK   = $_POST['txtDate'];
        $soDiDong =$_POST['txtSdt'];
        
        //Ket noi csdl
        include('./config/db.php');
        //Truy van
        $sql="UPDATE blood_recipient SET reci_name='$ten',
        reci_sex='$gioiTinh',reci_bgroup='$nhomMau',reci_bqnty='$soMau',reci_reg_date='$ngayDK',reci_phno='$soDiDong' where reci_id='$reciID' ";

        if(mysqli_query($conn,$sql)==TRUE){
            echo 'Cập nhật thành công';
            header('Location: index.php');
        }else{
            echo 'Cập nhật thất bại';
        }
        //Dong ket noi
        mysqli_close($conn);
    }
?>