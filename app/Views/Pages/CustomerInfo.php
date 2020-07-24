	<section class = "customer-info">
		<div class="work">
			<div class = "work-item">
				<form action="CustomerInfo" method="post" accept-charset="utf-8">
					<input type="submit" name="action" value="廠商資料">
				</form>				
			</div>
			<div class = "customer-info-item">
				<form action="NewCustomer" method="post" accept-charset="utf-8">
					<input type="submit" name="newCustomer" value = "+ 新增客戶">
				</form>
			</div>
		</div>
		<div class="customer-info-block">
			<form action="" method="post" accept-charset="utf-8">
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
						</tr>
						<?php $i = 1 ;
							foreach ( $query as $row ) :?>
							<tr>
								<td>
									<p>
										<?php echo "0".$i."\n" ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row->systemNum ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row->companyName ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row->tel ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row->fax ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row->address ?>
									</p>
								</td>
								<td>
									<p>
										<?php echo $row->guiNum ?>
									</p>
								</td>
							</tr>
							<?php $i++ ; 
							endforeach ?>	
					</tbody>
				</table>
			</form>			
		</div>			
	</section>	
</section>