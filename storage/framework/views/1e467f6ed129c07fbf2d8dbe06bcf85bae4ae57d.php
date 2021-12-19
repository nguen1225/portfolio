<div class="recorde_header">
    <h3>
        身体記録管理
    </h3>
    <p class="explanation">
        日々の身体記録を表示します。
    </p>
    <div id="modal_open">
        <button class="create_new_button">
            記録作成
        </button>
    </div>
</div>
<div class="content_scroll">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <dl>
        <div class="select">
            <dt class="select_title">
                <a href="<?php echo e(route('vital.show', $post->id)); ?>">
                        <?php echo nl2br(htmlspecialchars($post->title)); ?>

                    </a>
                </p>
            </dt>
            <dd class="day created_at">
                <a href="<?php echo e(route('vital.show', $post->id)); ?>">
                    作成日 : <?php echo e(date('Y年m月d日', strtotime($post->registered_at))); ?>

                </a>
            </dd>
        </div>
    </dl>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /work/resources/views/vital/components/body-recorde.blade.php ENDPATH**/ ?>