<?php
//B1: kết nối với hệ quản trị CSDL
$conn = mysqli_connect("localhost","root","", "1951060975_libraries");
if (!$conn){
    die("Lỗi! Kết nối thất bại");
}

//B2: Thông báo ngôn ngữ sử dụng trong CSDL cho PHP

mysqli_query($conn , "SET NAME 'utf8'");

?>