<?php $__env->startSection('content'); ?>
<div class="container">
	<h1 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;"><?php echo e($book->title); ?></h1>
	<br>
	<table class="table table-stripped table-bordered">
		<thead style="background-color: #442769; color: white; font-size: 16px;">
			<tr>
				<td>TITLE</td>
				<td>AUTHOR</td>
				<td>PUBLISHED YEAR</td>
				<td>DESCRIPTION</td>
			</tr>
		</thead>
		<tbody style="background-color: white;">
			<tr>
				<td><?php echo e($book->title); ?></td>
				<td><?php echo e($book->writer); ?></td>
				<td><?php echo e($book->published_year); ?></td>
				<td><?php echo e($book->sinopsis); ?></td>
			</tr>
		</tbody>
	</table>
	<a href="<?php echo e(url('admin/book')); ?>" class="btn btn-success" style="width: 30; font-family: 'SF Pro Text', sans-serif; color: white;">BACK</a>	
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/admin/book/show.blade.php ENDPATH**/ ?>