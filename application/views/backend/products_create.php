<?php $this->load->view('partials/head.php'); ?>
<?php $this->load->view('partials/nav_back.php'); ?>
<div class="contents">
	<div class="pb-5" style="margin-top:70px ;">
		<h4 class="fw-bolder m-2">編輯商品


			<!-- <button type="button" class="btn btn-primary me-4 ms-4" href="<?= base_url('backend/products/create') ?>">新增商品</button> -->
		</h4>

		<form action="<?php echo base_url('backend/products/save') ?>" method="post" enctype="multipart/form-data">

			<div class="py-4 px-3 mb-4 border border-1 rounded-3">

				<section class="row">
					<main class="col-lg-8 col-12">
					<div class="input-group mb-3">
							<span class="input-group-text">圖片</span>
							<td class="pb-2" style="text-align:right"><input class="form-control" type="file" name="img" id=""></td>
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text">標題</span>
							<input type="text" class="form-control" name="name" value="" style="background-color: white;">
						</div>
						<div class="input-group mb-3">
							<span class="input-group-text">介紹</span>
							<textarea style="background-color: white;" name="text" class="form-control" id="exampleFormControlTextarea1" rows="2" style="height: 10vh;"></textarea>
						</div>

					</main>
				</section>
			</div>

			<div class="text-center">
<input  class="btn btn-primary" type="submit" value="確定新增">
  <input  class="btn btn-secondary" type="reset" value="重置">
</div>















			<div class="d-flex justify-content-start mt-3">

				<!-- <input type="hidden" name="table" value="<?= $do; ?>"> -->
			</div>
		</form>
	</div>
</div>
<script>
	$(".show-hide").on('click', function() {
		let id = $(this).data('id')
		switch ($(this).text()) {
			case "顯示":
				$(this).text("隱藏")
				$(this).css("background-color", "black")
				break;
			case "隱藏":
				$(this).text("顯示"),
					$(this).css("background-color", "#0d6efd")
				break;
		}
		$.post("api/show.php", {
			'table': 'front',
			id
		}, () => {})
	})

	// 刪除
	$(".del-btn").on("click", function() {
		let id = $(this).data('id')
		if (confirm("是否確定刪除?")) {
			$.post("api/del.php", {
				'table': 'front',
				id
			}, () => {
				location.reload();
			})
		} else {}
	})
</script>