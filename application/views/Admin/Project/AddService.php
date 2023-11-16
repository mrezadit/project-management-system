<div class="d-flex flex-column flex-column-fluid">
	<!--begin::Content-->
	<div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
		<!--begin::Container-->
		<div class="container ">
			<!--begin::Row-->
			<div class="row g-0 g-xl-5 g-xxl-8 d-flex justify-content-center">
				<div class="col-xl-10">
					<!--begin::Table Widget 1-->
					<div class="card card-stretch mb-5 mb-xxl-8 ">
						<!--begin::Header-->
						<div class="card-header border-0 pt-5">
							<h3 class="card-title align-items-start flex-column">
								<span class="card-label fw-bolder text-dark fs-3">Form to Add Service</span>
							</h3>
							<div class="card-toolbar">
								<ul class="nav nav-pills nav-pills-sm nav-light">
									<li class="nav-item">
									<a href="<?= site_url('admin/project/project'); ?>" class="btn btn-light mx-5">Back</a>
									</li>
									<li class="nav-item">
									<form action="<?= site_url('admin/addservice'); ?>" method="post">
									<button type="submit" class="btn btn-success">Save</button>
									</li>
								</ul>
							</div>
						</div>
						<div class="px-10 mb-5">
							<hr/>
						</div>
						<!--end::Header-->
						<!--begin::Body-->
						<div class="px-15">
						<div class="d-flex">
								<div class="col px-5">
									<div class="mb-10">
										<label class="form-label">Service Name</label>
										<input type="text" class="form-control" name="service_name" placeholder="Service Name" required/>
									</div>
									<div class="mb-10">
										<label class="form-label">Service Description</label>
										<textarea type="textarea" class="form-control h-150px" name="description" placeholder="Description" required></textarea>
									</div>
								</div>
								
						</div>
							</form>
						</div>
					</div>
					<!--end::Table Widget 1-->
				</div>
			</div>
			<!--end::Row-->
		</div>
		<!--end::Container-->
	</div>
	<!--end::Content-->
</div>