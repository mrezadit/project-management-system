    <!--begin::toolbar-->
	<!--begin::toolbar-->
    <!--end::toolbar-->
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
                                        <span class="fw-bolder text-dark fs-3 me-2">Update Staff Data</span>
                                        <span class="text-muted mt-2 fw-bold fs-6"> - Form to update data</span>
                                    </h3>
                                <form action="<?= site_url('admin/updatestaff'); ?>" method="post">
                                    <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                                        <a href="<?= site_url('admin/staff'); ?>" class="btn btn-light mx-5">Back</a>
                                        <button type="submit" class="btn btn-success">Save</button>
                                    </div>
                                </div>
                                <hr class="mb-10">
                                <div class="d-flex">
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-10">
                                                <label class="form-label">Staff Name</label>
                                                <input type="hidden" name="id_staff" value="<?= $detail['id_staff']; ?>">
                                                <input type="text" class="form-control" name="staff_name" value="<?= $detail['staff_name']?>" placeholder="Staff Name" required/>
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label">Select Team</label>
                                                <select name="id_team" class="form-select form-select-solid bg-white" data-control="select2" data-placeholder="Select an option" required>
                                                        <option disabled selected>Select</option>
                                                    <?php if (!empty($team)) : $i = 1; foreach ($team as $value) : ?>
                                                        <option value="<?= $value->id_team; ?>" <?= $detail['id_team'] === $value->id_team ? 'selected' : ''; ?>><?= $value->division; ?></option> 
                                                    <?php endforeach; endif; ?>
                                                </select>                                     
                                            </div>
                                        </div>
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-10">
                                                <label class="form-label">Phone</label>
                                                <input type="number" class="form-control" maxlength="13" name="phone" value="<?= $detail['phone']?>" placeholder="Phone" required/>
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" value="<?= $detail['email']?>" placeholder="Email" required />
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