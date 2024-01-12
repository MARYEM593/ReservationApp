<!-- resources/views/hotel_configuration/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Configurations</title>
</head>
<body>
    <h1>Hotel Configurations</h1>
    <a href="<?php echo e(route('hotel_configuration.create')); ?>">Create New Configuration</a>

    <?php if($configurations->count() > 0): ?>
        <ul>
            <?php $__currentLoopData = $configurations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo e($config->age_group); ?> - <?php echo e($config->max_persons); ?> persons
                    <a href="<?php echo e(route('hotel_configuration.edit', $config)); ?>">Edit</a>
                    <form action="<?php echo e(route('hotel_configuration.destroy', $config)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button type="submit">Delete</button>
                    </form>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php else: ?>
        <p>No configurations found.</p>
    <?php endif; ?>
</body>
</html>
<?php /**PATH C:\laragon\www\ReservationApp\resources\views/hotel_configuration/index.blade.php ENDPATH**/ ?>