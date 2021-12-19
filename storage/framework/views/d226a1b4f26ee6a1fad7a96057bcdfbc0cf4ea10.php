<?php $__env->startSection('body'); ?>

<div class="container mx-auto mt-6">
    <div class="flex space-x-16">
        <div class="width-50">
            <?php echo $__env->make('vital.components.graph', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('vital.components.bmi', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <div class="width-50">
            <div class="shadow overflow-hidden sm:rounded-lg bg-white">
                <?php echo $__env->make('vital.components.body-recorde', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <?php echo e($posts->links()); ?>

        </div>
    </div>
</div>
<?php echo $__env->make('vital.from', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/vital/index.blade.php ENDPATH**/ ?>