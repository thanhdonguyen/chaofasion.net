<?php $__env->startSection('content'); ?>
<div class="col-lg-7" style="padding-bottom:120px">
<form action="" method="POST">
<?php echo $__env->make('admin.blocks.errors', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
        <label>Tên khách hàng</label>
        <p><?php echo $data['hoten']; ?></p>
    </div>
    <div class="form-group">
        <label>Số điện thoại</label>
        <p><?php echo $data['phone']; ?></p>
    </div>
    <div class="form-group">
        <label>Địa chỉ</label>
        <p><?php echo $data['address']." - ".$data['city']; ?></p>
    </div>
    <div class="form-group">
        <label>Email</label>
        <p><?php echo $data['email']; ?></p>
    </div>
    <div class="form-group">
        <label>Sản phẩm mua</label>
        <a href="<?php echo url('chi-tiet-san-pham',[$data["product_id"],$data["alias"]]); ?>"><?php echo $data['bill']; ?></a>
    </div>
    <div class="form-group">
        <label>Số lượng : <?php echo $data['so_luong']; ?></label>
    </div>
    <div class="form-group">
        <label>Đơn giá : <?php echo number_format($data['don_gia'],0,",","."); ?>đ</label>
    </div>
    <div class="form-group">
        <label>Ghi chú</label>
        <p><?php echo $data['note']; ?></p>
    </div>
    <div class="form-group">
        <label>Duyệt đơn hàng</label>
        <label class="radio-inline">
            <input name="rdoStatus" value="1" checked="" type="radio"
             <?php if($data['trang_thai'] == 1): ?>
                checked="checked"
            <?php endif; ?>>Duyệt
        </label>
        <label class="radio-inline">
            <input name="rdoStatus" value="2" type="radio"
            <?php if($data['trang_thai'] == 2): ?>
                checked="checked"
            <?php endif; ?>>Chưa duyệt
        </label>
    </div>
    <button type="submit" class="btn btn-default">Xác nhận</button>
<form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>