<div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
    <?php echo Form::label('name', 'Name:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('name', null, ['class' => 'col-md-6 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('name')): ?>
            <span class="help-block"><strong><?php echo e($errors->first('name')); ?></strong></span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('display_name') ? ' has-error' : ''); ?>">
    <?php echo Form::label('display_name', 'Display Name:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('display_name', null, ['class' => 'col-md-6 form-control']); ?>

        <?php if($errors->has('display_name')): ?>
            <span class="help-block"><strong><?php echo e($errors->first('display_name')); ?></strong></span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('description') ? ' has-error' : ''); ?>">
    <?php echo Form::label('description', 'Description:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::textarea('description', null, ['class' => 'col-md-6 form-control']); ?>

        <?php if($errors->has('description')): ?>
            <span class="help-block"><strong><?php echo e($errors->first('description')); ?></strong></span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Permissions</label>
    <div class="col-md-6"><?php echo Form::select('permissionlist[]', $list_permission, null, ['class' => 'form-control roles cds-select', 'multiple', 'style' => 'width: 50%; margin-top: 10px;']); ?></div>
</div>

<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <?php echo Form::button('<i class="fa fa-btn fa-save"></i>Save', ['type' => 'submit', 'class' => 'btn btn-primary']); ?>

    </div>
</div>

