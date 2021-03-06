<?php echo view('Templates/Header') ; ?>
<?php echo view('Templates/Content') ; ?>	
	<section class = "customer-info">
		<div class="back">
			<div class = "back-item">
				<a href="/CustomerInfo" class="back-button">回上頁</a>			
			</div>
		</div>
		<div class="customer-item">
			<form action="/CustomerInfo/add" method="post" accept-charset="utf-8">
				<div class="table-block">					
					<table>
						<caption></caption>
						<thead>
							<tr>
								<th>
									<h1>公司名稱</h1>									
								</th>
								<th>
									<input type="text" name="companyName" class="input-text" required="required">
								</th>
							</tr>
							<tr>
								<th>
									<h1>電話號碼</h1>
								</th>								
								<th>
									<input type="text" name="tel" class="input-text" required="required">
								</th>
							</tr>
							<tr>
								<th>
									<h1>傳真號碼</h1>
								</th>
								<th>
									<input type="text" name="fax" class="input-text" required="required">
								</th>
							</tr>
							<tr>
								<th>
									<h1>公司地址</h1>
								</th>
								<th>
									<input type="text" name="address" class="input-text" required="required">
								</th>
							</tr>
							<tr>
								<th>
									<h1>統一編號</h1>
								</th>
								<th>
									<input type="text" name="guiNum" class="input-text" required="required">
								</th>
							</tr>
							</tr>
						</thead>					
					</table>
					<input type="submit" name="action" value="送出" class="submit-button">
				</div>
			</form>
						
		</div>			
	</section>	
</section>
<?php echo view('Templates/Footer') ; ?>