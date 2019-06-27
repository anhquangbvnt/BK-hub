<!DOCTYPE html>
<html>
<head>
	<title>
		Money Exchange	
	</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<style type="text/css">
	.footer {
		position: absolute;
		bottom: 0;
		width: 100%;
		background: #D6DBDF;
	}
	.exchange-money {
		margin: 40px auto;
	}
</style>
<body>
	<?php include('layouts/navbar.php') ?>
	<?php include('connection.php') ?>
	<?php
	
	$sql = "SELECT id, vnd, usd, eur FROM bang_gia";
	$result = $conn->query($sql);

	?>
	<!-- Show tỷ giá ngoại tệ từ bang_gia trong DB "doi-tien" -->
	<div class="container">
		<div class="">
			<h3>Tỷ Giá Ngoại tệ</h3>
			<table class="table table-hover">
				<tr>				
					<td>VNĐ</td>
					<td>USD</td>
					<td>EUR</td>
				</tr>
				<?php
				while($row = $result->fetch_assoc()) {

					?>
					<tr>					
						<td>
							<?php
							echo $row['vnd'];
							?>
						</td>
						<td>
							<?php
							echo $row['usd'];
							?>
						</td>
						<td> 
							<?php
							echo $row['eur'];
							?>
						</td>
						<?php
					}
					?>
				</table>		
			</div>
			<div class="container exchange-money">
				<h3>Đổi Tiền</h3>
				<div class="row">				
					<div >
						<!-- <table class="table table-hover"> -->
							<table class="cconverter">
								<tr>
									<td>
										<label for="">Đơn vị Tiền Muốn Đổi</label>
										<select class="custom-select" id="inputGroupSelect01">
											<option selected>Đơn Vị Nguồn</option>
											<option value="1">VND</option>
											<option value="2">USD</option>
											<option value="3">EUR</option>
										</select>
									</td>
									<td>
										<label for="">Đơn vị Tiền Sau Đổi</label>
										<select class="custom-select" id="inputGroupSelect01">
											<option selected>Đơn vị Đích</option>
											<option value="1">VND</option>
											<option value="2">USD</option>
											<option value="3">EUR</option>
										</select>
									</td>   		
								</tr>
								<tr>
									<td>
										<label for="">Nhập số tiền</label>
										<input type="number" class="form-control" id="input_money" aria-describedby="basic-addon3">
									</td>
									<td>
										<label for="">Nhập số tiền</label>
										<input type="number" class="form-control" id="input_money" aria-describedby="basic-addon3">
									</td>
								</tr>
							</div>
						</table>

						
					</div>
					
					
					<div class="col-12 col-sm-6 col-lg-2">
						<a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Đổi Tiền</a>
					</div>
				</div>
				<div class="HIS">
					<?php
					
					$sqlhis = "SELECT id, amount, start_code, end_code, ty_gia, created_at FROM his";
					$history = $conn->query($sqlhis);

					?>
					<h3>Lịch Sử Đổi Tiền</h3>
					<table class="table table-hover">
						<tr>				
							<td>STT</td>
							<td>Số Lượng</td>
							<td>Mã Tiền Nhập</td>
							<td>Mã Tiền Đổi</td>
							<td>Tỷ Giá</td>
							<td>Ngày Đổi</td>
						</tr>
						<?php
						while($rowhis = $history->fetch_assoc()) {

							?>
							<tr>					
								<td>
									<?php
									echo $rowhis['id'];
									?>
								</td>
								<td>
									<?php
									echo $rowhis['amount'];
									?>
								</td>
								<td> 
									<?php
									echo $rowhis['start_code'];
									?>
								</td>
								<td> 
									<?php
									echo $rowhis['end_code'];
									?>
								</td>
								<td> 
									<?php
									echo $rowhis['ty_gia'];
									?>
								</td>
								<td> 
									<?php
									echo $rowhis['created_at'];
									?>
								</td>
								<?php
							}
							?>
						</table>		
					</div>
				</div>
				<!-- History of exchange money -->
				
				<?php include('layouts/footer.php') ?>
				<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
				<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
				<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

			</body>
			</html>