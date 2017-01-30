<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-right">
                            <form action="<?php echo e(url('users/create')); ?>" method="GET"><?php echo e(csrf_field()); ?>

                                <button type="submit" id="create-user" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>Create</button>
                            </form>
                        </div>
                        <div><h4><?php echo e($heading); ?></h4></div>
                    </div>
                    <div class="panel-body">
                        <?php if(count($users) > 0): ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped cds-datatable">
                                <thead> <!-- Table Headings -->
                                <?php /*<th>User</th><th>Email</th><th>Status</th><th class="no-sort">Actions</th>*/ ?>
                                <th>User</th><th>Email</th><th>Status</th>
                                </thead>
                                <tbody> <!-- Table Body -->
                                <?php foreach($users as $user): ?>
                                    <tr>
                                        <td class="table-text"><div><a href="<?php echo e(url('/users/'.$user->id.'/edit')); ?>"><?php echo e($user->name); ?></a></div></td>
                                        <td class="table-text"><div><?php echo e($user->email); ?></div></td>
                                        <?php if($user->active): ?><td class="table-text"><div>Active</div></td><?php else: ?><td class="table-text"><div>InActive</div></td><?php endif; ?>
                                        <?php /*<td>*/ ?>
                                            <?php /*<?php if($user->id != 1): ?> <!-- Administrator User -->*/ ?>
                                            <?php /*<div class="pull-right" style="height: 25px;">*/ ?>
                                                <?php /*<form action="<?php echo e(url('users/'.$user->id)); ?>" method="POST" onsubmit="return ConfirmDelete();"><?php echo e(csrf_field()); ?><?php echo e(method_field('DELETE')); ?>*/ ?>
                                                    <?php /*<button type="submit" id="delete-user-<?php echo e($user->id); ?>" class="btn btn-default"><i class="fa fa-trash"></i></button>*/ ?>
                                                <?php /*</form>*/ ?>
                                            <?php /*</div>*/ ?>
                                            <?php /*<?php endif; ?>*/ ?>
                                        <?php /*</td>*/ ?>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php else: ?>
                            <div class="panel-body"><h4>No User Records found</h4></div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer'); ?>
    <style>
        .table td { border: 0px !important; }
        .tooltip-inner { white-space:pre-wrap; max-width: 400px; }
    </style>

    <script>
        $(document).ready(function() {
            $('table.cds-datatable').on( 'draw.dt', function () {
                $('tr').tooltip({html: true, placement: 'auto' });
            } );

            $('tr').tooltip({html: true, placement: 'auto' });
        } );
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>