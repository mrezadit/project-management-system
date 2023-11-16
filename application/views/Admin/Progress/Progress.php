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
                        <a href="<?= site_url('admin/client'); ?>"></a>Progress &nbsp
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
                                <th>Total Campaign</th>
                                <th>Total Team</th>
                                <th>Task Progress</th>
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
                                </ul>
                                </td>
                                <td>
                                <ul style="list-style-type:none;padding-left:0px">
                                    <li><?= $value->t_log; ?> Team</li>
                                </ul>
                                </td>                        
                                <td>
                                <ul style="list-style-type:none;padding-left:0px">
                                    <?php if ( $value->s_log - $value->b_log == 0) :?>
                                        <li><b class="badge badge-light-success">Finish Project</b></li>
                                    <?php else : ?>
                                        <li></li>
                                    <?php endif ;?>
                                    <li><b><?= $value->b_log; ?> Task Completed</b></li>
                                    <li><b><?= $value->s_log; ?> Total Tasks</b></li>
                                <ul>
                                </td>
                                <td>
                                <a href="<?= site_url('admin/progress/'.$value->id_project.'/view'); ?>" rel="tooltip" title="Detail" class="badge badge-success">
                                    <i class="bi bi-arrow-up-right text-white"></i> Detail </a>
                                </td>        
                                <?php endforeach; endif; ?>      
                            </tr>
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