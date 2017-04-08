<form class="form-horizontal">
	<fieldset>
		<!-- Form Name -->
		<center><legend>Login Pemilik Toko</legend></center>
		<center><p>Belum Punya Akun ? Daftar <a href="#" data-toggle="modal" data-target="#at-signup">Disini</a></p></center>
		<?php echo form_open('store/auth/login'); ?>
		<?php
		if (isset($_GET['location'])) {
			echo '<input type="hidden" name="location" value="';
			if (isset($_GET['location'])) {
				echo htmlspecialchars($_GET['location']);
			}
			echo '" />';
		} ?>
		<!-- Jika Error -->
		<?php if ($this->session->flashdata('failed')) { ?>
		<div class="danger">
			<h5><center><?php echo $this->session->flashdata('failed') ?></center></h5>
		</div>
		<?php } ?>

		<!-- Text input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="email">Email :</label>  
			<div class="col-md-4">
				<input name="email" type="email" placeholder="email" class="form-control" oninvalid="setCustomValidity('Masukan email!')" onchange="try{setCustomValidity('')}catch(e){}" required="">

			</div>
		</div>

		<!-- Password input-->
		<div class="form-group">
			<label class="col-md-4 control-label" for="password">Password :</label>
			<div class="col-md-4">
				<input name="password" type="password" placeholder="password" class="form-control" oninvalid="setCustomValidity('Masukan password!')" onchange="try{setCustomValidity('')}catch(e){}" required="">

			</div>
		</div>

		<!-- Button -->
		<div class="form-group">
			<label class="col-md-4 control-label" for="singlebutton"></label>
			<div class="col-md-4">
				<button name="submit" class="btn btn-success">Masuk</button>
			</div>
		</div>
		<?php echo form_close(); ?>

	</fieldset>
</form><br><br><br>