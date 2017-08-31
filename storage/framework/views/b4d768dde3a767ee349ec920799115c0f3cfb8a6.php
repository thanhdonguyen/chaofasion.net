<?php $__env->startSection('controller','slider'); ?>
<?php $__env->startSection('action','Add'); ?>
<?php $__env->startSection('content'); ?>
<div class="col-lg-7" style="padding-bottom:120px">
<?php echo $__env->make('admin.blocks.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<form action="<?php echo url('/admin/slider/add'); ?>" method="POST" enctype="multipart/form-data">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
        <label>Link slide</label>
        <input class="form-control" name="link" placeholder="Nhập link slide" value="<?php echo old('link'); ?>" />
    </div>
    <div class="form-group">
        <label>Hình</label>
        <input type="file" name="fImages">
    </div>
    <button type="submit" class="btn btn-default">Add</button>
    
</div>

<form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>