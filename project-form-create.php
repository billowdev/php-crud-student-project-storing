<?php require_once("./header.php") ?>

<body>
	<div class="container mt-5">
		<div class="row justify-content-center">
			<div class="col-md-10">
				<h1 class="mb-5 text-center"> เพิ่มข้อมูลโครงงาน </h1>

				<form class="row gy-4" action="./services/project-create.php" method="POST">
					<div class="col-md-12">
						<label for="title" class="form-label">ชื่อโครงงาน</label>
						<input type="text" class="form-control" id="title" name="title" placeholder="ชื่อโครงงาน" required>
					</div>
					<div class="col-md-12">
						<label for="name" class="form-label">ชื่อผู้จัดทำ</label>
						<input type="text" class="form-control" id="name" name="name" placeholder="ชื่อผู้จัดทำ" required>
					</div>
					<div class="col-md-12">
						<label for="advisor" class="form-label">ชื่ออาจารย์ที่ปรึกษา</label>
						<input type="text" class="form-control" id="advisor" name="advisor" placeholder="ชื่ออาจารย์ที่ปรึกษา" required>
					</div>
					<div class="col-md-12">
						<label for="detail" class="form-label">บทคัดย่อ</label>
						<textarea type="text" class="form-control" id="detail" name="detail" rows="5" placeholder="บทคัดย่อ" required></textarea>
					</div>
					<div class="col-md-6">
						<label for="year" class="form-label">ปีการศึกษา</label>
						<input type="text" class="form-control" id="year" name="year" placeholder="ปีการศึกษา" required>
					</div>

					<div class="col-12">
						<button type="submit" name="submit" class="btn btn-primary d-block mx-auto">เพิ่มข้อมูล</button>
					</div>
				</form>
				<a href="./">ย้อนกลับ</a>
			</div>
		</div>
	</div>
</body>
<?php require_once("./footer.php") ?>