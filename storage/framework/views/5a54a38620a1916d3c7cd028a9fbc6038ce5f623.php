<form action="<?php echo e(route('schedule.post')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div>
        <h2 class="text-2xl font-bold"></h2>
        <div>
            <label class="block mt-8">
                <span class="form_title">タイトル</span>
                    <?php if($errors->first('title')): ?>
                    <p class="explanation_white text-sm error">
                        <?php echo nl2br($errors->first('title'), false); ?>

                    </p>
                    <?php endif; ?>
                <input
                    name="title" id="title"
                    value="<?php echo e(old('title')); ?>"
                    type="text"
                    class="schedule_form"
                    placeholder="タイトルを入力してください"
                    required
            />
            </label>
            <label class="block mt-4">
                <span class="form_title">記録日</span>
                <input
                    id="registered_at"
                    name="registered_at"
                    value="<?php echo e(old('registered_at')); ?>"
                    type="date"
                    class="schedule_form"
                    required
                    min="1900-01-01"
                    max="3000-12-31"
                >
            </label>
            <label class="block mt-8">
                <span class="form_title">ジャンル</span>
                <select
                    id="genre_id"
                    type="text"
                    class="schedule_form"
                    name="genre_id"
                    required
                >
                    <?php $__currentLoopData = $get_genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value='' hidden>ジャンルを選択してください</option>
                        <option value="<?php echo e($genre->id); ?>" <?php if((int)old('genre_id') === $genre->id): ?> selected <?php endif; ?>><?php echo e($genre->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </label>
            <label class="block mt-8">
            <span class="form_title">本文</span>
            <?php if($errors->first('content')): ?>
            <p class="explanation_white text-sm error">
                <?php echo nl2br($errors->first('content'), false); ?>

            </p>
            <?php endif; ?>
            <textarea
                    name="content" id="content"
                    value=""
                    class="schedule_form"
                    rows="5"
                    placeholder="本文を入力してください"
                    required
            ><?php echo e(old('content')); ?></textarea>
            </label>
        </div>
        <button type="submit" class="submit_button">
            記録
        </button>
        <button type="reset" class="submit_button modal_close">
            キャンセル
        </button>
    </div>
</form>
<?php /**PATH /work/resources/views/schedule/components/form.blade.php ENDPATH**/ ?>