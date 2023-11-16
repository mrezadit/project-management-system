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
                        <a href="<?= site_url('admin/team'); ?>"></a>Team &nbsp
                        <span class="text-muted mt-2 fw-bold fs-6"> - Create and update data</span>
                    </h1>
                    <div class="d-flex align-items-center flex-nowrap text-nowrap overflow-auto py-1">
                        <a href="<?= site_url('admin/team/addteam'); ?>" class="btn btn-success">Add Team</a>
                    </div>
                </div>
                <!--end::Heading-->
                <hr/>
                <!--begin::Table-->
                <div class="px-5">
                    <table id="datatable" class="table table-row-bordered gy-5">
                        <thead>
                            <tr class="fw-bold fs-6 text-gray-800 border-bottom border-gray-200">
                                <th>No</th>
                                <th>Division</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if (!empty($team)) : $i = 1; foreach (array_reverse($team) as $value) : ?>
                            <tr>
                                <td><?= $i++; ?></td>
                                <td><?= $value->division; ?></td>
                                <td>
                                <a href="<?= site_url('admin/team/'.$value->id_team.'/update'); ?>" rel="tooltip" title="edit" class="badge badge-light-success">
                                    <i class="bi bi-pencil-square"></i> Edit </a>
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