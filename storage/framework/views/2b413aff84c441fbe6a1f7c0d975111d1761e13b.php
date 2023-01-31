<?php $__env->startSection('content'); ?>
<div class="container">
	<h1 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;">MEMBERS</h1>
	<br>
	<table class="table table-stripped table-bordered" style="background-color: white;">
		<thead style="background-color: #442769">
			<tr style="color: white; font-size: 16px;">
				<td>Name</td>
				<td>E-mail</td>
				<td>Action</td>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($user->name); ?></td>
				<td><?php echo e($user->email); ?></td>
				<td>
					<a href="<?php echo e(url('/admin/user/'.$user->id.'/edit')); ?>" class="btn btn-warning">EDIT</a>
					<a href="<?php echo e(url('/admin/user/'.$user->id.'/delete')); ?>" class="btn btn-danger">DELETE</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/admin/user/index.blade.php ENDPATH**/ ?>