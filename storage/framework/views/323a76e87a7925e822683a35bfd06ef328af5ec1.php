<?php $__env->startSection('body'); ?>
<div class="flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="flex items-center justify-center bg-gray-700 p-6 rounded-lg shadow-2xl">
        <div class="max-w-md lg:w-96 md:w-96 sm:w-full space-y-8">
        <div>
            <h2>
            パスワード変更
            </h2>
            <p class="mt-2 text-sm text-gray-600 text-center">
            <a class="explanation_white">
                大文字・小文字・数字をそれぞれ1つ以上含む、<br>6文字以上の半角英数字で入力してください。
            </a>
            </p>
        </div>
        <form class="mt-8 space-y-6" action="<?php echo e(route('password.update', $get_user->id)); ?>" method="POST">
            <p class="mt-2 text-sm text-gray-600 text-center">
                <a class="explanation_white">
                    <?php echo nl2br(session('flash_message'), false); ?>

                    <?php echo nl2br($errors->first('change_password'), false); ?>

                </a>
            <?php echo csrf_field(); ?>
            <input type="hidden" name="remember" value="true">
            <div class="rounded-md shadow-sm -space-y-px">
            <div class="mb-6">
                <label for="change_password" class="sr-only">change_password</label>
                <input id="change_password" name="change_password" type="password" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="新しいパスワード">
            </div>
            <div>
                <label for="reconfirmation_password" class="sr-only">reconfirmation_password</label>
                <input id="reconfirmation_password" name="reconfirmation_password" type="password" autocomplete="email" required class="appearance-none rounded-none relative block w-full px-3 py-2 border border-gray-300 placeholder-gray-500 text-gray-900 rounded-b-md rounded-t-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 focus:z-10 sm:text-sm" placeholder="確認用">
            </div>
            </div>

            <div>
            <button type="submit" class="submit_button group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text- bg-gray-50 hover:bg-gray-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-5">
                送信
            </button>
            </div>
        </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.detail', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /work/resources/views/password/edit.blade.php ENDPATH**/ ?>