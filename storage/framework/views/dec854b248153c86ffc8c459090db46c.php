<!-- resources/views/reservation/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Reservations</title>
</head>
<body>
    <h1>All Reservations</h1>
    <a href="<?php echo e(route('reservation.create')); ?>">Réserver</a>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Hotel Configuration</th>
                <th>Ages</th>
                <!-- Add any other columns you want to display -->
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $reservations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reservation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($reservation->id); ?></td>
                    <td><?php echo e($reservation->hotelConfiguration->age_group); ?></td>
                    <td><?php echo e($reservation->ages); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>

    <!-- Add any other HTML content or navigation links -->

</body>
</html>
<?php /**PATH C:\laragon\www\ReservationApp\resources\views/reservation/index.blade.php ENDPATH**/ ?>