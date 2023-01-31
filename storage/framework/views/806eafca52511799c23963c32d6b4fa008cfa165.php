<?php $__env->startSection('content'); ?>
<div class="container">
	<h1 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;">ADD BOOK</h1>
	<form action="<?php echo e(url('admin/book/store')); ?>" method="post">
		<?php echo e(csrf_field()); ?>

		<input type="hidden" name="id" required="required">
		<div class="form-group">
			<label>Categories</label>
			<select class="form-control" name="category_id">
				<option value="">Choose</option>
				<?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select>
		</div>
		<div class="form-group">
			<label>Title</label>
			<input type="text" class="form-control" name="title">
		</div>
		<div class="form-group">
			<label>Author</label>
			<input type="text" class="form-control" name="writer">
		</div>
		<div class="form-group">
			<label>Published Year</label>
			<input type="text" class="form-control" name="published_year">
		</div>	
		<div class="form-group">
			<label>Description</label>
			<input type="text" class="form-control" name="sinopsis">
		</div>
		<button type="submit" class="btn btn-primary">ADD BOOK</button>
	</form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/admin/book/create.blade.php ENDPATH**/ ?>