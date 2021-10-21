<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font awesomes-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Bank blood</title>
  </head>
<body>
<?php
    include('./config/db.php');
    $reci_id=$_GET["reci_id"];
    $sql="select * from blood_recipient where reci_id='$reci_id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
?>
    <main class="mt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Cập nhật người nhận hiến máu</h2>
                    <form action="process-edit-member.php" method="post">
                        
                        <input type="hidden" class="form-control" id="txtId" value="<?php echo $reci_id ?>" name="txtId">
                        <div class="row mb-3">
                            <label for="txtHoTen" class="col-sm-2 col-form-label">Tên người nhận</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtHoTen" value="<?php echo $row['reci_name'] ?>" name="txtHoTen">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtChucVu" class="col-sm-2 col-form-label">Giới tính</label>
                            <div class="col-sm-10">
                            <input type="text" class="form-control" id="txtGioiTinh" value="<?php echo $row['reci_sex']; ?>" name="txtGioiTinh">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtMayBan" class="col-sm-2 col-form-label">Số máy bàn</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtNhomMau" value="<?php echo $row['reci_bgroup']; ?>" name="txtNhomMau">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtEmail" class="col-sm-2 col-form-label">Số lượng máu</label>
                            <div class="col-sm-10">
                            <input type="number" class="form-control" id="txtSoMau" value="<?php echo $row['reci_bqnty']; ?>" name="txtSoMau">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtMobile" class="col-sm-2 col-form-label">Ngày đăng kí</label>
                            <div class="col-sm-10">
                            <input type="date" class="form-control" id="txtDate" value="<?php echo $row['reci_reg_date']; ?>" name="txtDate">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="txtMobile" class="col-sm-2 col-form-label">Số điện thoại</label>
                            <div class="col-sm-10">
                            <input type="tel" class="form-control" id="txtSdt" value="<?php echo $row['reci_phno']; ?>" name="txtSdt">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="btnUpdate">Cập nhật</button>
                        
                    </form>
                </div>
            </div>
        </div>
    </main>
        

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>