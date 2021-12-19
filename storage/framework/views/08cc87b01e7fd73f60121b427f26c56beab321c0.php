<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<dl>
    <div class="select">
        <dt class="text-sm font-medium text-gray-500">
            
            <!-- phpの改行関数を使っていい感じに本文を改行させる -->
            <!-- <p><?php echo e($post->title); ?></p> -->
            <a href="<?php echo e(route('schedule.show', $post->id)); ?>">
                <p class="select_title hover:text-gray-900">
                    <?php echo nl2br(htmlspecialchars($post->title)); ?>

                </p>
            </a>
        </dt>
        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2 created_at">
            <a href="<?php echo e(route('schedule.show', $post->id)); ?>">
                作成日:<?php echo e($post->created_at->format('Y年m月d日')); ?>

            </a>
        </dd>
    </div>
</dl>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php /**PATH /work/resources/views/schedule/components/schedule-recorde.blade.php ENDPATH**/ ?>