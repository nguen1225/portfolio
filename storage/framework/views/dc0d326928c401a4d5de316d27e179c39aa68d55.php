<?php $__env->startSection('body'); ?>
<div class="container mx-auto mt-6">
    <div class="bg-gray-200 shadow overflow-hidden sm:rounded-lg">
        <div class="flex-between px-4 py-5 sm:px-6 border-b border-gray-200">
            <div>
                <h3>
                    検索結果
                </h3>
                <div class="explanation">
                    検索結果が表示されます。
                </div>
                <a href="<?php echo e(route('schedule.from')); ?>">
                    <button class="create_new_button">
                        日程作成
                    </button>
                </a>
            </div>
            <div>
                <?php echo $__env->make('schedule.components.search-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
        </div>
        <?php echo $__env->make('schedule.components.search-results', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo e($paginate->links()); ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/schedule/search.blade.php ENDPATH**/ ?>