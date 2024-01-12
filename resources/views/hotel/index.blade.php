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
        @foreach ($configurations as $config)
            <li>{{ $config->age_group }}: {{ $config->max_persons }} persons</li>
        @endforeach
    </ul>
</body>
</html>
