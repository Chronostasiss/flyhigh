<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Airline Booking System</title>
    @vite('resources/css/app.css')
</head>
<body>
    @include('components.navbar.navbar')
    <div>
        <!-- resources/views/ticket_form.blade.php -->

        <form action="/tickets" method="POST">
            @csrf <!-- Include CSRF token for security -->
            <label for="flight_number">Flight Number:</label>
            <input type="text" id="flight_number" name="flight_number" value="AA123"><br>
            
            <label for="departure_city">Departure City:</label>
            <input type="text" id="departure_city" name="departure_city" value="New York"><br>
            
            <label for="arrival_city">Arrival City:</label>
            <input type="text" id="arrival_city" name="arrival_city" value="Los Angeles"><br>
            
            <label for="departure_time">Departure Time:</label>
            <input type="datetime-local" id="departure_time" name="departure_time" value="2024-06-01T12:00"><br>
            
            <label for="arrival_time">Arrival Time:</label>
            <input type="datetime-local" id="arrival_time" name="arrival_time" value="2024-06-01T15:00"><br>
            
            <label for="price">Price:</label>
            <input type="number" id="price" name="price" step="0.01" value="299.99"><br>
            
            <label for="seat_number">Seat Number:</label>
            <input type="text" id="seat_number" name="seat_number" value="12A"><br>
            
            <label for="class">Class:</label>
            <input type="text" id="class" name="class" value="Economy"><br>
            
            <button type="submit">Submit</button>
        </form>

    </div>
</body>
</html>

<!-- http://127.0.0.1:8000/ -->
<!-- http://127.0.0.1:5500/ -->