<?php $__env->startSection('content'); ?>
<div class="container">
	<h1 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;">BOOKS</h1>
	<br>
	<form action="<?php echo e(url('library/search')); ?>" method="get">
		<div class="form-group">
			<input type="text" class="form-control" name="search" value="<?php echo e(old('search')); ?>">
	</div>
	<button type="submit" class="btn btn-success" style="font-family: 'SF Pro Text', sans-serif; color: white;">SEARCH</button>
	</form>
	<br>
	<table class="table table-stripped table-bordered">
		<thead style="background-color: #442769; color: white; font-size: 15px;">
			<tr>
				<td>TITLE</td>
				<td>AUTHOR</td>
				<td>PUBLISHED</td>
				<td>DESCRIPTON</td>
				<td>ACTION</td>
			</tr>
		</thead>
		<tbody style="background-color: white;">
			<?php $__currentLoopData = $libraries; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $library): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($library->title); ?></td>
				<td><?php echo e($library->writer); ?></td>
				<td><?php echo e($library->published_year); ?></td>
				<td><?php echo e($library->sinopsis); ?></td>
				<td>
					<a href="<?php echo e(url('/listrent/'.$library->id.'/rent')); ?>" class="btn btn-warning">BORROW</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/user/library/index.blade.php ENDPATH**/ ?>