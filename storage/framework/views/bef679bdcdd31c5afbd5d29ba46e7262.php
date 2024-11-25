<?php $__env->startSection('content'); ?>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Отчество</th>
                <th scope="col">Дата рождения</th>
                <th scope="col">Email</th>
            </tr>
            </thead>
            <tbody>

            <a href=" <?php echo e(route('create')); ?> " class="btn btn-success m-2">Создать пользователя</a>

            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <th scope="row"><a href="<?php echo e(route('show', $user->getId())); ?>"><?php echo e($user->getId()); ?></a></th>
                    <td><?php echo e($user->getFName()); ?></td>
                    <td><?php echo e($user->getLName()); ?></td>
                    <td><?php echo e($user->getMName()); ?></td>
                    <td><?php echo e($user->getBirthday()); ?></td>
                    <td><?php echo e($user->getEmail()); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo e($users->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('appSection@user::main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH K:\PHP\Projects\Apiato\test\app\Containers\AppSection\User/UI/WEB/Views//index.blade.php ENDPATH**/ ?>