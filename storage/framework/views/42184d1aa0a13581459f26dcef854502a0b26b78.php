<?php $__env->startSection('content'); ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr align="center">
        <th>ID</th>
        <th>Username</th>
        <th>Level</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
</thead>
<tbody>
    <?php $stt = 0 ?>
    <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item_user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $stt = $stt + 1 ?>
    <tr class="odd gradeX" align="center">
        <td><?php echo $stt; ?></td>
        <td><?php echo $item_user['username']; ?></td>
        <td>
            <?php if($item_user['id'] == 2): ?>
                Super Admin
            <?php elseif($item_user['level'] == 1): ?>
                Admin
            <?php else: ?>
                Member
            <?php endif; ?>
        </td>
        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="<?php echo URL::route('admin.user.getDelete',$item_user["id"]); ?>"> Delete</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo URL::route('admin.user.getEdit',$item_user["id"]); ?>">Edit</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>