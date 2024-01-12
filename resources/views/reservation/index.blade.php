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
    <a href="{{ route('reservation.create') }}">Réserver</a>

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
            @foreach ($reservations as $reservation)
                <tr>
                    <td>{{ $reservation->id }}</td>
                    <td>{{ $reservation->hotelConfiguration->age_group }}</td>
                    <td>{{ $reservation->ages }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Add any other HTML content or navigation links -->

</body>
</html>
