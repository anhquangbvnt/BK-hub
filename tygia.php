<?php
	
	$sql = "SELECT id, vnd, usd, eur FROM bang_gia";
	$result = $conn->query($sql);

	?>
	<!-- Show tỷ giá ngoại tệ từ bang_gia trong DB "doi-tien" -->
	<div class="container">
		<div class="">
			<h3>Tỷ Giá Ngoại tệ</h3>
			<table class="table table-bordered">
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