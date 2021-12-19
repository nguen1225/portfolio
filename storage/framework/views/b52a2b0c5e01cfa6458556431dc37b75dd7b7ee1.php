<?php echo $__env->make('components.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('components.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('components.layouts.dashboard', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!doctype html>
<html lang="ja">
<?php echo $__env->yieldContent('header'); ?>
<body>
    <?php if(session()->get('id')): ?>
    <?php echo $__env->yieldContent('dashboard'); ?>
    <?php endif; ?>
    <main>
        <?php if(session()->has('message')): ?>
            <aside class="message">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <p><?php echo e(session()->get('message')); ?></p>
            </aside>
        <?php endif; ?>
        <?php $__env->startSection('body'); ?>
        <?php echo $__env->yieldSection(); ?>
    </main>
    <?php echo $__env->yieldContent('footer'); ?>
</body>
</html>
<?php /**PATH /work/resources/views/layouts/detail.blade.php ENDPATH**/ ?>