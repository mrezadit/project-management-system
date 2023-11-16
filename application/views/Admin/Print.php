<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../">
		<meta charset="utf-8" />
		<title>Project Management System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="<?= site_url('assets/media/logos/favicon.svg'); ?>" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?= site_url('assets/plugins/custom/datatables/datatables.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?= site_url('assets/plugins/custom/prismjs/prismjs.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= site_url('assets/plugins/global/plugins.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?= site_url('assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<!--begin::Jquery-->
		<script src="<?= site_url('assets/plugins/custom/jquery/jquery.min.js'); ?>"></script>
		<!--end::Jquery-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-enabled aside-fixed aside-primary-disabled aside-secondary-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Wrapper-->
					<!--end::Header-->
					<!--begin::Main-->
                    <?php $this->load->view($content); ?>
					<!--end::Main-->
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<footer class="d-flex text-end">
			<div class="container-fluid pb-10">
				<div class="copyright text-muted">
					Made with 
					<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-fire" viewBox="0 0 16 16">
					<path d="M8 16c3.314 0 6-2 6-5.5 0-1.5-.5-4-2.5-6 .25 1.5-1.25 2-1.25 2C11 4 9 .5 6 0c.357 2 .5 4-2 6-1.25 1-2 2.729-2 4.5C2 14 4.686 16 8 16Zm0-1c-1.657 0-3-1-3-2.75 0-.75.25-2 1.25-3C6.125 10 7 10.5 7 10.5c-.375-1.25.5-3.25 2-3.5-.179 1-.25 2 1 3 .625.5 1 1.364 1 2.25C11 14 9.657 15 8 15Z"/>
					</svg>
					| Project Management System by <a href="https://github.com/mrezadit"><b>mrezadit </b></a>
				</div>
			</div>
		</footer>
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?= site_url('assets/plugins/global/plugins.bundle.js'); ?>"></script>
		<script src="<?= site_url('assets/js/scripts.bundle.js'); ?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
		<script src="<?= site_url('assets/plugins/custom/datatables/datatables.bundle.js'); ?>"></script>
		<script src="<?= site_url('assets/plugins/custom/prismjs/prismjs.bundle.js'); ?>"></script>
		<!--end::Page Vendors Javascript-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?= site_url('assets/js/custom/documentation/documentation.js'); ?>"></script>
		<script src="<?= site_url('assets/js/custom/modals/users-search.js'); ?>"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>