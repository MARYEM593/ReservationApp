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
    @if($errors->has('child_alone'))
    <div class="alert alert-danger">
        {{ $errors->first('child_alone') }}
    </div>
@endif
    <form action="{{ route('reservation.store') }}" method="post">
        @csrf
        <label for="hotel_configuration_id">Select Hotel Configuration:</label>
        <select name="hotel_configuration_id" id="hotel_configuration_id">
            @foreach ($configurations as $config)
                <option value="{{ $config->id }}">{{ $config->age_group }} - {{ $config->max_persons }} persons</option>
            @endforeach
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
