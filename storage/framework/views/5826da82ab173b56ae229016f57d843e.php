<!-- resources/views/hotel/index.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Configuration</title>
</head>
<body>
    <h1>Hotel Configuration</h1>
    <ul>
        <?php $__currentLoopData = $configurations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li><?php echo e($config->age_group); ?>: <?php echo e($config->max_persons); ?> persons</li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
</body>
</html>
<?php /**PATH C:\laragon\www\ReservationApp\resources\views/hotel/index.blade.php ENDPATH**/ ?>