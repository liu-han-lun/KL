<?php echo view('Templates/Header') ; ?>
<?php echo view('Templates/Content') ; ?>

	<section class = "product-info">
		<div class="work">
			<div class = "work-item">
				<a href="ProductInfo">產品資料</a>			
			</div>
			<div class = "product-info-item">
				<a href="ProductInfo/add">+ 新增產品</a>
			</div>
		</div>
		<div class="product-info-block">
			<div class="product-info-block-form">
				<?php foreach($companyName as $rowA ) : ?>
				<table>	
					<caption><?php echo $rowA['companyName'] ; ?></caption>				
					<tbody>								
						<tr class="title">
							<td>
								<p1>
									NO.
								</p1>
							</td>
							<td>
								<p1>
									客戶編號
								</p1>
							</td>
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
							<td>
								<p1>
									廠商
								</p1>
							</td>

						</tr>
						<?php $i = 1 ?>
						<?php foreach($queryA as $rowB ): ?>
							<?php if($rowB['customerId'] == $rowA['id']): ?>
								<tr>
									<td>
										<p>
											<?php echo "0".$i."\n" ?>
										</p>
									</td>
									<td>
										<p>
											<?php echo $rowB['customerId'] ?>
										</p>
									</td>
									<td>
										<p>
											<?php echo $rowB['productNum'] ?>
										</p>
									</td>
									<td>
										<p>
											<?php echo $rowB['productSpec'] ?>
										</p>
									</td>
									<td>
										<p>
											<?php echo $rowB['unit'] ?>
										</p>
									</td>
									<td>
										<p>
											<?php echo $rowB['unitPrice'] ?>
										</p>
									</td>
									<td>
										<p>
											<?php echo $rowB['sellingPrice'] ?>
										</p>
									</td>
									<td>
										<p>
											<?php echo $rowB['PS'] ?>
										</p>
									</td>
									<td>
										<p>
											<?php echo $rowB['companyName'] ?>
										</p>
									</td>
								</tr>
								<?php $i++ ?>
							<?php endif ; ?>
						<?php endforeach ?>	
					</tbody>
				</table>
				<?php endforeach  ?>				
			</div>
		</div>			
	</section>	
</section>
<?php echo view('Templates/Footer') ; ?>