<?php $__env->startSection('content'); ?>
<div class="container">
	<title>EDIT</title>
	<h1 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;">EDIT</h1>
	<br>
	<form action="<?php echo e(url('admin/book/'.$id.'/update')); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" required="required" value="<?php echo e((isset($data)?$data->title:$title)); ?>">
		</div>
		<div class="form-group">
			<label>Author</label>
			<input type="text" name="writer" class="form-control" required="required" value="<?php echo e((isset($data)?$data->writer:$writer)); ?>">
		</div>
		<div class="form-group">
			<label>Published Year</label>
			<input type="text" name="published_year" class="form-control" required="required" value="<?php echo e((isset($data)?$data->published_year:$published_year)); ?>">
		</div>
		<div class="form-group">
			<label>Description</label>
			<input type="text" name="sinopsis" class="form-control" required="required" value="<?php echo e((isset($data)?$data->sinopsis:$sinopsis)); ?>">
		</div>
		<button type="submit" class="btn btn-warning" style="font-family: 'SF Pro Text', sans-serif;">EDIT</button>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/admin/book/edit.blade.php ENDPATH**/ ?>