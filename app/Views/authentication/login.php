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
</head>

<body id="kt_body" class="app-blank bgi-size-cover bgi-attachment-fixed bgi-position-center bgi-no-repeat">
	<script>
		var defaultThemeMode = "light";
		var themeMode;
		if (document.documentElement) {
			if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
				themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
			} else {
				if (localStorage.getItem("data-bs-theme") !== null) {
					themeMode = localStorage.getItem("data-bs-theme");
				} else {
					themeMode = defaultThemeMode;
				}
			}
			if (themeMode === "system") {
				themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
			}
			document.documentElement.setAttribute("data-bs-theme", themeMode);
		}
	</script>
	<div class="d-flex flex-column flex-root" id="kt_app_root">
		<style>
			body {
				background-image: url('<?php echo base_url('public/assets/media/auth/bg4.jpg'); ?>');
			}

			[data-bs-theme="dark"] body {
				background-image: url('<?php echo base_url('public/assets/media/auth/bg4-dark.jpg'); ?>');
			}
		</style>
		<div class="d-flex flex-column flex-column-fluid flex-lg-row">
			<div class="d-flex flex-center w-lg-50 pt-15 pt-lg-0 px-10">
				<div class="d-flex flex-center flex-lg-start flex-column">
					<div class="mb-7">
						<img alt="Logo" src="<?php echo base_url('public/assets/media/logos/custom-3.svg'); ?>">
					</div>
					<h2 class="text-white fw-normal m-0">Curso de Web Genius</h2>
				</div>
			</div>
			<div class="d-flex flex-column-fluid flex-lg-row-auto justify-content-center justify-content-lg-end p-12 p-lg-20">
				<div class="bg-body d-flex flex-column align-items-stretch flex-center rounded-4 w-md-600px p-20">
					<div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
						<form class="form w-100 fv-plugins-bootstrap5 fv-plugins-framework">
							<div class="text-center mb-11">
								<h1 class="text-dark fw-bolder mb-3">Inicio de Sesión</h1>
								<div class="text-gray-500 fw-semibold fs-6">Inicie Sesion con nosotros</div>
							</div>
							<div class="row g-3 mb-9">
								<div class="col-12">
									<a href="#" class="btn btn-flex btn-outline btn-text-gray-700 btn-active-color-primary bg-state-light flex-center text-nowrap w-100">
										<img alt="Logo" src="<?php echo base_url('public/assets/media/svg/brand-logos/google-icon.svg'); ?>" class="h-15px me-3">Iniciar Sesión con Google
									</a>
								</div>
							</div>
							<div class="separator separator-content my-14">
								<span class="w-125px text-gray-500 fw-semibold fs-7">Correo Electrónico</span>
							</div>
							<div class="fv-row mb-8 fv-plugins-icon-container">
								<input type="text" id="txt-email" placeholder="Correo Electrónico" autocomplete="off" class="form-control bg-transparent">
								<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
							</div>
							<div class="fv-row mb-3 fv-plugins-icon-container">
								<input type="password" id="txt-password" placeholder="Contraseña" autocomplete="off" class="form-control bg-transparent">
								<div class="fv-plugins-message-container fv-plugins-message-container--enabled invalid-feedback"></div>
							</div>
							<div class="d-flex flex-stack flex-wrap gap-3 fs-base fw-semibold mb-8">
								<div></div>
								<a href="#" class="link-primary">Olvidé mi contraseña?</a>
							</div>
							<div class="d-grid mb-10">
								<button type="submit" id="kt_sign_in_submit" class="btn btn-primary">
									<span class="indicator-label">Verificar Credenciales</span>

									<span class="indicator-progress">Por favor espere...
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>

								</button>
							</div>
							<div class="text-gray-500 text-center fw-semibold fs-6">No tienes una cuenta?
								<a href="#" class="link-primary">Registrate</a>
							</div>
						</form>
					</div>
					<div class="d-flex flex-stack px-lg-10">
						<div class="me-0">
							<button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
								<img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="<?php echo base_url('public/assets/media/flags/spain.svg'); ?>" alt="">
								<span data-kt-element="current-lang-name" class="me-1">Spanish</span>
								<i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
							</button>
							<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="English">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="<?php echo base_url('public/assets/media/flags/united-states.svg'); ?>" alt="">
										</span>
										<span data-kt-element="lang-name">English</span>
									</a>
								</div>
								<div class="menu-item px-3">
									<a href="#" class="menu-link d-flex px-5" data-kt-lang="Spanish">
										<span class="symbol symbol-20px me-4">
											<img data-kt-element="lang-flag" class="rounded-1" src="<?php echo base_url('public/assets/media/flags/spain.svg'); ?>" alt="">
										</span>
										<span data-kt-element="lang-name">Spanish</span>
									</a>
								</div>
							</div>
						</div>
						<div class="d-flex fw-semibold text-primary fs-base gap-5">
							<a href="#" target="_blank">Términos</a>
							<a href="#" target="_blank">Planes</a>
							<a href="#" target="_blank">Contactenos</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
		<defs id="SvgjsDefs1002"></defs>
		<polyline id="SvgjsPolyline1003" points="0,0"></polyline>
		<path id="SvgjsPath1004" d="M0 0 "></path>
	</svg>
</body>

</html>