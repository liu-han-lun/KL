<?php echo view('Templates/Header') ; ?>
<?php echo view('Templates/Content') ; ?>	
	<section class = "product-info">
		<div class="back">
			<div class = "back-item">
				<a href="/ProductInfo" class="back-button">回上頁</a>			
			</div>
		</div>
		<div class="product-item">
			<form action="/ProductInfo/edit" method="post" accept-charset="utf-8">
				<div class="table-block">					
					<table>
						<caption></caption>
						<tbody>
							<tr>
								<td>
									<p>
										廠商
									</p>
								</td>
								<td>
									<select name="customerId">
										<option value="<?php echo $product['customerId'] ?>">
											<h1><?php echo $product['companyName'] ?> -使用中</h1>
										</option>
										<option value="<?php echo $product['customerId'] ?>">
											
										</option>
										<?php foreach( $query as $row ): ?>									
											<option value="<?php echo $row['cust_id'] ?>">
												<?php echo $row['companyName'] ?>
											</option>
										<?php endforeach ?>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<p>
										品號
									</p>
								</td>
								<td>
									<input type="text" name="productNum" required="required" class="input-text" value="<?php echo $product['productNum'] ?>">
								</td>
							</tr>
							<tr>
								<td>
									<p>
										品名規格
									</p>
								</td>
								<td>
									<input type="text" name="productSpec" class="input-text" required="required" value="<?php echo $product['productSpec'] ?>">
								</td>
							</tr>
							<tr>
								<td>
									<p>
										單位
									</p>
								</td>
								<td>
									<select name="unit">
											<option value="件">件</option>
									</select>
								</td>
							</tr>
							<tr>
								<td>
									<p>
										單價
									</p>
								</td>
								<td>
									<input type="text" name="unitPrice" class="input-text" required="required" value="<?php echo $product['unitPrice'] ?>">
								</td>
							</tr>
							<tr>
								<td>
									<p>
										議價
									</p>
								</td>
								<td>
									<input type="text" name="sellingPrice" class="input-text" required="required" value="<?php echo $product['sellingPrice'] ?>">
								</td>
							</tr>
							<tr>
								<td>
									<p>
										備註
									</p>
								</td>
								<td>
									<input type="text" name="PS" class="input-text" required="required" value="<?php echo $product['PS'] ?>">
								</td>
							</tr>
						</tbody>					
					</table>
					<input type="hidden" name="id" value="<?php echo $product['prod_id'] ?>">
					<input type="submit" name="action" value="送出" class="submit-button">
				</div>
			</form>
						
		</div>			
	</section>	
</section>
<?php echo view('Templates/Footer') ; ?>