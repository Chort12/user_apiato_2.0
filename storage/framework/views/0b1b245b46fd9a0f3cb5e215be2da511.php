<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('delete', $user->getId())); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit" class="btn btn-danger">Удалить</button>
    </form>
    <div>
        <a href="<?php echo e(route('edit', $user->getId())); ?>" class="btn btn-warning ">Редактировать</a>
    </div>

    <div>ID | <?php echo e($user->getId()); ?></div>
    <div>Имя | <?php echo e($user->getFName()); ?></div>
    <div>Фамилия | <?php echo e($user->getLName()); ?></div>
    <div>Отчёство | <?php echo e($user->getMName()); ?></div>
    <div>Дата рождения | <?php echo e($user->getBirthday()); ?></div>
    <div>Email | <?php echo e($user->getEmail()); ?></div>
    <div><img src="<?php echo e(url($user->getFirstMediaUrl())); ?>" alt="Аватарка пользователя"> </div>

    <a href="<?php echo e(route('index')); ?>" class="btn btn-dark">Вернуться назад</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('appSection@user::main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\PHP\Projects\Apiato\test\app\Containers\AppSection\User/UI/WEB/Views//show.blade.php ENDPATH**/ ?>