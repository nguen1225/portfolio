<?php $__env->startSection('body'); ?>
<div class="container mx-auto mt-7">
    <div class="flex space-x-16">
        <?php echo $__env->make('schedule.components.calendar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <div class="width-50">
            <div class="shadow overflow-hidden sm:rounded-lg bg-white">
                <div class="recorde_header flex-between">
                    <div>
                        <h3>
                            日程管理
                        </h3>
                        <div class="explanation">
                            全ての日程を表示します。
                        </div>
                        <div id="modal_open">
                            <button class="create_new_button">
                                日程作成
                            </button>
                        </div>
                    </div>
                    <div>
                        <?php echo $__env->make('schedule.components.search-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
                <div class="content_scroll">
                    <?php echo $__env->make('schedule.components.schedule-recorde', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
            <?php echo e($posts->links()); ?>

        </div>
    </div>
</div>
<?php echo $__env->make('schedule.from', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/schedule/index.blade.php ENDPATH**/ ?>