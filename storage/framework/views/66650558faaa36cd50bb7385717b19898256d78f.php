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
        <th>Delete</th>
        <th>Edit</th>
    </tr>
</thead>
<tbody>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr class="odd gradeX" align="center">
        <td>1</td>
        <td><?php echo $item["name"]; ?></td>
        <td>200.000 VNĐ</td>
        <td>3 Minutes Age</td>
        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>