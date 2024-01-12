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
        <strong>Age Group:</strong> {{ $reservation->hotelConfiguration->age_group }}<br>
        <strong>Max Persons:</strong> {{ $reservation->hotelConfiguration->max_persons }}
    </p>

    <h2>Result:</h2>
    @foreach ($rooms as $key => $room)
        <p>Chambre {{ $key + 1 }}: {{ count(array_filter($room, fn($age) => $age >= 18)) }} adulte + {{ count(array_filter($room, fn($age) => $age < 18)) }} enfant</p>
    @endforeach

    <!-- Add any other details you want to display -->

    <a href="{{ route('reservations.index') }}">Back to list Reservations</a>
</body>
</html>
