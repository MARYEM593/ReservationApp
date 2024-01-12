<!-- resources/views/reservation/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Reservation</title>
</head>
<body>
    <h1>Create Reservation</h1>
    <?php if($errors->has('child_alone')): ?>
    <div class="alert alert-danger">
        <?php echo e($errors->first('child_alone')); ?>

    </div>
<?php endif; ?>
    <form action="<?php echo e(route('reservation.store')); ?>" method="post">
        <?php echo csrf_field(); ?>
        <label for="hotel_configuration_id">Select Hotel Configuration:</label>
        <select name="hotel_configuration_id" id="hotel_configuration_id">
            <?php $__currentLoopData = $configurations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $config): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($config->id); ?>"><?php echo e($config->age_group); ?> - <?php echo e($config->max_persons); ?> persons</option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <script>
            function replaceSemicolon() {
                var agesInput = document.getElementById('agesInput');
                agesInput.value = agesInput.value.replace(/;/g, ',').replace(/\b0+/g, '');
            }
        </script>
        <label for="ages">Enter Ages (comma separated):</label>
        <input type="text" name="ages" id="agesInput" onchange="replaceSemicolon()" required>

        <button type="submit">Submit</button>
    </form>
</body>

</html>
<?php /**PATH C:\laragon\www\ReservationApp\resources\views/reservation/create.blade.php ENDPATH**/ ?>