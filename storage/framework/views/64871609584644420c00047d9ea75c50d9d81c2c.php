<div class="form-group<?php echo e($errors->has('fname') ? ' has-error' : ''); ?>">
    <?php echo Form::label('fname', 'First Name:', ['class' => 'col-xs-2 control-label']); ?>

    <div class="col-xs-2">
        <?php echo Form::text('fname', null, ['class' => 'col-xs-2 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('fname')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('fname')); ?></strong>
            </span>
        <?php endif; ?>
    </div>

    <?php echo Form::label('lname', 'Last Name:', ['class' => 'col-xs-2 control-label']); ?>

    <div class="col-xs-2">
        <?php echo Form::text('lname', null, ['class' => 'col-xs-2 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('lname')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->last('lname')); ?></strong>
            </span>
        <?php endif; ?>
    </div>

    <?php echo Form::label('mname', 'Middle Name:', ['class' => 'col-xs-2 control-label']); ?>

    <div class="col-xs-2">
        <?php echo Form::text('mname', null, ['class' => 'col-xs-2 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('mname')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->middle('mname')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
    <?php echo Form::label('email', 'E-Mail Address:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('email', null, ['class' => 'col-md-6 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('email')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('email')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group">
    <label class="col-md-4 control-label">Roles</label>
    <div class="col-md-6"><?php echo Form::select('rolelist[]', $list_role, null,
   ['class' => 'form-control roles cds-select', 'multiple', 'style' => 'width: 50%; margin-top: 10px;']); ?></div>
</div>

<div class="form-group<?php echo e($errors->has('residentid') ? ' has-error' : ''); ?>">
    <?php echo Form::label('residentid', 'Resident ID:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-2">
        <?php echo Form::text('residentid', null, ['class' => 'col-md-6 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('residentid')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('residentid')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('residentrelationship') ? ' has-error' : ''); ?>">
    <?php echo Form::label('residentrelationship', 'Resident Relationship:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-4">
        <?php echo Form::text('residentrelationship', null, ['class' => 'col-md-6 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('residentrelationship')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('residentrelationship')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('addressline1') ? ' has-error' : ''); ?>">
    <?php echo Form::label('addressline1', 'Address Line 1:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('addressline1', null, ['class' => 'col-md-6 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('addressline1')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('addressline1')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('addressline2') ? ' has-error' : ''); ?>">
    <?php echo Form::label('addressline2', 'Address Line 2:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-6">
        <?php echo Form::text('addressline2', null, ['class' => 'col-md-6 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('addressline2')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('addressline2')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('city') ? ' has-error' : ''); ?>">
    <?php echo Form::label('city', 'City:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-4">
        <?php echo Form::text('city', null, ['class' => 'col-md-4 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('city')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('city')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('state') ? ' has-error' : ''); ?>">
    <?php echo Form::label('state', 'State:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-4">
        <?php echo Form::text('state', null, ['class' => 'col-md-4 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('state')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('state')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('zipcode') ? ' has-error' : ''); ?>">
    <?php echo Form::label('zipcode', 'Zipcode:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-4">
        <?php echo Form::text('zipcode', null, ['class' => 'col-md-4 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('zipcode')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('zipcode')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>

<div class="form-group<?php echo e($errors->has('homephone') ? ' has-error' : ''); ?>">
    <?php echo Form::label('homephone', 'Cell Phone:', ['class' => 'col-md-4 control-label']); ?>

    <div class="col-md-2">
        <?php echo Form::text('homephone', null, ['class' => 'col-md-2 form-control', 'required' => 'required']); ?>

        <?php if($errors->has('homephone')): ?>
            <span class="help-block">
                <strong><?php echo e($errors->first('homephone')); ?></strong>
            </span>
        <?php endif; ?>
    </div>
</div>



<div class="form-group">
    <div class="col-md-6 col-md-offset-4">
        <div class="checkbox">
            <label>
                <?php echo e(Form::hidden('active', false)); ?><?php echo e(Form::checkbox('active', true, old('active'))); ?> Receive Email Updates
            </label>
        </div>
    </div>
</div>

<div class="form-group" style="text-align: center">
         <?php echo Form::button('<i class="fa fa-btn fa-save"></i>Create User', ['type' => 'submit', 'class' => 'btn btn-primary']); ?>


         <?php echo Form::button('<i class="fa fa-btn fa-save"></i>Reset Fields', ['type' => 'reset', 'class' => 'btn btn-primary']); ?>

 </div>
