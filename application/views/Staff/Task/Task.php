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
                        <a href="<?= site_url('staff/client'); ?>"></a>Task &nbsp
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
                                <th>Date</th>
                                <th>Task</th>
                                <th>Campaign</th>
                                <th>Staff</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($task)) : $i = 1; foreach (array_reverse($task) as $value) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td style="width:100px">
                                    <ul style="list-style-type:none;padding-left:0px">
                                        <li>Start date : </li>
                                        <li><?= date('d-m-Y',strtotime ($value->start_time)); ?></li>
                                        <li>End date : </li>
                                        <li><?= date('d-m-Y',strtotime ($value->end_time)); ?></li>
                                    </ul>
                                </td>
                                <td><?= $value->task_name; ?></td>
                                <td><?= $value->campaign; ?></td>
                                <td>
                                    <ul style="list-style-type:none;padding-left:0px">
                                        <li><?= $value->staff_name; ?></li>
                                        <li> <?= $value->division; ?></li>
                                    </ul>
                                </td>
                                <td>
                                <?php if ( $value->t_status == 1) :?>
                                    <span rel="tooltip" title="detail" class="badge badge-light-success">ongoing</span>
                                <?php elseif ( $value->t_status == 2): ?>
                                    <span rel="tooltip" title="detail" class="badge badge-light-info">review</span>
                                <?php elseif ( $value->t_status == 3): ?>
                                    <span rel="tooltip" title="detail" class="badge badge-light-primary">accepted</span>
                                <?php else : ?>
                                    <span rel="tooltip" title="detail" class="badge badge-light-danger">decline</span>
                                </td>
                                <?php endif ;?>
                                </td>
                                <td>
                                <?php if ( $value->t_status == 1) :?>
                                <a href="<?= site_url('staff/task/'.$value->id_project.'/view/'.$value->id_task.''); ?>" rel="tooltip" title="Detail" class="badge badge-success">
                                    <i class="bi bi-arrow-up-right text-white"></i> Detail </a>
                                <?php elseif ( $value->t_status == 3) :?>
                                <span rel="tooltip" title="Detail" ><i class="bi bi-check2-all"></i>
                                    completed </span>
                                <?php else : ?>
                                <a href="<?= site_url('staff/task/'.$value->id_project.'/view/'.$value->id_task.''); ?>" rel="tooltip" title="Detail" class="badge badge-secondary mb-4">
                                <i class="bi bi-arrow-up-right"></i> Update </a>
                                <br/>
                                <span>Task Report: </span> <br/>
                                <a href="<?= $value->task_attachment ?>" rel="tooltip" title="Detail" target="_blank"class="badge badge-success">
                                <i class="bi bi-link text-white"></i> Link </a>
                                <?php endif ;?>
                                </td>                       
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