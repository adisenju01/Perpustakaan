<?php $__env->startSection('content'); ?>
<div class="container">
	<?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	<h1 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;">PROFILE</h1>
	<h2 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;"><?php echo e($user->name); ?></h2>
	<br>
	<table class="table table-stripped table-bordered">
		<thead style="background-color: #442769; color: white;">
			<tr>
				<td>Name</td>
				<td>Email</td>
			</tr>
		</thead>
		<tbody style="background-color: white;">
			<tr>
				<td><?php echo e($user->name); ?></td>
				<td><?php echo e($user->email); ?></td>
			</tr>
		</tbody>
	</table>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/user/profile/index.blade.php ENDPATH**/ ?>