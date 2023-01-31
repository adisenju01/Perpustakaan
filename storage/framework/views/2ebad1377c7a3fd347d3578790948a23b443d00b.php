<?php $__env->startSection('content'); ?>
<div class="container">
	<h1 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;">EDIT PROFILE</h1>
	<form action="<?php echo e(url('admin/user/'.$id.'/update')); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<div class="form-group">
			<label for="name">Name:</label>
			<input type="text" name="name" class="form-control" required="required" value="<?php echo e((isset($data)?$data->name:$name)); ?>">
		</div>
		<div class="form-group">
			<label for="email">E-mail:</label>
			<input type="text" name="email" class="form-control" required="required" value="<?php echo e((isset($data)?$data->email:$email)); ?>">
		</div>
		<button type="submit" class="btn btn-danger">Edit</button>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/admin/user/edit.blade.php ENDPATH**/ ?>