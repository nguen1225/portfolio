<?php $__env->startSection('body'); ?>
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8">
        <div>
            <h2>
                新規作成
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    日程を作成します。
                </a>
            </p>
        </div>
        <form class="mt-8 space-y-6" action="<?php echo e(route('sign_up')); ?>" method="POST">
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                <?php echo nl2br(session('flash_message'), false); ?>

                <?php echo nl2br($errors->first('password'), false); ?>

                </a>
            <?php echo csrf_field(); ?>
            <input type="hidden" name="remember" value="true">
            <div class="max-w-md">
                <label class="block mt-4">
                    <span class="form_title">名前</span>
                        <input
                        id="name"
                        name="name"
                        value="<?php echo e(old('name')); ?>"
                        type="text"
                        class="vital_form"
                        required
                        placeholder="名前を入力してください"
                    />
                <label class="block mt-4">
                    <span class="form_title">Email</span>
                        <input
                        id="email"
                        name="email"
                        value="<?php echo e(old('email')); ?>"
                        type="email"
                        class="vital_form"
                        required
                        placeholder="メールアドレスを入力してください"
                    />
                <label class="block mt-4">
                    <span class="form_title">パスワード</span>
                        <input
                        id="password"
                        name="password"
                        value="<?php echo e(old('password')); ?>"
                        type="password"
                        class="vital_form"
                        required
                        placeholder="パスワードを入力してください"
                    />
                <label class="block mt-4 mb-3">
                    <span class="form_title">確認用パスワード</span>
                        <input
                        id="reconfirmation_password"
                        name="reconfirmation_password"
                        value="<?php echo e(old('reconfirmation_password')); ?>"
                        type="password"
                        class="vital_form"
                        required
                        placeholder="確認用パスワードを入力してください"
                    />
            </div>
            <button type="submit" class="submit_button">
                送信
            </button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/sign_up/form.blade.php ENDPATH**/ ?>