<?php $__env->startSection('body'); ?>
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8">
        <div>
            <h2>
                日程詳細
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    作成日 : <?php echo e($post_detail->registered_at); ?>

                </a>
            </p>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    ジャンル : <?php echo e($post_detail->genreName); ?>

                </a>
            </p>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    <?php echo e(session('flash_message')); ?>

                </a>
            </p>
        </div>
        <h3 class="underline text-3xl break-words text-center font-extrabold text-gray-50">
            <?php echo nl2br(htmlspecialchars($post_detail->title)); ?>

        </h3>
        <?php echo $__env->make('schedule.components.show-detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="mt-3">
            <a href="<?php echo e(route('schedule.edit', $post_detail->id)); ?>">
                <button class="submit_button">
                    編集
                </button>
            </a>
            <form action="<?php echo e(route('schedule.delete', $post_detail->id)); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button class="submit_button" value="<?php echo e($post_detail->id); ?>" onclick="return window.confirm('削除しますか？')">
                    削除
                </button>
            </form>
            <button class="submit_button" type="reset" onclick='window.history.back(-1);'>
                戻る
            </button>
        </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/schedule/show.blade.php ENDPATH**/ ?>