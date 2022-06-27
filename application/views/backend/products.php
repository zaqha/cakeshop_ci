<?php $this->load->view('partials/head.php'); ?>
<?php $this->load->view('partials/nav_back.php'); ?>
<div class="contents">
	<div class="pb-5" style="margin-top:70px ;">
		<h4 class="fw-bolder m-2">編輯商品
			<!-- <button type="button" class="btn btn-primary me-4 ms-4" href="<?= base_url('backend/products/create') ?>">新增商品</button> -->
		
				<a class="btn btn-primary me-4 ms-4" id="btn_add" href="<?= base_url('backend/products/create') ?>">
					➕<span>新增</span>
				</a>
		</h4>
		<form method="post" action="api\edit.php">
			<?php
			foreach ($produts as $key => $value) {
			?>
				<div class="py-4 px-3 mb-4 border border-1 rounded-3">
					<div class="badge rounded-pill bg-secondary mb-3">no.<?= $key + 1 ?></div>
					<br>

					<section class="row">
						<main class="col-lg-4 col-12">
						
							<img class="mb-4" src="<?php echo base_url('assets/img/'.$value['img'])?>" style="width: 100%;height: 66.6%">
						</main>

						<main class="col-lg-8 col-12">
							<div class="input-group mb-3">
								<span class="input-group-text">標題</span>
								<input type="text" class="form-control" name="name[]" value="<?= $value['name']; ?>" readonly style="background-color: white;">

								<!-- <span class="input-group-text">使用語言</span>
							<input type="text" class="form-control" name="lang[]" value="<?= $value['lang']; ?>" readonly style="background-color: white;"> -->
							</div>
							<!-- <div class="input-group mb-3">
							<span class="input-group-text">連結</span>
							<input type="text" class="form-control" name="href[]" value="<?= $value['href']; ?>" readonly style="background-color: white;">
						</div> -->
							<div class="input-group mb-3">
								<span class="input-group-text">介紹</span>
								<textarea readonly style="background-color: white;" name="text" class="form-control" id="exampleFormControlTextarea1" rows="2" style="height: 10vh;"><?= $value['intro'] ?></textarea>
							</div>
							<div class="d-flex justify-content-center mt-4">
								<input class="btn btn-dark mx-1" type="button" value="更換圖片" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/front_update.php?id=<?= $value['id']; ?>&#39;)">
								<button class="show-hide btn btn-secondary mx-1" style="background:<?= ($value['status'] == 1) ? '#0d6efd' : 'black'; ?>" data-id="<?= $value['id']; ?>"><?= ($value['status'] == 1) ? '顯示' : '隱藏'; ?></button>
								<input class="btn btn-dark mx-1" type="button" value="編輯" onclick="op(&#39;#cover&#39;,&#39;#cvr&#39;,&#39;modal/front_edit.php?id=<?= $value['id']; ?>&#39;)">
								<button class='del-btn btn btn-secondary mx-1' data-id="<?= $value['id']; ?>">刪除</button>
							</div>
				</div>

			<?php
			}
			?>

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