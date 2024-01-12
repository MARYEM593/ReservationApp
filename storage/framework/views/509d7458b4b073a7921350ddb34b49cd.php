<!-- resources/views/hotel_configuration/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Hotel Configuration</title>
</head>
<body>
    <h1>Edit Hotel Configuration</h1>
    <form action="<?php echo e(route('hotel_configuration.update', $hotelConfiguration)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <label for="age_group">Age Group:</label>
        <input type="text" name="age_group" value="<?php echo e($hotelConfiguration->age_group); ?>" required>
        <label for="max_persons">Max Persons:</label>
        <input type="number" name="max_persons" value="<?php echo e($hotelConfiguration->max_persons); ?>" required>
        <button type="submit">Update Configuration</button>
    </form>
    <a href="<?php echo e(route('hotel_configuration.index')); ?>">Back to Configurations</a>
</body>
</html>
<?php /**PATH C:\laragon\www\ReservationApp\resources\views/hotel_configuration/edit.blade.php ENDPATH**/ ?>