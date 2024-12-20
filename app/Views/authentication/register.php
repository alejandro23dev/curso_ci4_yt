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
				<div class="w-100 fv-plugins-bootstrap5 fv-plugins-framework">
					<div class="text-center mb-11">
						<h1 class="text-dark fw-bolder mb-3">Registrar Nueva Cuenta</h1>
					</div>
					<div class="separator separator-content my-14">
						<span class="w-125px text-gray-500 fw-semibold fs-7">Credenciales</span>
					</div>
					<div class="fv-row mb-8 fv-plugins-icon-container">
						<input type="text" id="txt-username" placeholder="Nombre de Usuario" autocomplete="off" class="form-control required bg-transparent">
					</div>
					<div class="fv-row mb-8 fv-plugins-icon-container">
						<input type="text" id="txt-email" placeholder="Correo Electrónico" autocomplete="off" class="form-control required bg-transparent">
					</div>
					<div class="fv-row mb-3 fv-plugins-icon-container">
						<input type="password" id="txt-password" placeholder="Contraseña" autocomplete="off" class="form-control required bg-transparent">
					</div>
					<div class="d-grid mb-10">
						<button type="button" id="btn-save" class="btn btn-primary">
							<span class="indicator-label">Crear Cuenta</span>

							<span class="indicator-progress">Por favor espere...
								<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>

						</button>
					</div>
					<div class="text-gray-500 text-center fw-semibold fs-6">Ya tienes una cuenta?
						<a href="<?php echo base_url('/'); ?>" class="link-primary">Iniciar Sesión</a>
					</div>
				</div>
			</div>
			<div class="d-flex flex-stack px-lg-10">
				<div class="me-0">
					<button class="btn btn-flex btn-link btn-color-gray-700 btn-active-color-primary rotate fs-base" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-start" data-kt-menu-offset="0px, 0px">
						<img data-kt-element="current-lang-flag" class="w-20px h-20px rounded me-3" src="<?php echo base_url('public/assets/media/flags/spain.svg'); ?>" alt="">
						<span data-kt-element="current-lang-name" class="me-1">Español</span>
						<i class="ki-duotone ki-down fs-5 text-muted rotate-180 m-0"></i>
					</button>
					<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px py-4 fs-7" data-kt-menu="true" id="kt_auth_lang_menu">
						<div class="menu-item px-3">
							<a href="#" class="menu-link d-flex px-5" data-kt-lang="en">
								<span class="symbol symbol-20px me-4">
									<img data-kt-element="lang-flag" class="rounded-1" src="<?php echo base_url('public/assets/media/flags/united-states.svg'); ?>" alt="">
								</span>
								<span data-kt-element="lang-name">English</span>
							</a>
						</div>
						<div class="menu-item px-3">
							<a href="#" class="menu-link d-flex px-5" data-kt-lang="es">
								<span class="symbol symbol-20px me-4">
									<img data-kt-element="lang-flag" class="rounded-1" src="<?php echo base_url('public/assets/media/flags/spain.svg'); ?>" alt="">
								</span>
								<span data-kt-element="lang-name">Español</span>
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
<svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
	<defs id="SvgjsDefs1002"></defs>
	<polyline id="SvgjsPolyline1003" points="0,0"></polyline>
	<path id="SvgjsPath1004" d="M0 0 "></path>
</svg>


<script>
	$(document).ready(function() {
		$('#btn-save').on('click', function() {
			let required = checkRequiredValues();

			if (required == 0) {

			} else
				showAlert('Rellene la información');
		});

		function checkRequiredValues() {
			let value = '';
			let response = 0;
			$('.required').each(function() {
				value = $(this).val();

				if (value == '') {
					response = 1;
					$(this).addClass('is-invalid');
				}

			});

			return response;
		}

		$('.required').on('change input change', function() {
			$(this).removeClass('is-invalid');
		});
	});
</script>