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
													<span class="card-label fw-bolder text-dark fs-3">Services List</span>
												</h3>
												<div class="card-toolbar">
												<div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
													<a href="<?= site_url('admin/project/addservice'); ?>" class="btn btn-success"><i class="bi bi-plus-lg"></i>Service</a>
												</div>
												</div>
											</div>
                                            <div class="px-10 mb-5">
                                                <hr/>
                                            </div>
											<!--end::Header-->
											<!--begin::Body-->
                                            <div class="px-15">
                                                <table id="datatable" class="table table-row-bordered gy-5">
                                                    <thead>
                                                        <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                                            <th>No</th>
                                                            <th>Service</th>
                                                            <th>Description</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php if (!empty($service)) : $i = 1; foreach (array_reverse($service) as $value) : ?>
                                                        <tr>
                                                            <td><?= $i++; ?></td>
                                                            <td><?= $value->service_name; ?></td>
                                                            <td><?= $value->description; ?></td>
                                                            <td>
                                                            <a href="<?= site_url('admin/project/'.$value->id_service.'/updateservice'); ?>" rel="tooltip" class="badge badge-light-info">
															<i class="bi bi-pencil-square"></i> Edit </a>
                                                            </td>
                                                        </tr>
                                                    <?php endforeach; endif; ?>
                                                    </tbody>
                                                </table>
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