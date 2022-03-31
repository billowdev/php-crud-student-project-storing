<?php
require_once('./config/connect.php');
require_once('./header.php');
if (!isset($_GET['id'])) {
	header("location: ./");
	exit();
}

$sql = "SELECT * FROM tb_project WHERE id = '" . $_GET['id'] . "' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<h1 class="mb-5"> แก้ไขข้อมูลโครงงาน </h1>

				<form class="row gy-4" action="./services/project-update.php" method="POST">
					<div class="col-md-12">
						<label for="title" class="form-label">ชื่อโครงงาน</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="ชื่อโครงงาน" value="<?php echo $row['name'] ?>" required>
					</div>
					<div class="col-md-12">
						<label for="name" class="form-label">ชื่อผู้จัดทำ</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="ชื่อผู้จัดทำ" value="<?php echo $row['name'] ?>" required>
					</div>
					<div class="col-md-12">
						<label for="advisor" class="form-label">ชื่ออาจารย์ที่ปรึกษา</label>
						<input type="text" class="form-control" id="advisor" name="advisor" placeholder="ชื่ออาจารย์ที่ปรึกษา" value="<?php echo $row['name'] ?>" required>
					</div>
					<div class="col-md-12">
						<label for="detail" class="form-label">บทคัดย่อ</label>
						<textarea type="text" class="form-control" id="detail" name="detail" rows="5" placeholder="บทคัดย่อ" required><?php echo $row['detail'] ?></textarea>
					</div>
					<div class="col-md-6">
						<label for="year" class="form-label">ปีการศึกษา</label>
						<input type="text" class="form-control" id="year" name="year" placeholder="ปีการศึกษา" value="<?php echo $row['name'] ?>" required>
					</div>

					<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
					<div class="col-12">
						<button type="submit" name="submit" class="btn btn-primary d-block mx-auto">บันทึกการเปลี่ยนแปลง</button>
					</div>
				</form>
				<a href="./">ย้อนกลับ</a>
			</div>
		</div>
	</div>

	<?php

	require_once('./footer.php');

	?>