<!--begin::Content-->
<div class="content d-flex flex-column-fluid" id="kt_content">
    <!--begin::Container-->
    <div class="container">
        <!--begin::Card-->
        <div class="card">
            <!--begin::Section-->
            <div class="card-body p-5 p-lg-10 pb-0">
                <!--begin::Heading-->
                <div class="d-flex flex-stack flex-wrap flex-sm-nowrap">
                    <h1 class="anchor fw-bolder">
                        <a href="<?= site_url('analyst/client'); ?>"></a>Schedule &nbsp
                        <span class="text-muted mt-2 fw-bold fs-6"> - Create and update data</span>
                    </h1>
                </div>
                <!--end::Heading-->
                <hr/>
                <!--begin::Table-->
                <div class="px-5">
                    <table id="datatable" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>No</th>
                                <th>Project</th>
                                <th>Total Analyst</th>
                                <th>Task Schedule</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($project)) : $i = 1; foreach (array_reverse($project) as $value) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td>
                                    <ul style="list-style-type:none;padding-left:0px">
                                    <li><?= $value->project_name; ?></li>
                                    <li><?= $value->client_name; ?></li>
                                    </br>
                                    <li>Start : <?= date('d-m-Y',strtotime ($value->start_date)); ?></li>
                                    <li>End : <?= date('d-m-Y',strtotime ($value->end_date)); ?></li>
                                    </ul>
                                </td>
                                <td>
                                <ul style="list-style-type:none;padding-left:0px">
                                    <li><?= $value->c_log; ?> Campaign</li>
                                    <li><?= $value->log; ?> Service</li>
                                    <li><?= $value->t_log; ?> Team</li>
                                </ul>
                                </td>
                                <td>
                                <ul style="list-style-type:none;padding-left:0px">
                                    <li><?= $value->s_log; ?> Task</li>
                                </ul>
                                </td>
                                <td>
                                <?php if ( $value->p_status == 4) : ?>
                                    <span rel="tooltip" title="Detail" ><i class="bi bi-check2-all"></i>
                                    completed </span>
                                <?php else : ?>
                                <a href="<?= site_url('analyst/schedule/'.$value->id_project.'/view'); ?>" rel="tooltip" title="Detail" class="badge badge-success">
                                    <i class="bi bi-arrow-up-right text-white"></i> Detail </a>
                                </td>        
                                <?php endif ;?>         
                   
                            </tr>
                        <?php endforeach; endif; ?>
                        </tbody>
                    </table>
                    
                </div>
                <!--end::Table-->
            </div>
            <!--end::Section-->
        </div>
        <!--end::Card-->
    </div>
    <!--end::Container-->
</div>
<!--end::Content-->

<script>
$(document).ready( function () {

$('#datatable').DataTable();

} );
</script>