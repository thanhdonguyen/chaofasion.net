<?php $__env->startSection('controller','Category'); ?>
<?php $__env->startSection('action','list'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr align="center">
        <th>STT</th>
        <th>Name</th>
        <th>Category Parent</th>
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
        <td>
        <?php if($item["parent_id"] == 0): ?>
            <?php echo "none"; ?>

        <?php else: ?>
            <?php
                $parent = DB::table('cates')->where('id',$item["id"])->first();
                echo $parent->name;
            ?>
        <?php endif; ?>
        </td>
        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="<?php echo URL::route('admin.cate.getDelete',$item["id"]); ?>"> Delete</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo URL::route('admin.cate.getEdit',$item["id"]); ?>">Edit</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>