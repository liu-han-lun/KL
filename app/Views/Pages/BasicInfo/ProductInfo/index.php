<?php echo view('Templates/Header') ; ?>
<?php echo view('Templates/Content') ; ?>
	<section class = "product-info">
		<div class="work">
			<div class = "work-item">
				<a href="ProductInfo">產品資料</a>			
			</div>
			<div class = "product-info-item">
				<a href="">+ 新增產品</a>
			</div>
		</div>
		<div class="product-info-block">
			<div class="product-info-block-form">
				<table>	
					<caption>福隆</caption>				
					<tbody>								
						<tr class="title">
							<td>
								<p1>
									品號
								</p1>
							</td>
							<td>
								<p1>
									品名規格
								</p1>
							</td>
							<td>
								<p1>
									單位
								</p1>
							</td>
							<td>
								<p1>
									單價
								</p1>
							</td>
							<td>
								<p1>
									議價
								</p1>
							</td>
							<td>
								<p1>
									備註
								</p1>
							</td>
						</tr>
						<?php $i = 1 ?>
						<?php foreach($queryA as $row): ?>
							<tr>
								<td>
									<p>
										<?php echo $row['productNum'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['productSpec'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['unit'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['unitPrice'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['sellingPrice'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['PS'] ?>
									</p>
								</td>
							</tr>
						<?php $i++ ?>
						<?php endforeach ?>	
					</tbody>
				</table>
				<table>	
					<caption>萬得富</caption>				
					<tbody>								
						<tr class="title">
							<td>
								<p1>
									品號
								</p1>
							</td>
							<td>
								<p1>
									品名規格
								</p1>
							</td>
							<td>
								<p1>
									單位
								</p1>
							</td>
							<td>
								<p1>
									單價
								</p1>
							</td>
							<td>
								<p1>
									議價
								</p1>
							</td>
							<td>
								<p1>
									備註
								</p1>
							</td>
						</tr>
						<?php $i = 1 ?>
						<?php foreach($queryA as $row): ?>
							<tr>
								<td>
									<p>
										<?php echo $row['productNum'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['productSpec'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['unit'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['unitPrice'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['sellingPrice'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['PS'] ?>
									</p>
								</td>
							</tr>
						<?php $i++ ?>
						<?php endforeach ?>	
					</tbody>
				</table>
			</div>
		</div>			
	</section>	
</section>
<?php echo view('Templates/Footer') ; ?>