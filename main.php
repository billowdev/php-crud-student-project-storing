<?php
require('./config/connect.php');
$sql = "select * from tb_project";
$result = mysqli_query($conn, $sql);
?>

<div class="row py-5 g-3">
	<section class="col-12 pb-3 text-center">
		<h4>โครงงาน</h4>
		<h6>มีโครงงานทั้งหมด <?php echo mysqli_num_rows($result) ?> โครงงาน</h6>

		<?php if (mysqli_num_rows($result) > 0) : ?>

			<body>
				<div class="py-5">
					<div class="container">
						<div class="row hidden-md-up">
							<?php while ($row = mysqli_fetch_assoc($result)) : ?>
								<div class="col-md-4 mb-3">
									<div class="card">
										<div class="card-block">
											<img src="./assets/images/document.png" class="card-img-top" alt="document" style="width: 50%">
											<h5 class="card-title mt-3 ms-3"> ชื่อโครงงาน: <?php echo $row['title'] ?> </h5>
											<h6 class="ms-3 mt-2 card-subtitle text">ผู้จัดทำ: <?php echo $row['name'] ?> </h6>
											<h6 class="ms-3 mt-2 card-subtitle text">อาจารย์ที่ปรึกษา: <?php echo $row['advisor'] ?> </h6>
											<p class="ms-3 mt-2 card-text p-y-1">ปีการศึกษา: <?php echo $row['year'] ?></p>
											<p class="ms-3 mt-2 card-text p-y-1">วันที่เผยแพร่: <?php echo $row['date'] ?></p>
											<div class="d-grid mt-2">
												<button type="button" class="text-white btn btn-info fw-bold" data-bs-toggle="modal" data-bs-target="#my-modal<?php echo $row['id'] ?>">
													บทคัดย่อ
												</button>
											</div>
										</div>
									</div>
								</div>
								<br />
								<div class="modal fade" id="my-modal<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">รายละเอียด</h5>
												<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
											</div>
											<div class="modal-body">
												<p>ชื่อโครงงาน: <?php echo $row['title'] ?></p>
												<!-- <p>ชื่อผู้จัดทำ: <?php echo $row['name'] ?></p>
												<p>อาจารย์ที่ปรึกษา: <?php echo $row['advisor'] ?></p>
												<p>ปีการศึกษา: <?php echo $row['year'] ?></p> -->
												<p>บทคัดย่อ: <?php echo $row['detail'] ?></p>
												<!-- <p>วันที่แก้ไข: <?php echo $row['date'] ?></p> -->
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-warning" data-bs-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>


							<?php endwhile; ?>

							<!-- Button trigger modal -->


						</div>
					</div>
				</div>
			</body>
		<?php endif; ?>
</div>


</section>



</div>