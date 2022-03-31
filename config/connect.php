<?php 
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "web_pro_db";
  $conn = mysqli_connect($servername, $username, $password, $dbname);

  if (mysqli_connect_errno()) {
    echo "ไม่สามารถเชื่อมต่อฐานข้อมูล MySQL ได้: " . mysqli_connect_error();
    echo ("<script>console.log(`connect failed`)</script>");
    exit();
  }else{
    echo ("<script>console.log(`connect success`)</script>");
  }
  date_default_timezone_set('Asia/Bangkok');
