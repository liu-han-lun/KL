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
				<?php for($i = 0 ; $i < count($text) ; $i++) : ?>
				<table>	
					<caption><?php echo $text[$i]['companyName'] ; ?></caption>				
					<tbody>								
						<tr >
							<td class="title" style = "padding-left: 0rem ;">
								<p1>
									NO.
								</p1>
							</td>
							<td class="title">
								<p1>
									客戶編號
								</p1>
							</td>
							<td class="title">
								<p1>
									品號
								</p1>
							</td>
							<td class="title">
								<p1>
									品名規格
								</p1>
							</td>
							<td class="title">
								<p1>
									單位
								</p1>
							</td>
							<td class="title">
								<p1>
									單價
								</p1>
							</td>
							<td class="title">
								<p1>
									議價
								</p1>
							</td>
							<td class="title">
								<p1>
									備註
								</p1>
							</td>
							<td class="title">
								<p1>
									廠商
								</p1>
							</td>
							<td class="title">
								<p1>
								</p1>
							</td>
							<td class="title">
								<p1>
								</p1>
							</td>
						</tr>
						<?php foreach($text[$i]['query'] as $row) : ?>
								<tr>
									<td>
										<p>
											<?php echo "0".$i."\n" ?>
										</p>
									</td>
									<td>
										<p>
											<?php echo $row['customerId'] ?>
										</p>
									</td>
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
									<td>
										<p>
											<?php echo $row['companyName'] ?>
										</p>
									</td>
									<td>
										<a href="/ProductInfo/edit?id=<?php echo $row['prod_id'] ?>">修改</a>
										<form action="/ProductInfo/delete" method="post" accept-charset="utf-8">
											<input type="hidden" name="id" value="<?php echo $row['prod_id'] ?>">
											<input type="submit" name="delete" value="刪除">				
									    </form>
									</td>			
								</tr>
						<?php endforeach  ?>	
					</tbody>
				</table>
				<?php endfor  ?>				
			</div>
		</div>			
	</section>	
</section>
<?php echo view('Templates/Footer') ; ?>