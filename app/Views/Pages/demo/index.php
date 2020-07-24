<?php echo view('Templates/Header') ?>
<?php echo view('Templates/Content') ?>

<section class = "customer-info">
		<div class="work">
			<div class = "work-item">廠商資料DEMO</div>
			<div class="customer-info-item">
                <a href="demo/add">+ 新增客戶</a>
			</div>
		</div>
		<div class="customer-info-block">
			<div class="customer-info-block-form">
				<table>
					<tbody>
						<tr>
							<td class="title">
								<h1>
									編號
								</h1>
							</td>
							<td class="title">
								<h1>
									電腦編號
								</h1>
							</td>
							<td class="title">
								<h1>
									公司名稱
								</h1>
							</td>
							<td class="title">
								<h1>
									電話號碼
								</h1>
							</td>
							<td class="title">
								<h1>
									傳真號碼
								</h1>
							</td>
							<td class="title">
								<h1>
									公司地址
								</h1>
							</td>
							<td class="title">
								<h1>
									統一編號
								</h1>
							</td>
							<td class="title">
								<h1>
								</h1>
							</td>
							<td class="title">
								<h1>
								</h1>
							</td>
						</tr>
						<?php $i = 1 ;
							foreach ( $query as $row ) :?>
							<tr>
								<td>
									<p>
										<?php echo "0".$i."\n" ?> (id: <?php echo $row['id'] ?>)
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['systemNum'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['companyName'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['tel'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['fax'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['address'] ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row['guiNum'] ?>
									</p>
								</td>
								<td>
									<a href="/demo/edit?id=<?php echo $row['id'] ?>">修改</a>
									<form action="/demo/delete" method="post" accept-charset="utf-8">
										<input type="hidden" name="id" value="<?php echo $row['id'] ?>">
										<input type="submit" name="delete" value="刪除">				
									</form>
								</td>
							</tr>
							<?php $i++ ; 
							endforeach ?>	
					</tbody>
				</table>
			</div>
		</div>			
	</section>	
</section>

<?php echo view('Templates/Footer') ?>