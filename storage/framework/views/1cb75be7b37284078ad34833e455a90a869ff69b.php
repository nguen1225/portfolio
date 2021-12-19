<form action="<?php echo e(route('vital.post')); ?>" method="post">
    <?php echo csrf_field(); ?>
    <div class="">
        <h2 class="text-2xl font-bold"></h2>
        <div class="max-w-md">
            <label class="block mt-4">
                <span class="form_title">タイトル</span>
                <?php if($errors->first('title')): ?>
                <p class="explanation_white text-sm error">
                    <?php echo nl2br($errors->first('title'), false); ?>

                </p>
                <?php endif; ?>
                <input
                    id="title"
                    name="title"
                    value="<?php echo e(old('title')); ?>"
                    type="text"
                    class="vital_form"
                    required
                    placeholder="タイトルを入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">記録日</span>
                <input
                    id="registered_at"
                    name="registered_at"
                    value="<?php echo e(old('registered_at')); ?>"
                    type="date"
                    class="vital_form"
                    required
                    min="1900-01-01"
                    max="3000-12-31"
                >
            </label>
            <label class="block mt-4">
                <span class="form_title">身長</span>
                <?php if($errors->first('height')): ?>
                <p class="explanation_white text-sm error">
                    <?php echo nl2br($errors->first('height'), false); ?>

                </p>
                <?php endif; ?>
                <input
                id="height"
                name="height"
                value="<?php echo e(old('height')); ?>"
                type="text"
                class="vital_form"
                placeholder="身長を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">体重</span>
                <?php if($errors->first('body_weight')): ?>
                <p class="explanation_white text-sm error">
                    <?php echo nl2br($errors->first('body_weight'), false); ?>

                </p>
                <?php endif; ?>
                <input
                    id="body_weight"
                    name="body_weight"
                    value="<?php echo e(old('body_weight')); ?>"
                    type="text"
                    class="vital_form"
                    placeholder="体重を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">最高血圧</span>
                <?php if($errors->first('max_blood_pressure')): ?>
                <p class="explanation_white text-sm error">
                    <?php echo nl2br($errors->first('max_blood_pressure'), false); ?>

                </p>
                <?php endif; ?>
                <input
                    id="max_blood_pressure"
                    name="max_blood_pressure"
                    value="<?php echo e(old('max_blood_pressure')); ?>"
                    type="text"
                    class="vital_form"
                    placeholder="最高血圧を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">最低血圧</span>
                <?php if($errors->first('min_blood_pressure')): ?>
                <p class="explanation_white text-sm error">
                    <?php echo nl2br($errors->first('min_blood_pressure'), false); ?>

                </p>
                <?php endif; ?>
                <input
                    id="min_blood_pressure"
                    name="min_blood_pressure"
                    value="<?php echo e(old('min_blood_pressure')); ?>"
                    class="vital_form"
                    type="text"
                    placeholder="最低血圧を入力してください"
                />
            </label>
            <label class="block mt-4">
                <span class="form_title">心拍数(1分間)</span>
                <?php if($errors->first('heart_rate')): ?>
                <p class="explanation_white text-sm error">
                    <?php echo nl2br($errors->first('heart_rate'), false); ?>

                </p>
                <?php endif; ?>
                <input
                    id="heart_rate"
                    name="heart_rate"
                    value="<?php echo e(old('heart_rate')); ?>"
                    type="text"
                    class="vital_form"
                    placeholder="心拍数を入力してください"
                />
            </label>
            <label class="block mt-8">
                <span class="form_title">備考</span>
                <?php if($errors->first('content')): ?>
                <p class="explanation_white text-sm error">
                    <?php echo nl2br($errors->first('content'), false); ?>

                </p>
                <?php endif; ?>
                <textarea
                    id="content"
                    name="content"
                    value="<?php echo e(old('content')); ?>"
                    class="vital_form"
                    rows="5"
                    placeholder="本文を入力してください"
                ></textarea>
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
<?php /**PATH /work/resources/views/vital/components/form.blade.php ENDPATH**/ ?>