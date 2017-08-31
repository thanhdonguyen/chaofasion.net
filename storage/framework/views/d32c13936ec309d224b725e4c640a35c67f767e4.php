<?php $__env->startSection('controller','Product'); ?>
<?php $__env->startSection('action','Add'); ?>
<?php $__env->startSection('content'); ?>
<form action="<?php echo url('/admin/product/add'); ?>" method="POST" enctype="multipart/form-data">
<div class="col-lg-7" style="padding-bottom:120px">
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
<?php echo $__env->make('admin.blocks.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="form-group">
        <label>Menu</label>
        <select class="form-control" name="sltParent">
            <option value="0">Please Choose Category</option>
            <?php cate_parent($cate,0,"--",old('sltParent')); ?>
        </select>
    </div>
    <div class="form-group">
        <label>Tên sản phẩm</label>
        <input class="form-control" name="txtName" placeholder="Nhập tên sản phẩm" value="<?php echo old('txtName'); ?>" />
    </div>
    <div class="form-group">
        <label>Đơn giá</label>
        <input class="form-control" name="txtPrice" placeholder="Nhập đơn giá" value="<?php echo old('txtPrice'); ?>" />
    </div>
    <div class="form-group">
        <label>Mô tả</label>
        <textarea class="form-control" rows="3" name="txtIntro"><?php echo old('txtIntro'); ?></textarea>
        
    </div>
    <div class="form-group">
        <label>Màu sắc</label>
        <textarea class="form-control" rows="3" name="txtContent"><?php echo old('txtContent'); ?></textarea>
        
    </div>
    <div class="form-group">
        <label>Chất liệu</label>
        <textarea class="form-control" name="txtDescription" rows="3"><?php echo old('txtDescription'); ?></textarea>
    </div>
    <div class="form-group">
        <label>Mã sản phẩm</label>
        <input class="form-control" name="txtKeywords" placeholder="Nhập mã sản phẩm" value="<?php echo old('txtKeywords'); ?>"/>
    </div>
    <div class="form-group">
        <label>Hình ảnh</label>
        <input type="file" name="fImages">
    </div>
    <button type="submit" class="btn btn-default">Product Add</button>
    <button type="reset" class="btn btn-default">Reset</button>
</div>
<div class="col-md-1"></div>
<div class="col-md-4">
    <?php for($i=1 ; $i<=10 ; $i++): ?>
    <div class="form-group">
        <label>Images Product Detail <?php echo $i; ?></label>
        <input type="file" name="fProductDetail[]" />
    </div>
    <?php endfor; ?>
</div>
<form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>