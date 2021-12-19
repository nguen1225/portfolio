<?php $__env->startSection('body'); ?>
<div class="min-h-screen flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="min-h-full flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md w-full space-y-8">
        <div>
            <h2 class="text-center text-3xl font-extrabold text-gray-50">
                <a href="<?php echo e(route('login')); ?>">
                    パスワード変更が完了しました
                </a>
            </h2>
            <p class="mt-2 text-gray-600 text-center">
            <a href="<?php echo e(route('login')); ?>" class=" text-gray-50 hover:text-purple-200">
                ログイン画面に戻る
            </a>
            </p>
        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/password/completed.blade.php ENDPATH**/ ?>