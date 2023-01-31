<?php $__env->startSection('content'); ?>
<div class="container">
	<h1 style="text-align: center; font-family: 'SF Pro Text', sans-serif; color: #442769;">BOOKS</h1>
	<br>
	<a href="<?php echo e(url('admin/book/create')); ?>" class="btn btn-primary" style="width: 30; font-family: 'SF Pro Text', sans-serif; color: white;">+ ADD BOOK</a>
	<br>
	<br>
	<table class="table table-stripped table-bordered">
		<thead style="background-color: #442769; color: white; font-size: 16px;">
			<tr>
				<td>CATEGORY</td>
				<td>TITLE</td>
				<td>AUTHOR</td>
				<td>PUBLISHED YEAR</td>
				<td>OPTION</td>
			</tr>
		</thead>
		<tbody style="background-color: white;">
			<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($book->category->name); ?></td>
				<td><?php echo e($book->title); ?></td>
				<td><?php echo e($book->writer); ?></td>
				<td><?php echo e($book->published_year); ?></td>
				<td>
					<a href="<?php echo e(url('/admin/book/'.$book->id.'/show')); ?>" class="btn btn-primary">DETAIL</a>
					<a href="<?php echo e(url('/admin/book/'.$book->id.'/edit')); ?>" class="btn btn-warning">EDIT</a>
					<a href="<?php echo e(url('/admin/book/'.$book->id.'/delete')); ?>" class="btn btn-danger">DELETE</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/admin/book/index.blade.php ENDPATH**/ ?>