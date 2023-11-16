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

        <!--<link rel="stylesheet" href="<?= site_url('assets/plugins/line-awesome/css/line-awesome.css'); ?>" />-->
		<!--end::Fonts-->
		<!--begin::Page Vendor Stylesheets(used by this page)-->
		<link href="<?= site_url('assets/plugins/custom/prismjs/prismjs.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<!--end::Page Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?= site_url('assets/plugins/global/plugins.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<link href="<?= site_url('assets/css/style.bundle.css'); ?>" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
	</head>

	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed toolbar-enabled aside-enabled aside-fixed aside-primary-disabled aside-secondary-enabled">
		<!--begin::Main-->
		<!--begin::Root-->
        <div class="container w-lg-1000px">
            
            <div class="modal-body">
            <!--begin::Shop Goods-->

            <div class="py-10 pt-20">

                <!--begin::Row-->
                <div class="row g-5">
                    <div class="col-sm-6">
                        <div class="row g-5">
                            <div class="col-sm-6">
                                <div class="card overlay min-h-200px mb-5 ">
                                    <div class="card-body d-flex flex-column p-0">
                                        <div class="overlay-wrapper flex-grow-1 bgi-no-repeat bgi-size-cover bgi-position-center card-rounded" style="background-image:url('<?= site_url('assets/media/stock/600x400/img-57.jpg'); ?>')"></div>
                                    </div>
                                </div>
                                <div class="card overlay min-h-200px mb-5 ">
                                    <div class="card-body d-flex flex-column p-0">
                                        <div class="overlay-wrapper flex-grow-1 bgi-no-repeat bgi-size-cover bgi-position-center card-rounded" style="background-image:url('<?= site_url('assets/media/stock/600x400/img-4.jpg'); ?>')"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="card card-stretch overlay mb-5 min-h-250px">
                                    <div class="card-body d-flex flex-column p-0">
                                        <div class="overlay-wrapper flex-grow-1 bgi-no-repeat bgi-size-cover bgi-position-center card-rounded" style="background-image:url('<?= site_url('assets/media/stock/600x400/img-67.jpg'); ?>')"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">


                        <div class="card card-stretch overlay mb-5  min-h-150px">
                            <div class="card-body d-flex flex-column p-0">
                                
                                <div class="p-10">
                                    
                        <h1 class="fw-bolder mb-8">
                            <span class="fw-bolder text-dark">Login</span> 
                            <span class="text-muted mt-2 fw-bold fs-6">- Project Management System</span>
                        </h1>
                        <hr>
                                    <form action="<?= site_url('login/'); ?>" method="post">
                                        <div class="mb-8 mt-8">
                                            <label for="exampleFormControlInput1" class="required form-label">Username</label>
                                            <input type="text" name="username" class="form-control form-control-solid" placeholder="Username" />
                                        </div>
                                        <div class="mb-15">
                                            <label for="exampleFormControlInput1" class="required form-label">Password</label>
                                            <input type="password" name="password" class="form-control form-control-solid" placeholder="Password" />
                                        </div>
                                        <div class="d-flex justify-content-end">
                                            <button type="post" class="btn btn-success">Login</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Shop Goods-->
        </div>
    </div>
		<!--end::Root-->

		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?= site_url('assets/plugins/global/plugins.bundle.js'); ?>"></script>
		<script src="<?= site_url('assets/js/scripts.bundle.js'); ?>"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Vendors Javascript(used by this page)-->
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