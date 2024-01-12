<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation Details</title>
</head>
<body>
    <h1>Reservation Details</h1>

    <h2>Hotel Configuration:</h2>
    <p>
        <strong>Age Group:</strong> <?php echo e($reservation->hotelConfiguration->age_group); ?><br>
        <strong>Max Persons:</strong> <?php echo e($reservation->hotelConfiguration->max_persons); ?>

    </p>

    <h2>Result:</h2>
    <?php $__currentLoopData = $rooms; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $room): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <p>Chambre <?php echo e($key + 1); ?>: <?php echo e(count(array_filter($room, fn($age) => $age >= 18))); ?> adulte + <?php echo e(count(array_filter($room, fn($age) => $age < 18))); ?> enfant</p>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    <!-- Add any other details you want to display -->

    <a href="<?php echo e(route('reservations.index')); ?>">Back to list Reservations</a>
</body>
</html>
<?php /**PATH C:\laragon\www\ReservationApp\resources\views/reservation/show.blade.php ENDPATH**/ ?>