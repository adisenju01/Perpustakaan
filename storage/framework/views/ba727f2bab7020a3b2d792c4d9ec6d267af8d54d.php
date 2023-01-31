<?php $__env->startSection('content'); ?>
<div class="container">
	<h1 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;">LIST OF BORROWED BOOKS</h1>
	<br>
	<table class="table table-stripped table-bordered">
		<thead style="background-color: #442769; font-size: 16px; color: white;">
			<tr>
				<td>User</td>
				<td>Title</td>
				<td>Date of Borrow</td>
				<td>Date of Return</td>
			</tr>
		</thead>
		<tbody style="background-color: white;">
			<?php $__currentLoopData = $rents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rent): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($rent->user ->name); ?></td>
				<td><?php echo e($rent->book ->title); ?></td>
				<td><?php echo e($rent->rent_date); ?></td>
				<td><?php echo e($rent->return_date); ?></td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/admin/rent/index.blade.php ENDPATH**/ ?>