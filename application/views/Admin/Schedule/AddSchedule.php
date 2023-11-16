<!--begin::toolbar-->
<!--begin::toolbar-->
<!--end::toolbar-->
<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
<script src="assets/plugins/global/plugins.bundle.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

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
                                        <span class="fw-bolder text-dark fs-3 me-2">Create Schedule Data</span>
                                        <span class="text-muted mt-2 fw-bold fs-6"> - Form to create a new data</span>
                                    </h3>
                                <form action="<?= site_url('admin/addschedule'); ?>" method="post">
                                    <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                                        <a href="<?= site_url('admin/schedule/schedule'); ?>" class="btn btn-light mx-5">Back</a>
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
                                                <label class="form-label">Select Campaign</label>
                                                <select name="id_analyst" id="campaign" class="form-select form-select-solid bg-white" data-control="select2" data-placeholder="Select an option" required>
                                                        <option disabled selected>Select</option>
                                                    <?php if (!empty($analyst)) : $i = 1; foreach ($analyst as $value) : ?>
                                                        <option value="<?= $value->id_analyst; ?>"><?= date("d-m-Y", strtotime($value->an_enddate)); ?> - <?= $value->campaign; ?> - <?= $value->division; ?></option> 
                                                    <?php endforeach; endif; ?>
                                                </select>                                     
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label">Select Staff</label>
                                                <select name="id_staff" id="staff" class="form-select form-select-solid bg-white" data-control="select2" data-placeholder="Select an option" required>
                                                        <option disabled selected>Select</option>
                                                </select>                                     
                                            </div>
                                            <div class="mb-10">
                                                <label for="" class="form-label">Start Date</label>
                                                <input type="date" name="start_time" class="form-control" placeholder="Pick a date" id="kt_datepicker_2" required/>
                                            </div>
                                            <div class="mb-10">
                                                <label for="" class="form-label">End Date</label>
                                                <input type="date" name="end_time" class="form-control" placeholder="Pick a date" id="" required/>
                                            </div>
                                        </div>
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-10">
                                                <label for="" class="form-label">Task</label>
                                                <input type="text" name="task_name" class="form-control" placeholder="Task" id="" required/>
                                            </div>
                                            <div class="mb-10">
                                                <label class="form-label">Task Description</label>
                                                <textarea type="textarea" class="form-control h-150px" name="description" placeholder="Description" required></textarea>
                                            </div>
                                            <div class="mb-10">
                                            <input type="hidden" name="id_project" value="<?= $detail['id_project']; ?>">
                                            <input type="hidden" name="t_status" value="1">
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
$("#kt_datepicker_2").flatpickr();
</script>

<script>
$(document).ready(function(){ // Ketika halaman sudah siap (sudah selesai di load)
    // Kita sembunyikan dulu untuk loadingnya

    $("#campaign").change(function(){ // Ketika user mengganti atau memilih data provinsi
		
        $.ajax({
            type: "POST", // Method pengiriman data bisa dengan GET atau POST
            url: "<?php echo base_url("index.php/admin/listStaff"); ?>", // Isi dengan url/path file php yang dituju
            data: {id_analyst : $("#campaign").val()}, // data yang akan dikirim ke file yang dituju
            dataType: "json",
            beforeSend: function(e) {
                if(e && e.overrideMimeType) {
                    e.overrideMimeType("application/json;charset=UTF-8");
                }
            },

            success: function(response){ 
                $("#staff").html(response.list_staff).show();
            },

            error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
                alert(xhr.status + "\n" + xhr.responseText + "\n" + thrownError); // Munculkan alert error
            }
        });
    });
});

</script>
