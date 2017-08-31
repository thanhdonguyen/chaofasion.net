<?php $__env->startSection('controller','Slider'); ?>
<?php $__env->startSection('action','list'); ?>
<?php $__env->startSection('content'); ?>
<table class="table table-striped table-bordered table-hover" id="dataTables-example">
<thead>
    <tr align="center">
        <th>STT</th>
        <th>Hình</th>
        <th>Delete</th>
        <th>Edit</th>
    </tr>
</thead>
<tbody>
    <?php $stt = 0 ?>
    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php $stt = $stt + 1 ?>
    <tr class="odd gradeX" align="center">
        <td><?php echo $stt; ?></td>
        <td><img width="200px" src="<?php echo asset('resources/upload/slider/'.$sd['hinh']); ?>" alt=""></td>
        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a onclick="return xacnhanxoa('Bạn có chắc muốn xóa không')" href="<?php echo URL::route('admin.slider.getDelete',$sd["id"]); ?>"> Delete</a></td>
        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="<?php echo URL::route('admin.slider.getEdit',$sd["id"]); ?>">Edit</a></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</tbody>
</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>