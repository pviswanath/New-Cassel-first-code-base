<?php $__env->startSection('content'); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="pull-right">
                            <form action="<?php echo e(url('roles/create')); ?>" method="GET"><?php echo e(csrf_field()); ?>

                                <button type="submit" id="create" class="btn btn-primary"><i class="fa fa-btn fa-file-o"></i>Create</button>
                            </form>
                        </div>
                        <div><h4><?php echo e($heading); ?></h4></div>
                    </div>
                    <div class="panel-body">
                        <?php if(count($roles) > 0): ?>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped cds-datatable">
                                    <thead> <!-- Table Headings -->
                                    <th>Name</th><th>Display Name</th><th>Description</th>
                                    </thead>
                                    <tbody> <!-- Table Body -->
                                    <?php foreach($roles as $role): ?>
                                        <tr>
                                            <?php /*<td class="table-text"><div><a href="<?php echo e(url('/roles/'.$role->id.'/edit')); ?>"><?php echo e($role->name); ?></a></div></td>*/ ?>
                                            <td class="table-text"><div><?php echo e($role->name); ?></div></td>
                                            <td class="table-text"><div><a href="<?php echo e(url('/roles/'.$role->id.'/edit')); ?>"><?php echo e($role->display_name); ?></a></div></td>
                                            <td class="table-text"><div><?php echo e($role->description); ?></div></td>
                                        </tr>
                                    <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else: ?>
                            <div class="panel-body"><h4>No Role Records found</h4></div>
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