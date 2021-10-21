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
    <div class="container_fliud">

        <!--Start navigation-->
        <div class="row-nav-menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Administration</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Quản lí người nhận hiến máu</a>
                            </li>                       
                        </ul>
                    </div>
                    <button class="btn btn-secondary float-end"> Đăng xuất </button>

                </div>
            </nav>    

        </div>
        <!--End navigation-->

        <!--Start main-->
        <div class="row">
            <div class="col-md-12 ">
                <div>
                    <form method="get" action="add-member.php">
                        <button class="btn btn-success">Thêm mới</button>
                    </form>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">STT</th>
                        <th scope="col">Họ và tên</th>
                        <th scope="col">Giới tính</th>
                        <th scope="col">Nhóm máu</th>
                        <th scope="col">Số lượng máu</th>
                        <th scope="col">Ngày đăng kí</th>
                        <th scope="col">Số di động</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php   
                            //Bước 1: Kết kết nối tới CSDL(Mysql)
                            include('./config/db.php');

                            //Bước 2: Khai báo các câu lệnh thực thi và thực hiện truy vấn
                            $sql = "SELECT reci_id, reci_name, reci_sex, reci_bgroup, reci_bqnty, reci_reg_date, reci_phno FROM blood_recipient ";
                            $result = mysqli_query($conn,$sql); 

                            //Bước 3: Xử lí kêt quả trả về
                            if(mysqli_num_rows($result)>0){
                                $i=1;
                                while($row=mysqli_fetch_assoc($result)){
                        ?>
                                    <tr>
                                        <th scope="row"><?php echo $i; ?></th>
                                        <td><?php echo $row['reci_name']; ?></td>
                                        <td><?php echo $row['reci_sex']; ?></td>
                                        <td><?php echo $row['reci_bgroup']; ?></td>
                                        <td><?php echo $row['reci_bqnty']; ?></td>
                                        <td><?php echo $row['reci_reg_date']; ?></td>
                                        <td><?php echo $row['reci_phno']; ?></td>
                                        <td><a href="edit-member.php?reci_id=<?php echo $row['reci_id']; ?>"><i class="fas fa-edit"></i></a></td>
                                        <td><a href="delete.php?reci_id=<?php echo $row['reci_id']; ?>"><i class="fas fa-trash"></i></a></td>
                                        
                                    </tr>
                        <?php
                                $i++;
                                }  
                            }
                        ?>
                    </tbody>
                </table>            
            </div>
        </div>
        <!--End main-->

        <!--Start footer -->
<footer class="p-3 bg-danger text-white">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="text-center ">Bank Blood</p>
            </div>
        </div>
    </div>
</footer>
    

        <!--End footer  -->

    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>