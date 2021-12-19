<?php if($results): ?>
<?php $__currentLoopData = $results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<dl>
    <div class="select">
        <dt class="text-sm font-medium text-gray-500">
            <p class="hover:text-gray-900">
                <a href="<?php echo e(route('schedule.show', $item->s_id)); ?>">
                    <?php echo nl2br(htmlspecialchars($item->s_title)); ?>

                </a>
            </p>
        </dt>
        <dd class="day created_at">
            <a href="<?php echo e(route('schedule.show', $item->s_id)); ?>">
                作成日:<?php echo e($item->s_created); ?>

            </a>
        </dd>
    </div>
</dl>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php else: ?>
<dl>
    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6 border-b border-gray-200">
        <dt class="text-sm font-medium text-gray-500">
            検索結果は0件です。
        </dt>
    </div>
</dl>
<?php endif; ?>
<?php /**PATH /work/resources/views/schedule/components/search-results.blade.php ENDPATH**/ ?>