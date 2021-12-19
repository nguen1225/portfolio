<div id="modal_content" class="modal flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="form">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8">
        <div>
            <h2>
                新規作成
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
            <a class="explanation_white">
                日程を作成します。
            </a>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <?php if(session('flash_message')): ?>
                <a class="explanation_white">
                    <?php echo nl2br(session('flash_message'), false); ?><br>
                </a>
                <?php endif; ?>
            </p>
            </p>
        </div>
        <?php echo $__env->make('schedule.components.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    </div>
</div>

<?php /**PATH /work/resources/views/schedule/from.blade.php ENDPATH**/ ?>