<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head><base href="../../">
		<meta charset="utf-8" />
		<title>Project Management System</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="<?= site_url('assets/media/logos/favicon.png'); ?>" />
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
				<!--begin::Aside-->
				<div id="kt_aside" class="aside bg-info" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '200px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggler">
					<!--begin::Secondary-->
					<div class="aside-secondary d-flex flex-row-fluid bg-white">
						<!--begin::Workspace-->
						<div class="aside-workspace my-7 ps-5 pe-4 ps-lg-10 pe-lg-7" id="kt_aside_wordspace">
							<!--begin::Logo-->
							<div class="aside-logo d-flex justify-content-center" id="kt_aside_logo">
								<a href="index.html">
									<img alt="Logo" src="<?= site_url('assets/media/logos/logo3.png'); ?>" class="mh-50px" />
								</a>
							</div>
                            <hr>
							<!--end::Logo-->
							<!--begin::Aside Menu-->
							<!--begin::Menu-->
							<div class="menu menu-column menu-rounded menu-title-gray-700 menu-state-title-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-bold fs-6" data-kt-menu="true">
								<div class="hover-scroll-y pe-4 pe-lg-5" id="kt_aside_menu_scroll" data-kt-scroll="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-offset="10px">
									<div class="menu-wrapper menu-column menu-fit">
                                        <ul class="menu menu-custom menu-column menu-rounded menu-title-gray-600 menu-icon-muted menu-hover-bg-light-primary menu-active-bg-light-primary fw-bold">
										<li class="py-1">
                                                <span class="opacity-50">Planning</span>
                                            </li>     
										<li class="menu-item py-1">
                                                <a class="menu-link px-3 <?= ($navlink === 'dashboard') ? 'active' : ''; ?>" href="<?= site_url('analyst/index'); ?>" >
                                                    <span class="menu-icon">
                                                    	<i class="bi bi-window"></i>
                                                    </span>
                                                    <span class="menu-title">Dashboard</span>
                                                </a>
                                            </li>
                                            <li class="menu-item py-1">
                                                <a class="menu-link px-3 <?= ($navlink === 'project') ? 'active' : ''; ?>" href="<?= site_url('analyst/project'); ?>">
                                                    <span class="menu-icon">
                                                        <i class="bi bi-grid"></i>
                                                    </span>
                                                    <span class="menu-title">Projects</span>
                                                </a>
                                            </li>

                                            <li class="menu-item py-1">
												<a class="menu-link px-3 <?= ($navlink === 'analyst') ? 'active' : ''; ?>" href="<?= site_url('analyst/analyst'); ?>">
                                                    <span class="menu-icon">
                                                        <i class="bi bi-person-plus"></i>
                                                    </span>
                                                    <span class="menu-title">Analyst</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="menu menu-custom menu-column menu-rounded menu-title-gray-600 menu-icon-muted menu-hover-bg-light-primary menu-active-bg-light-primary fw-bold">
                                            <li class="menu-item py-1">
                                                <span class="opacity-50 text-sm">Progress</span>
                                            </li>    
                                            <li class="menu-item py-1">
												<a class="menu-link px-3 <?= ($navlink === 'schedule') ? 'active' : ''; ?>" href="<?= site_url('analyst/schedule'); ?>">
                                                    <span class="menu-icon">
                                                    <i class="bi bi-window"></i>
                                                    </span>
                                                    <span class="menu-title">Schedule</span>
                                                </a>
                                            </li>
                                            <li class="menu-item py-1">
											<a class="menu-link px-3 <?= ($navlink === 'review') ? 'active' : ''; ?>" href="<?= site_url('analyst/review'); ?>">
                                                    <span class="menu-icon text-xl">
                                                        <!--begin::Svg Icon | path: icons/duotone/Communication/Mail-heart.svg-->
                                                        <i class="bi bi-grid"></i>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-title">Review</span>
                                                </a>
                                            </li>
                                        </ul>
                                        <ul class="menu menu-custom menu-column menu-rounded menu-title-gray-600 menu-icon-muted menu-hover-bg-light-primary menu-active-bg-light-primary fw-bold">
                                            <li class="menu-item py-1">
                                                <span class="opacity-50 text-sm">Report</span>
                                            </li>    
                                            <li class="menu-item py-1">
											<a class="menu-link px-3 <?= ($navlink === 'progress') ? 'active' : ''; ?>" href="<?= site_url('analyst/progress'); ?>">
                                                    <span class="menu-icon">
                                                    <i class="bi bi-window"></i>
                                                    </span>
                                                    <span class="menu-title">Progress Report</span>
                                                </a>
                                            </li>
                                            <li class="menu-item py-1">
											<a class="menu-link px-3 <?= ($navlink === 'report') ? 'active' : ''; ?>" href="<?= site_url('analyst/report'); ?>">
                                                    <span class="menu-icon text-xl">
                                                        <!--begin::Svg Icon | path: icons/duotone/Communication/Mail-heart.svg-->
                                                        <i class="bi bi-person-plus"></i>
                                                        <!--end::Svg Icon-->
                                                    </span>
                                                    <span class="menu-title">Project Report</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
								</div>
							</div>
						</div>
						<!--end::Workspace-->
					</div>
					<!--end::Secondary-->
				</div>
				<!--end::Aside-->
				<!--begin::Wrapper-->
                
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
                        <div id="kt_header" data-kt-sticky="true" data-kt-sticky-name="header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                            <!--begin::Container-->
                            <div class="container d-flex align-items-stretch justify-content-between mt-10">
                                <!--begin::Left-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Mega Menu Toggler-->
                                    <button class="btn btn-icon btn-accent me-3 me-lg-6" id="kt_mega_menu_toggle" data-bs-toggle="modal" data-bs-target="#kt_mega_menu_modal">
                                        <!--begin::Svg Icon | path: icons/duotone/Text/Article.svg-->
                                        <span class="svg-icon svg-icon-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L12.5,10 C13.3284271,10 14,10.6715729 14,11.5 C14,12.3284271 13.3284271,13 12.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Mega Menu Toggler-->
                                    <!--begin::Title-->
                                    <h3 class="d-flex align-items-center text-dark fw-bolder my-1 fs-5 fs-lg-2">
                                        <span class="d-none d-lg-inline pr-2 fs-3 ">Digital Marketing </span>&nbsp
										<span class="text-muted mt-2 fw-bold fs-6">- Project Management System</span>
                                    </h3>
                                    <!--end::Title-->
                                </div>
                                <!--end::Left-->
                                <!--begin::Right-->
                                <div class="d-flex align-items-center">
                                    <!--begin::Search-->
									
                                    <!--end::Search-->
                                    
                                    <!--begin::User-->
                                    <div class="ms-1 ms-lg-6">
                                        <!--begin::Toggle-->
                                        <div class="btn btn-icon btn-sm btn-active-bg-accent" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" id="kt_header_user_menu_toggle">
                                            <!--begin::Svg Icon | path: icons/duotone/General/User.svg-->
                                            <span class="svg-icon svg-icon-1 svg-icon-dark">
                                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <polygon points="0 0 24 0 24 24 0 24" />
                                                        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                                        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                                                    </g>
                                                </svg>
                                            </span>
                                            <!--end::Svg Icon-->
                                        </div>
                                        <!--begin::Menu-->
                                        <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold w-200px" data-kt-menu="true">
                                            <div class="menu-content fw-bold d-flex align-items-center bgi-no-repeat bgi-position-y-top rounded-top" style="background-image:url('<?= site_url('assets/media//misc/dropdown-header-bg.jpg');?>')">
                                                <div class="symbol symbol-45px mx-5 py-5">
                                                    <span class="symbol-label bg-primary align-items-end">
                                                        <img alt="Logo" src="<?= site_url('assets/media/svg/avatars/001-boy.svg'); ?>" class="mh-35px" />
                                                    </span>
                                                </div>
                                                <div class="">
                                                    <span class="text-white fw-bolder fs-4">Hello World!</span>
                                                </div>
                                            </div>
                                            <!--begin::Row-->
                                            <div class="row row-cols g-0">
                                                <a href="<?= site_url('analyst/logout'); ?>" class="col text-center py-10 btn btn-active-color-primary rounded-0">
                                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Sign-out.svg-->
                                                    <span class="svg-icon svg-icon-3x me-n1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                                <rect x="0" y="0" width="24" height="24" />
                                                                <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z" fill="#000000" fill-rule="nonzero" opacity="0.5" transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000)" />
                                                                <rect fill="#000000" opacity="0.5" transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000)" x="13" y="6" width="2" height="12" rx="1" />
                                                                <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000)" />
                                                            </g>
                                                        </svg>
                                                    </span>
                                                    <!--end::Svg Icon-->
                                                    <span class="fw-bolder fs-6 d-block pt-3">Sign Out</span>
                                                </a>
                                            </div>
                                            <!--end::Row-->
                                        </div>
                                        <!--end::Menu-->
                                    </div>
                                    <!--end::User-->

                                    <!--end::Notifications-->
                                    <!--begin::Aside Toggler-->
                                    <button class="btn btn-icon btn-sm btn-active-bg-accent d-lg-none ms-1 ms-lg-6" id="kt_aside_toggler">
                                        <!--begin::Svg Icon | path: icons/duotone/Text/Menu.svg-->
                                        <span class="svg-icon svg-icon-1 svg-icon-dark">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <rect fill="#000000" x="4" y="5" width="16" height="3" rx="1.5" />
                                                    <path d="M5.5,15 L18.5,15 C19.3284271,15 20,15.6715729 20,16.5 C20,17.3284271 19.3284271,18 18.5,18 L5.5,18 C4.67157288,18 4,17.3284271 4,16.5 C4,15.6715729 4.67157288,15 5.5,15 Z M5.5,10 L18.5,10 C19.3284271,10 20,10.6715729 20,11.5 C20,12.3284271 19.3284271,13 18.5,13 L5.5,13 C4.67157288,13 4,12.3284271 4,11.5 C4,10.6715729 4.67157288,10 5.5,10 Z" fill="#000000" opacity="0.3" />
                                                </g>
                                            </svg>
                                        </span>
                                        <!--end::Svg Icon-->
                                    </button>
                                    <!--end::Aside Toggler-->
                                    <!--begin::Sidebar Toggler-->
                                    <!--end::Sidebar Toggler-->
                                </div>
                                <!--end::Right-->
                            <!--end::Container-->
                        </div>
                    </div>
					<!--end::Header-->
					<!--begin::Main-->
                    <?php $this->load->view($content); ?>
					<!--end::Main-->
					<!--begin::Footer-->
					
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
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		
		<!--begin::Mega Menu-->
		
		<!--end::Mega Menu-->
		<!--begin::Drawers-->

		<!--begin::Exolore drawer-->
		
		<!--end::Exolore drawer-->
		<!--end::Drawers-->
		<!--begin::Scrolltop-->
		
		<!--end::Scrolltop-->
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