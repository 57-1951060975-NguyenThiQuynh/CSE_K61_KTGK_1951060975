<?php


include ("config/config.php");

if(isset($_GET['madg'])) {
    $id = $_GET['madg'];
    $sql = "delete from docgia where madg = '$madg'";
    $result = mysqli_query($conn, $sql);
    header('location: index.php');
}
?>