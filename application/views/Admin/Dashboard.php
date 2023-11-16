<div class="content">
    <div class="container-fluid">
        <div class="row pb-3">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-warning card-header-icon">
                        <p class="card-category py-10">Total Projects</p>
                        <h3 class="card-title counter fs-2"> <?= $projects ?>  </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-success card-header-icon">
                        <p class="card-category py-10">Total Campaign : </p>
                        <h3 class="card-title counter fs-2"><?= $analyst ?> </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-danger card-header-icon">
                        <p class="card-category py-10">Total Task</p>
                        <h3 class="card-title counter fs-2"><?= $task ?> </h3>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-header card-header-info card-header-icon">
                        <p class="card-category py-10">Total Staff</p>
                        <h3 class="card-title counter fs-2"><?= $staff ?> </h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose pb-0">
                        <h4 class="card-title">Projects Progress</h4>
                    </div>
                    <div class="card-body table-responsive pt-0">
                        <table id="datatable"  class="table table-hover">
                            <thead class="text-rose">
                                <th>No</th>
                                <th>Project</th>
                                <th>Total Task</th>
                                <th>Task Completed</th>
                            </thead>
                            <tbody>
                            <?php if (!empty($progress)) : $i = 1; foreach (array_reverse($progress) as $value) : ?>
                                <tr>
                                    <td class ="pl-4"><?= $i++; ?></td>
                                    <td class ="pl-4"> <?= $value->project_name; ?> </td>
                                    <td class ="pl-4"> <?= $value->s_log; ?> </td>
                                    <td class ="pl-4"> <?= $value->b_log; ?> </td>
                                </tr>
                            <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header card-header-rose pb-0">
                        <h4 class="card-title">Project Completed</h4>
                    </div>
                    <div class="card-body table-responsive pt-0">
                        <table id="datatable2" class="table table-hover">
                            <thead class="text-rose">
                                <th>ID</th>
                                <th>Project</th>
                                <th>Total Campaign</th>
                                <th>Date Complete</th>
                            </thead>
                            <tbody>
                            <?php if (!empty($project)) : $i = 1; foreach (array_reverse($project) as $value) : ?>
                                <tr>
                                    <td class ="pl-4"><?= $i++; ?></td>
                                    <td class ="pl-4"><?= $value->project_name; ?></td>
                                    <td class ="pl-4"><?= $value->c_log; ?></td>
                                    <td class ="pl-4"><?= date("d-m-Y", strtotime($value->ptime)); ?></td>
                                </tr>
                                <?php endforeach; endif; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready( function () {

$('#datatable').DataTable();
$('#datatable2').DataTable();

} );
</script>