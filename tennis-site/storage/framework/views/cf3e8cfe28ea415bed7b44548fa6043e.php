<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
        content="width=device-width, user-scalable=no, initial-scale=1.0,
        maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>つぶやきアプリ</title>
</head>
<body>
    <h1>つぶやきアプリ</h1>
    <?php if(auth()->guard()->check()): ?>
        <div>
            <p>投稿フォーム</p>
            <?php if(session('feedback.success')): ?>
                <p style="color: green"><?php echo e(session('feedback.success')); ?></p>
            <?php endif; ?>
            <form action="<?php echo e(route('tweet.create')); ?>" method="post">
                <?php echo csrf_field(); ?>
                <label for="tweet-content">つぶやき</label>
                <span>140字まで</span>
                <textarea id="tweet-content" type="text" name="tweet" placeholder="つぶやきを入力"></textarea>
                <?php $__errorArgs = ['tweet'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <p style="color: red;"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                <button type="submit">投稿</button>
            </form>
        </div>
    <?php endif; ?>
    <div>
    <?php $__currentLoopData = $tweets; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tweet): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <details>
            <summary><?php echo e($tweet->content); ?> by <?php echo e($tweet->user->name); ?></summary>
            <?php if(\Illuminate\Support\Facades\Auth::id() === $tweet->user_id): ?>
                <div>
                    <a href="<?php echo e(route('tweet.update.index', ['tweetId' => $tweet->id])); ?>">編集</a>
                    <form action="<?php echo e(route('tweet.delete', ['tweetId' => $tweet->id])); ?>" method="post">
                        <?php echo method_field('DELETE'); ?>
                        <?php echo csrf_field(); ?>
                        <button type="submit">削除</button>
                    </form>
                </div>
            <?php else: ?>
                編集できません
            <?php endif; ?>
        </details>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</body>
</html><?php /**PATH /var/www/html/resources/views/tweet/index.blade.php ENDPATH**/ ?>