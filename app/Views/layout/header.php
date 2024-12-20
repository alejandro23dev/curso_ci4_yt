<html lang="en" data-bs-theme="light">

<head>
	<title>Web Genius</title>
	<meta charset="utf-8">
	<link rel="shortcut icon" href="<?php echo base_url('public/assets/media/logos/favicon.ico'); ?>">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700">
	<link href="<?php echo base_url('public/assets/plugins/global/plugins.bundle.css'); ?>" rel="stylesheet" type="text/css">
	<link href="<?php echo base_url('public/assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css">

	<script src="<?php echo base_url('public/assets/plugins/global/plugins.bundle.js'); ?>"></script>
	<script src="<?php echo base_url('public/assets/js/scripts.bundle.js'); ?>"></script>
	<script src="<?php echo base_url('public/assets/jquery/dist/jquery.min.js'); ?>"></script>
</head>

<script>
	function showAlert(text) {
		var toastEl = document.getElementById('alert');
		var toast = new bootstrap.Toast(toastEl, {
			autohide: true,
			delay: 3000
		});

		$('#alert-msg').html(text);

		toast.show();
	};

	function showErrorAlert() {
		var toastEl = document.getElementById('alert');
		var toast = new bootstrap.Toast(toastEl, {
			autohide: true,
			delay: 3000
		});

		$('#alert-msg').html('Ha ocurrido un error');

		toast.show();
	};
</script>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
	<div class="toast" id="alert" role="alert" aria-live="assertive" aria-atomic="true" style="position: absolute; top: 20px; right: 20px;">
		<div class="toast-header">
			<strong class="me-auto">Notificación</strong>
		</div>
		<div id="alert-msg" class="toast-body">
		</div>
	</div>
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<?php echo view($page); ?>
	</div>
</body>

</html>