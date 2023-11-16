<div class="d-flex flex-column flex-column-fluid">
						<!--begin::Content-->
						<div class="content fs-6 d-flex flex-column-fluid" id="kt_content">
							<!--begin::Container-->
							<div class="container">
								<!--begin::Row-->
								<div class="row g-0 g-xl-5 g-xxl-8">
									<div class="col-xl-12">
										<!--begin::Table Widget 1-->
										<div class="card card-stretch mb-5 mb-xxl-8">
											<!--begin::Header-->
											<div class="card-header border-0 pt-5">
												<h3 class="card-title align-items-start flex-column">
													<span class="card-label fw-bolder text-dark fs-3">Project Details</span>
                                                    <span class="text-muted mt-2 fw-bold fs-6"> Note : Add service to this project data</span>
												</h3>
											</div>
                                            <div class="px-10 mb-5">
                                            <hr/> 
                                            <h3 class="card-title align-items-start flex-column px-5 pt-5">
                                                <span class="card-label fw-bolder text-dark fs-2"><?= $detail['project_name']?></span>
                                                <span class="text-muted mt-2 fw-bold fs-6">
                                                <?php if ( $detail['p_status'] == 1) :?>
                                                    <span rel="tooltip" title="detail" class="badge badge-light">Pending</span>
                                                <?php elseif ( $detail['p_status'] == 2) : ?>
                                                    <span class="badge badge-light-info">Analyzed</span>
                                                <?php elseif (  $detail['p_status'] == 3) : ?>
                                                    <span class="badge badge-light-success">Ongoing</span>
                                                <?php else : ?>
                                                    <span class="badge badge-light-info">Finished</span>
                                                </td>
                                                <?php endif ;?>
                                            </h3>
                                            <div class="mb-3 pt-3 px-5">
                                                <span class="card-label fs-6"><b>Description : </b><br><?= $detail['description']?></span>
                                            </div>
                                            </div>
                                            <div class="d-flex px-10 mb-5">
                                                <div class="col-sm-6 px-5">

                                                    <div class="mb-3">
                                                        <span class="card-label fs-6"><b>Priode : </b><?= $detail['project_priod']?></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <span class="card-label fs-6"><b>Start Date : </b><?= date("d-m-Y", strtotime($detail['start_date'])); ?></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <span class="card-label fs-6"><b>End Date : </b><?= date("d-m-Y", strtotime($detail['end_date'])); ?> </span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <span class="card-label fs-6"><b>Attachment : </b> </span> 
                                                        <a href="<?= $detail['attachment']?>" rel="tooltip" title="Detail" target="_blank"class="badge badge-success">
                                                        <i class="bi bi-link text-white"></i> Link </a>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 px-5">
                                                    <h3 class="card-title align-items-start flex-column mb-5">
                                                        <span class="card-label fw-bolder text-dark fs-5">Customer Details</span>
                                                    </h3>
                                                    <div class="mb-3">
                                                        <span class="card-label fs-6"><?= $detail['client_name']?> - <?= $detail['company']?></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <span class="card-label fs-6"><?= $detail['phone']?> - <?= $detail['email']?></span>
                                                    </div>
                                                    <div class="mb-3">
                                                        <span class="card-label fs-6"><?= $detail['address']?></span>
                                                    </div>
                                                </div>
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
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php if (!empty($proserv)) : $i = 1; foreach (array_reverse($proserv) as $value) : ?>
                                                        <tr>
                                                            <td><?= $i++; ?></td>
                                                            <td><?= $value->service_name; ?></td>
                                                            <td><?= $value->description; ?></td>
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