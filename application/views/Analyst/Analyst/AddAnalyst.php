<!--begin::toolbar-->
<!--begin::toolbar-->
<!--end::toolbar-->
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
<script src="assets/plugins/global/plugins.bundle.js"></script>
<!--begin::Content-->
    <div class="content d-flex flex-column-fluid" id="kt_content">
        <!--begin::Container-->
        <div class="container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card Body-->
                <div class="card-body p-5 pt-0 pb-0">
                    <!--begin::Section-->
                    <div class="pb-10">
                        <div class="py-5">
                            <div class="rounded border-dashed p-10">
                                <div class="d-flex flex-stack flex-wrap flex-sm-nowrap">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="fw-bolder text-dark fs-3 me-2">Create Analyst Data</span>
                                        <span class="text-muted mt-2 fw-bold fs-6"> - Form to create a new data</span>
                                    </h3>
                                <form action="<?= site_url('analyst/addanalyst'); ?>" method="post">
                                    <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                                        <a href="<?= site_url('analyst/analyst/analyst'); ?>" class="btn btn-light mx-5">Back</a>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                                <hr class="mb-5">

                                <div class="d-flex mb-10 mt-10">
                                    <div class="col-sm-6 px-5">
                                        <h3 class="card-title align-items-start flex-column ">
                                            <span class="card-label fw-bolder text-dark fs-2"><?= $detail['project_name']?></span>
                                            <span class="text-muted mt-2 fw-bold fs-6">
                                            <?php if ( $detail['p_status'] == 1) :?>
                                                <span rel="tooltip" title="detail" class="badge badge-light-success mx-3">new</span>
                                            <?php else : ?>
                                                <span class="text-xs font-weight-bold text-info"></span>
                                            <?php endif ;?></span>
                                        </h3>
                                        <div class=" ">
                                            <span class="card-label fs-6"><b>Description : </b><br><?= $detail['description']?></span>
                                        </div>
                                    </div>
                                    <div class="col-sm px-5">
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
                                    <div class="col-sm px-5">
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
                                <div class="d-flex">
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-10">
                                                <label class="form-label">Select Service</label>
                                                <select name="id_proserv" class="form-select form-select-solid bg-white" data-control="select2" data-placeholder="Select an option">
                                                        <option disabled selected>Select</option>
                                                    <?php if (!empty($proserv)) : $i = 1; foreach ($proserv as $value) : ?>
                                                        <option value="<?= $value->id_proserv; ?>"><?= $value->service_name; ?></option> 
                                                    <?php endforeach; endif; ?>
                                                </select>                                     
                                            </div>
                                            <div class="mb-10">
                                                <label for="" class="form-label">Campaign</label>
                                                <input type="text" name="campaign" class="form-control" placeholder="Campaign Name" required />
                                            </div>
                                            <div class="mb-10">
                                                <label for="" class="form-label">Audience</label>
                                                <input type="text" name="audience" class="form-control" placeholder="Audience" required/>
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label">Analyst Description</label>
                                                <textarea type="textarea" class="form-control h-150px" name="an_description" placeholder="Description" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-10">
                                                <label class="form-label">Select Team</label>
                                                <select name="id_team" class="form-select form-select-solid bg-white" data-control="select2" data-placeholder="Select an option" required>
                                                        <option disabled selected>Select</option>
                                                    <?php if (!empty($team)) : $i = 1; foreach ($team as $value) : ?>
                                                        <option value="<?= $value->id_team; ?>"><?= $value->division; ?></option> 
                                                    <?php endforeach; endif; ?>
                                                </select>                                     
                                            </div>
                                            <div class="mb-10">
                                                <label for="" class="form-label">End Date</label>
                                                <input type="date" name="an_enddate" class="form-control" placeholder="Pick a date" id="an_enddate" required/>
                                            </div>
                                            <div class="mb-10">
                                                <label for="" class="form-label">Service Priod</label>
                                                <input type="text" name="periode" class="form-control" placeholder="Service Priod" required/>
                                            </div>
                                            <div class="mb-10">
                                            <label for="" class="form-label">Attachment File</label>
                                            <div class="input-group">
                                                <span class="input-group-text" id="basic-addon1">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-code" viewBox="0 0 16 16">
                                                    <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"></path>
                                                    <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"></path>
                                                    </svg>
                                                </span>
                                            <input type="text" name="an_attachment" class="form-control" placeholder="Link Attachment" required>
                                            <input type="hidden" name="id_project" value="<?= $detail['id_project']; ?>">
                                            </div>
                                        </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    
                    <!--end::Section-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
<!--end::Content-->
<script>
$("#an_enddate").flatpickr();
</script>
