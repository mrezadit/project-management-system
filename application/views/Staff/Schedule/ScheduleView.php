<!--begin::Content-->
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
                                <span class="card-label fw-bolder text-dark fs-3">Schedule Details</span>
                            </h3>
                        </div>
                        <div class="px-10 mb-5">
                        <hr/> 
                        </div>
                        <div class="d-flex px-10 mb-5">
                            <div class="col-sm-6 px-5">
                                <h3 class="card-title align-items-start flex-column mb-5">
                                    <span class="card-label fw-bolder text-dark fs-5"><?= $detail['project_name']?></span>
                                </h3>
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
                                        <th>Task Schedule</th>
                                        <th>Staff & Team</th>
                                        <th>Campaign</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php if (!empty($schedule)) : $i = 1; foreach ($schedule as $value) : ?>
                                    <tr>
                                        <td><?= $i++; ?></td>
                                        <td>
                                            <ul style="list-style-type:none;padding-left:0px">
                                                <li><b><?= $value->task_name; ?></b></li>
                                                <li></br></li>
                                                <li>Start : <?= date('d-m-Y',strtotime ($value->start_time)); ?></li>
                                                <li><b>End : <?= date('d-m-Y',strtotime ($value->end_time)); ?></b></li>
                                            </ul>
                                        </td>
                                        <td>
                                            <ul style="list-style-type:none;padding-left:0px">
                                                <li><?= $value->staff_name; ?></li>
                                                <li><?= $value->division; ?></li>
                                            </ul>                                
                                        </td>
                                        <td>
                                            <ul style="list-style-type:none;padding-left:0px">
                                                <li><?= $value->campaign; ?></li>
                                                </br>
                                                <li><?= $value->service_name; ?></li>
                                                <li>End campaign : <?= date('d-m-Y',strtotime ($value->an_enddate)); ?></li>
                                            <ul>
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
<script>
$(document).ready( function () {

$('#datatable').DataTable();

} );
</script>