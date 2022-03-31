<?php
require_once("../config/connect.php");
if (isset($_POST['submit'])) {

    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $advisor = mysqli_real_escape_string($conn, $_POST['advisor']);
    $detail = mysqli_real_escape_string($conn, $_POST['detail']);
    $year = mysqli_real_escape_string($conn, $_POST['year']);

    $sql = "INSERT INTO `tb_project` (`title`, `name`, `advisor`, `detail`, `year`, `date`) 
            VALUES ('" . $title . "', 
                    '" . $name . "', 
                    '" . $advisor . "', 
                    '" . $detail . "', 
                    '" . $year . "', 
                    '" . date("Y-m-d H:i:s") . "')";

    if (mysqli_query($conn, $sql)) {
        echo '<script> alert("เพิ่มข้อมูลเสร็จเรียบร้อย")</script>';
        header('Refresh:0; url= ../');
    } else {
        echo '<script> alert("เพิ่มข้อมูลไม่สำเร็จ")</script>';
        header('Refresh:0; url= ../form-create.php');
    }
}
mysqli_close($conn);


        
// $sql = "insert into tb_project (title, name, advisor, detail, year, date) 
// values ('" . $_POST['title'] . "', 
//         '" . $_POST['name'] . "', 
//         '" . $_POST['advisor'] . "', 
//         '" . $_POST['detail'] . "', 
//         '" . $_POST['year'] . "', 
//         '" . date("Y-m-d H:i:s") . "')";
