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
    <a href="{{ route('hotel_configuration.create') }}">Create New Configuration</a>

    @if ($configurations->count() > 0)
        <ul>
            @foreach ($configurations as $config)
                <li>
                    {{ $config->age_group }} - {{ $config->max_persons }} persons
                    <a href="{{ route('hotel_configuration.edit', $config) }}">Edit</a>
                    <form action="{{ route('hotel_configuration.destroy', $config) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </li>
            @endforeach
        </ul>
    @else
        <p>No configurations found.</p>
    @endif
</body>
</html>
