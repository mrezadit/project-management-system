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
                                        <span class="fw-bolder text-dark fs-3 me-2">Update Project Data</span>
                                        <span class="text-muted mt-2 fw-bold fs-6"> - Form to update data</span>
                                    </h3>
                                <form action="<?= site_url('admin/updateproject'); ?>" method="post">
                                    <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                                        <a href="<?= site_url('admin/project/project'); ?>" class="btn btn-light mx-5">Back</a>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                                <hr class="mb-10">
                                <div class="d-flex">
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-10">
                                                <label class="form-label">Project Name</label>
                                                <input type="text" class="form-control" name="project_name" value="<?= $detail['project_name']?>" placeholder="Project Name" required/>
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label">Select Client</label>
                                                <select name="id_client" id="client" class="form-select form-select-solid bg-white" data-control="select2" data-placeholder="Select an option" required>
                                                        <option disabled selected>Select</option>
                                                    <?php if (!empty($client)) : $i = 1; foreach ($client as $value) : ?>
                                                        <option value="<?= $value->id_client; ?>" <?= $detail['id_client'] === $value->id_client ? 'selected' : ''; ?>><?= $value->client_name; ?></option> 
                                                    <?php endforeach; endif; ?>
                                                </select>                                     
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label">Project Description</label>
                                                <textarea type="textarea" class="form-control h-150px" name="description" placeholder="Description" required><?= $detail['description']; ?></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-10">
                                                <label for="" class="form-label">Start Date</label>
                                                <input type="date" name="start_date" class="form-control" value="<?= $detail['start_date']?>" placeholder="Pick a date" id="kt_datepicker_1" required/>
                                            </div>
                                            <div class="mb-10">
                                                <label for="" class="form-label">End Date</label>
                                                <input type="date" name="end_date" class="form-control" value="<?= $detail['end_date']?>" placeholder="Pick a date" id="kt_datepicker_2" required/>
                                            </div>
                                            <div class="mb-10">
                                                <label for="" class="form-label">Project Priode</label>
                                                <select class="form-select" name="project_priod" aria-label="Select example" required>
                                                    <option value="<?= $detail['project_priod']?>"><?= $detail['project_priod']?></option>
                                                    <option value="Once">Once</option>
                                                    <option value="Daily">Daily</option>
                                                    <option value="Weekly">Weekly</option>
                                                    <option value="Monthly">Monthly</option>
                                                </select>
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
                                            <input type="text" name="attachment" class="form-control" value="<?= $detail['attachment']?>" placeholder="Link Attachment" required>
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
    $("#kt_datepicker_1").flatpickr();
    $("#kt_datepicker_2").flatpickr();
    </script>
