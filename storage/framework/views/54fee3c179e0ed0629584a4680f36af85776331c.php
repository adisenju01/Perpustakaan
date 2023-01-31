<?php $__env->startSection('content'); ?>
<div class="container">
	<table class="table table-bordered table-stripped">
		<thead style="background-color: #442769; color: white; font-size: 15px;">
			<tr>
				<td>TITLE</td>
				<td>AUTHOR</td>
				<td>PUBLISHED</td>
				<td>DESCRIPTION</td>
				<td>ACTION</td>
			</tr>
		</thead>
		<tbody style="background-color: white;">
			<?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($book->title); ?></td>
				<td><?php echo e($book->writer); ?></td>
				<td><?php echo e($book->published_year); ?></td>
				<td><?php echo e($book->sinopsis); ?></td>
				<td>
					<a class="btn btn-danger" href="<?php echo e(url('/listrent/'.$book->id.'/return')); ?>">RETURN</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/user/listrent/index.blade.php ENDPATH**/ ?>