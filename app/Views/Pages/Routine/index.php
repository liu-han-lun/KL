<?php echo view('Templates/Header') ?>
<?php echo view('Templates/Content') ?>

	<section class = "routine">
		<div class="work">
			<div class = "work-item">
				<form action="Madeorder" method="post" accept-charset="utf-8">
					<input type="submit" name="action" value="製令單">
				</form>				
			</div>
			<div class = "work-item">
				<form action="Materials" method="post" accept-charset="utf-8">
					<input type="submit" name="action" value="入廠紀錄">
				</form>				
			</div>
			<div class = "work-item">
				<form action="TransferDoc" method="post" accept-charset="utf-8">
					<input type="submit" name="action" value="移轉單">
				</form>				
			</div>
		</div>
		
	</section>	
</section>

<?php echo view('Templates/Footer') ?>