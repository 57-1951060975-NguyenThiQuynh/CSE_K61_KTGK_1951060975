<!doctype html>
    <html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>
    <body>
        
<?php 
    include("config/config.php");


    if(isset($_POST['themdocgia'])) {
        $tendocgia = $_POST['hovaten'];
        $gioitinh = $_POST['gioitinh'];
        $namsinh = $_POST['namsinh'];
        $nghenghiep = $_POST['nghenghiep'];
        $ngaycapthe = $_POST['ngaycapthe']; 
        $ngayhethan = $_POST['ngayhethan']; 
        $diachi = $_POST['diachi'];

        $sql_insert = "INSERT into docgia(hovaten,gioitinh,namsinh,nghenghiep,ngaycapthe,ngayhethan,diachi)
            values (' $tendocgia',' $gioitinh','$namsinh','$nghenghiep','$ngaycapthe','$ngayhethan','$diachi')";
            
        mysqli_query($conn,$sql_insert);
        header('location: index.php');
        
    }
?>

    <?php
        include('header.php');
    ?>
    <?php 
        include ("config/config.php");
        if(isset($_GET['madg'])) {
            $id = $_GET['madg'];

            $sql = "SELECT * FROM docgia WHERE madg = '$madg'";
            $result = mysqli_query($conn, $sql);
        }
    ?>
    <div class="container">
        <h1 >Thêm danh sách độc giả</h1>
        <form class="mt-4" method="POST" action="">
            <div class="mb-3">
                <label for="hovaten" class="form-label">Họ và Tên</label>
                <input type="text" name="hovaten" class="form-control" id="hovaten" >
            </div>
            <div class="mb-3">
                <label for="gioitinh" class="form-label">Giới Tính</label>
                <input type="text" name="gioitinh" class="form-control" id="gioitinh" >
            </div>
            <div class="mb-3">
                <label for="namsinh" class="form-label">Năm Sinh</label>
                <input type="text" name="namsinh" class="form-control" id="namsinh" >
            </div>

            <div class="mb-3">
                <label for="nghenghiep" class="form-label">Nghề Nghiệp </label>
                <input type="text" name="nghenghiep" class="form-control" id="nghenghiep" >
            </div>

            <div class="mb-3">
                <label for="ngaycapthe" class="form-label">Ngày cấp thẻ </label>
                <input type="text" name="ngaycapthe" class="form-control" id="ngaycapthe" >
            </div>

            <div class="mb-3">
                <label for="ngayhethan" class="form-label">Ngày hết hạn </label>
                <input type="text" name="ngayhethan" class="form-control" id="ngayhethan" >
            </div>

            <div class="mb-3">
                <label for="diachi" class="form-label">Địa chỉ </label>
                <input type="text" name="diachi" class="form-control" id="diachi" >
            </div>
            
            <button type="submit" class="btn btn-primary mt-3 mb-4" name="themdocgia">Thêm</button>
        </form>
    </div>


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