<head>
	<script src="jquery-3.3.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
</head>
<?php

require_once('../config/connect.php');
if (isset($_GET['id'])) {
	$sql = "DELETE FROM tb_project WHERE id = '" . $_GET['id'] . "' ";
	if (mysqli_query($conn, $sql)) {
		echo '<script> alert("ลบข้อมูลเสร็จเรียบร้อย")</script>';
		header('Refresh:0; url= ../');
	} else {
		echo '<script> alert("ลบข้อมูลไม่สำเร็จ")</script>';
		header('Refresh:0; url= ../');
	}
}
mysqli_close($conn);
