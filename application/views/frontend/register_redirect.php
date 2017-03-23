<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!--  Custom Style -->
	<link href="<?php echo media_url() ?>/css/styles.css" rel="stylesheet" />
	<!--  Jquery Core Script -->
	<script src="<?php echo media_url() ?>/js/scripts.js"></script>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="callout callout-info">
					<center>
						<h2>Halaman ini akan di redirect dalam waktu <span id="timeLeft"></span></h1>
							<h1>Silakan buka email anda lalu konfirmasi akun anda</h1>
						</center>
					</div>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			var count = 10;
			var timer = setInterval(function() {
				if (--count < 1) {
					clearInterval(timer);
					window.location.href = "<?php echo site_url() ?>";
				}
				$("#timeLeft").text(count);
			}, 1000);
		</script>
	</body>
	</html>