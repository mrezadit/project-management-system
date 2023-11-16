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
                            <div class="rounded border p-10">
                                <div class="d-flex flex-stack flex-wrap flex-sm-nowrap">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="fw-bolder text-dark fs-3 me-2">Submit Task Report</span>
                                        <span class="text-muted mt-2 fw-bold fs-6"> - Form to create a new data</span>
                                    </h3>
                                <form action="<?= site_url('admin/addtask'); ?>" method="post">
                                    <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                                        <a href="<?= site_url('admin/task/task'); ?>" class="btn btn-light mx-5">Back</a>
                                        <button type="submit" class="btn btn-success">Submit</button>
                                    </div>
                                </div>
                                <hr class="mb-5">

                                <div class="d-flex mb-5 mt-10">
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
                                            <span class="card-label fs-6"><b>Start Project : </b><?= date("d-m-Y", strtotime($detail['start_date'])); ?></span>
                                        </div>
                                        <div class="mb-3">
                                            <span class="card-label fs-6"><b>End Project : </b><?= date("d-m-Y", strtotime($detail['end_date'])); ?> </span>
                                        </div>
                                    </div>
                                    <div class="col-sm px-5">
                                    <h3 class="card-title align-items-start flex-column mb-3">
                                                        <span class="card-label fw-bolder text-dark fs-5">Client</span>
                                                    </h3>
                                        <div class="mb-3">
                                            <span class="card-label fs-6"><?= $detail['client_name']?> - <?= $detail['company']?></span>
                                        </div>
                                        <div class="mb-3">
                                            <span class="card-label fs-6"><?= $detail['address']?></span>
                                        </div>
                                    </div>
                                </div>
                                <hr class="mb-10">

                                <div class="d-flex">
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-10">
                                                <div class="card-title align-items-start flex-column ">
                                                    <span class="card-label fw-bolder text-dark fs-4"><b class="card-label fw-bolder text-dark fs-6">Service : </b><br><?= $detail2['service_name']?></span>
                                                    <span class="text-muted mt-2 fw-bold fs-6">
                                                    <?php if ( $detail['p_status'] == 1) :?>
                                                        <span rel="tooltip" title="detail" class="badge badge-light-success mx-3">new</span>
                                                    <?php else : ?>
                                                        <span class="text-xs font-weight-bold text-info"></span>
                                                    <?php endif ;?></span>
                                                </div>   
                                                <div class="card-title align-items-start flex-column ">
                                                    <span class="card-label fw-bolder text-dark fs-4"><b class="card-label fw-bolder text-dark fs-6">Campaign : </b><br><?= $detail2['campaign']?></span>
                                                    <span class="text-muted mt-2 fw-bold fs-6">
                                                    <?php if ( $detail['p_status'] == 1) :?>
                                                        <span rel="tooltip" title="detail" class="badge badge-light-success mx-3">new</span>
                                                    <?php else : ?>
                                                        <span class="text-xs font-weight-bold text-info"></span>
                                                    <?php endif ;?></span>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="card-label fs-6"><b>Audience : </b><?=$detail2['audience']; ?> </span>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="card-label fs-6"><b>Target : </b><br><?= $detail2['an_description']?></span>
                                                </div>     
                                                <div class="mb-3">
                                                    <span class="card-label fs-6"><b>Priode : </b><?= $detail2['periode']?></span>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="card-label fs-6"><b>End Campaign : </b><?= date("d-m-Y", strtotime($detail2['an_enddate'])); ?> </span>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="card-label fs-6"><b>Analyst Attachment : </b> </span> 
                                                    <a href="<?= $detail2['an_attachment']?>" rel="tooltip" title="Detail" target="_blank"class="badge badge-success">
                                                    <i class="bi bi-link text-white"></i> Link </a>
                                                </div>                                 
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-5">
                                            <?php if ( $detail2['t_status'] == 0) :?>
                                                <span class="card-label fs-6"><b>Review<b class="card-label fs-6 text-danger"> * </b>: </b></br><?= $detail2['review']; ?> </span>
                                            <?php else : ?>
                                                <span class="text-xs font-weight-bold text-info"></span>
                                            <?php endif ;?></span>
                                            </div>
                                            <div class="mb-10">
                                                <label for="" class="form-label">Task Report</label>
                                                <div class="input-group">
                                                    <span class="input-group-text" id="basic-addon1">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-code" viewBox="0 0 16 16">
                                                        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"></path>
                                                        <path d="M8.646 6.646a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L10.293 9 8.646 7.354a.5.5 0 0 1 0-.708zm-1.292 0a.5.5 0 0 0-.708 0l-2 2a.5.5 0 0 0 0 .708l2 2a.5.5 0 0 0 .708-.708L5.707 9l1.647-1.646a.5.5 0 0 0 0-.708z"></path>
                                                        </svg>
                                                    </span>
                                                    <input type="text" name="task_attachment" class="form-control" placeholder="Attachment Task" required>
                                                    <input type="hidden" name="id_task" value="<?= $detail2['id_task']; ?>">
                                                    <input type="hidden" name="t_status" value="2">
                                                </div>
                                            </div>
                                            <div class="mb-10">
                                                <div class="card-title align-items-start flex-column ">
                                                    <span class="card-label fw-bolder text-dark fs-4"><b class="card-label fw-bolder text-dark fs-6">Task : </b><br><?= $detail2['task_name']?></span>
                                                    <span class="text-muted mt-2 fw-bold fs-6">
                                                    <?php if ( $detail['p_status'] == 1) :?>
                                                        <span rel="tooltip" title="detail" class="badge badge-light-success mx-3">new</span>
                                                    <?php else : ?>
                                                        <span class="text-xs font-weight-bold text-info"></span>
                                                    <?php endif ;?></span>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="card-label fs-6"><b>Description : </b><br><?= $detail2['description']?></span>
                                                </div>     
                                                <div class="mb-3">
                                                    <span class="card-label fs-6"><b>Start Date : </b><?= date("d-m-Y", strtotime($detail2['start_time']));?></span>
                                                </div>
                                                <div class="mb-3">
                                                    <span class="card-label fs-6"><b>End Date : </b><?= date("d-m-Y", strtotime($detail2['end_time'])); ?> </span>
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
