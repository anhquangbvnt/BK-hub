
<div class="container exchange-money">
	<h3>Đổi Tiền</h3>
	<div class="row">				
		<div >
			<!-- <table class="table table-hover"> -->
				<table class="table table-bordered" >
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

