<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                <h3 style="text-align: center; font-family: 'Gotham Medium', sans-serif;">UiTM x UNNES LIBRARY</h3>
                </div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>
                    <h5 style="text-align: justify;">An online library is where the information is digitalised and stored in the form of electronic portal that provides access to all kind of database such as bibliographies, full-text resources, catalogues, search engines, internet resources, reference works, E-journals etc. Earlier its only  paper based works only available in libraries. However, technologies have overcome the traditional techniques and ways of gathering information from libraries.
                    Now in present life we have modest facilities which are called as online library system. Hence, online library helps students for their learning and saves time instead of spending time to search information from hard copies physically.</h5>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\perpus5\resources\views/home.blade.php ENDPATH**/ ?>