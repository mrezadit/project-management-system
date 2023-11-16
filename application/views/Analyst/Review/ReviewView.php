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
                            <div class="rounded border p-10">
                                <div class="d-flex flex-stack flex-wrap flex-sm-nowrap">
                                    <h3 class="card-title align-items-start flex-column">
                                        <span class="fw-bolder text-dark fs-3 me-2">Review Task Report</span>
                                        <span class="text-muted mt-2 fw-bold fs-6"> - Form to create a new data</span>
                                    </h3>
                                <form action="<?= site_url('analyst/finishtask'); ?>" method="post">
                                </div>
                                <hr class="mb-5">

                                <div class="d-flex">
                                        <div class="col-sm-6 px-5">
                                        <div class="mb-10">
                                            <h3 class="card-title align-items-start flex-column ">
                                                <span class="card-label fw-bolder text-dark fs-2"><?= $detail['project_name']?></span>
                                                <span class="text-muted mt-2 fw-bold fs-6">
                                                <?php if ( $detail['p_status'] == 1) :?>
                                                    <span rel="tooltip" title="detail" class="badge badge-light-success mx-3">new</span>
                                                <?php else : ?>
                                                    <span class="text-xs font-weight-bold text-info"></span>
                                                <?php endif ;?></span>
                                            </h3>
                                            <div class="mb-5">
                                                <span class="card-label fs-6"><b>Description : </b><br><?= $detail['description']?></span>
                                            </div>
                                            <div class="mb-3">
                                                <span class="card-label fs-6"><b>Priode : </b><?= $detail['project_priod']?></span>
                                            </div>
                                            <div class="mb-3">
                                                <span class="card-label fs-6"><b>Start Project : </b><?= date("d-m-Y", strtotime($detail['start_date'])); ?></span>
                                            </div>
                                            <div class="mb-3">
                                                <span class="card-label fs-6"><b>End Project : </b><?= date("d-m-Y", strtotime($detail['end_date'])); ?> </span>
                                            </div>
                                            <h3 class="card-title align-items-start flex-column mb-3">
                                                <span class="card-label fw-bolder text-dark fs-5">Client :</span>
                                            </h3>
                                            <div class="mb-3">
                                                <span class="card-label fs-6"><?= $detail['client_name']?> - <?= $detail['company']?></span>
                                            </div>
                                            <div class="mb-3">
                                                <span class="card-label fs-6"><?= $detail['address']?></span>
                                            </div>
                                        </div>
                                        <hr class="mb-5">
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
                                            </div>
                                        </div>
                                        
                                        <div class="col-sm-6 px-5">
                                            <div class="mb-5">
                                                <div class="card-title align-items-start flex-column ">
                                                    <span class="card-label fw-bolder text-dark fs-4"><b class="card-label fw-bolder text-dark fs-6">Task : </b><br>
                                                    <?= $detail2['task_name']?></span>
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
                                            <hr class="mb-5">

                                            <div class="mb-10">
                                                <label for="" class="form-label fs-4"><b>Task Report</b></label>
                                                <div class="mb-5">
                                                        <span class="card-label fs-6"><b>Submit Date : </b><?= date("d-m-Y", strtotime($detail2['time'])); ?> </span>
                                                    </div> 
                                                    
                                                <div class="input-group">
                                                    <div class="mb-5">
                                                        <span class="card-label fs-6"><b>Task Attachment : </b></span> 
                                                        <a href="<?= $detail2['task_attachment']?>" rel="tooltip" title="Detail" target="_blank"class="badge badge-success">
                                                        <i class="bi bi-link text-white"></i> Link </a>
                                                    </div>                                                      
                                                    <input type="hidden" name="id_task" value="<?= $detail2['id_task']; ?>">
                                                    <input type="hidden" name="t_status" value="0">
                                                    <input type="hidden" name="id_project" value="<?= $detail['id_project']?>">
                                                </div>
                                                <hr>

                                                <div class="mb-5">
                                                    <span class="card-label fs-6"><b>Staff : </b><br><b><?= $detail2['staff_name']?> - <?= $detail2['division']?></b></span>
                                                </div>     

                                                <div class="mb-5">
                                                    <label class="form-label">Review Description</label>
                                                    <textarea type="textarea" class="form-control h-150px" name="review" placeholder="Review" required></textarea>
                                                </div>
                                            <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                                                <button type="submit" class="btn btn-danger mx-5" value="decline" name="action">Decline</button>
                                                <button type="submit" class="btn btn-success" value="accept" name="action">Accept</button>
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
            url: "<?php echo base_url("index.php/analyst/listStaff"); ?>", // Isi dengan url/path file php yang dituju
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
