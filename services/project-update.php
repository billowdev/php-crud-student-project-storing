<?php

require_once('../config/connect.php');
if (isset($_POST['submit'])) {
	$title = mysqli_real_escape_string($conn, $_POST['title']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$advisor = mysqli_real_escape_string($conn, $_POST['advisor']);
	$detail = mysqli_real_escape_string($conn, $_POST['detail']);
	$year = mysqli_real_escape_string($conn, $_POST['year']);

	$sql = "UPDATE tb_project SET 
                title = '" . $title . "', 
                name = '" . $name . "', 
                advisor = '" . $advisor . "', 
                detail = '" . $detail . "', 
                year = '" . $year . "', 
                date = '" . date("Y-m-d H:i:s") . "'
                WHERE id = '" . $_POST['id'] . "' ";
	if (mysqli_query($conn, $sql)) {
		echo '<script> alert("แก้ไขข้อมูลเสร็จเรียบร้อย")</script>';
		header('Refresh:0; url= ../');
	} else {
		echo '<script> alert("แก้ไขข้อมูลไม่สำเร็จ")</script>';
		header('Refresh:0; url= ../form-update.php');
	}
}
mysqli_close($conn);
