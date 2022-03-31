<?php
require_once('./header.php');
require_once('./config/connect.php');
$sql = "SELECT * FROM tb_project";
$result = mysqli_query($conn, $sql);
?>
<?php include_once('./header.php') ?>
<div class="container mt-5">
	<div class="row justify-content-center">
		<div class="col-md-10">
			<h1 class="mb-5 text-center"> ข้อมูลโครงงาน </h1>
			<div class="text-end">
				<a href="project-form-create.php" class="btn btn-info">เพิ่มโครงงาน</a>
			</div>
			<span class="float-start">ข้อมูลโครงงานจำนวน <?php echo mysqli_num_rows($result) ?> รายการ </span>
		</div>
		<div class="col-md-12">

			<div class="table-responsive">
				<?php if (mysqli_num_rows($result) > 0) : ?>

					<table class="table table-bordered">
						<thead>
							<tr class="text-center text-light bg-dark">
								<th style="width: 3rem;">id</th>
								<th style="width: 13rem;">ชื่อโครงงาน</th>
								<th style="width: 13em;">ชื่อผู้จัดทำ</th>
								<th style="width: 13em;">อาจารย์ที่ปรึกษา</th>
								<th>ปีการศึกษา</th>
								<th style="width: 20em;">บทคัดย่อ</th>
							</tr>
						</thead>

						<tbody>

							<?php while ($row = mysqli_fetch_assoc($result)) : ?>
								<tr class="text-center">
									<td> <?php echo $row['id'] ?> </td>
									<td> <?php echo $row['title'] ?> </td>
									<td> <?php echo $row['name'] ?> </td>
									<td> <?php echo $row['advisor'] ?> </td>
									<td> <?php echo $row['year'] ?> </td>
									<td> <?php echo $row['detail'] ?> </td>
									<td>
										<div class="btn-group">
											<button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['id'] ?>" style="width: 105px;"> รายละเอียด </button>
											<a href="project-form-update.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"> แก้ไข </a>
											<a href="./services/project-delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger"> ลบ </a>

										</div>
									</td>
								</tr>

								<div class="modal fade" id="my-modal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<p>ชื่อโครงงาน: <?php echo $row['title'] ?></p>
												<p>ชื่อผู้จัดทำ: <?php echo $row['name'] ?></p>
												<p>อาจารย์ที่ปรึกษา: <?php echo $row['advisor'] ?></p>
												<p>ปีการศึกษา: <?php echo $row['year'] ?></p>
												<p>บทคัดย่อ: <?php echo $row['detail'] ?></p>

												<p>วันที่แก้ไข: <?php echo $row['date'] ?></p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						</tbody>
					</table>
				<?php
				else :
					echo "<p class='mt-5'>ไม่มีข้อมูล</p>";
				endif;
				?>
			</div>
		</div>
	</div>
</div>

<?php include_once('./footer.php') ?>