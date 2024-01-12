<!-- resources/views/hotel_configuration/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Hotel Configuration</title>
</head>
<body>
    <h1>Create Hotel Configuration</h1>
    <form action="<?php echo e(route('hotel_configuration.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="age_group">Age Group:</label>
        <input type="text" name="age_group" required>
        <label for="max_persons">Max Persons:</label>
        <input type="number" name="max_persons" required>
        <button type="submit">Create Configuration</button>
    </form>
    <a href="<?php echo e(route('hotel_configuration.index')); ?>">Back to Configurations</a>
</body>
</html>
<?php /**PATH C:\laragon\www\ReservationApp\resources\views/hotel_configuration/create.blade.php ENDPATH**/ ?>