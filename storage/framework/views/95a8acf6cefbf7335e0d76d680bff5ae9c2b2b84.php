<?php $__env->startSection('controller','Product'); ?>
<?php $__env->startSection('action','List'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr align="center">
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Date</th>
        <th>Category</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
</thead>
<tbody>
    <?php $stt = 0 ?>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $stt = $stt + 1 ?>
    <tr class="odd gradeX" align="center">
        <td><?php echo $stt; ?></td>
        <td><?php echo $item["name"]; ?></td>
        <td><?php echo number_format($item["price"],0,",","."); ?> VNĐ</td>
        <td>
            <?php echo \Carbon\Carbon::createFromTimeStamp(strtotime($item["created_at"]))->diffForHumans(); ?>

        </td>
        <td>
            <?php
                $cate = DB::table('cates')->where('id',$item["cate_id"])->first();
            ?>
            <?php if(!empty($cate->name)): ?>
                <?php echo $cate->name; ?>

            <?php endif; ?>
        </td>
        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="<?php echo URL::route('admin.product.getDelete',$item["id"]); ?>"> Delete</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo URL::route('admin.product.getEdit',$item["id"]); ?>">Edit</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>