<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <title>Task Manager</title>
</head>
<body>
    <h1>Új feladat</h1>
    <?php if(session('status')): ?>
        <div>
            <?php echo e(session('status')); ?>

        </div>
    <?php endif; ?>
    <form method="POST" action="<?php echo e(url('tasks/create')); ?>">
        <?php echo csrf_field(); ?>
        <div class="mb-3">
            <label for="title">Cím:</label>
            <input type="text" name="title" class="form-control" value="<?php echo e(old('title')); ?>">
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="description">Leírás: </label>
            <textarea name="description" class="form-control" rows="3"> <?php echo e(old('name')); ?></textarea>
            <?php $__errorArgs = ['description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for=""></label>
            <input type="checkbox" name="is_active" <?php echo e(old('is_Active') == true ? checked:''); ?>>
            <?php $__errorArgs = ['is_active'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <span><?php echo e($message); ?></span>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <button type="submit">Feltöltés</button>
        </div>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\task-manager-1\resources\views/tasks/create.blade.php ENDPATH**/ ?>