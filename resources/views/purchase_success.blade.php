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
        PURCHASE SUCCESS
        <h2>Ticket Details</h2>
        <table>
            <tr>
                <th>Attribute</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>User ID</td>
                <td>{{ $ticket->user_id }}</td>
            </tr>
            <tr>
                <td>Flight Number</td>
                <td>{{ $ticket->flight_number }}</td>
            </tr>
            <tr>
                <td>Departure City</td>
                <td>{{ $ticket->departure_city }}</td>
            </tr>
            <tr>
                <td>Arrival City</td>
                <td>{{ $ticket->arrival_city }}</td>
            </tr>
            <tr>
                <td>Departure Time</td>
                <td>{{ $ticket->departure_time }}</td>
            </tr>
            <tr>
                <td>Arrival Time</td>
                <td>{{ $ticket->arrival_time }}</td>
            </tr>
            <tr>
                <td>Price</td>
                <td>{{ $ticket->price }}</td>
            </tr>
            <tr>
                <td>Seat Number</td>
                <td>{{ $ticket->seat_number }}</td>
            </tr>
            <tr>
                <td>Class</td>
                <td>{{ $ticket->class }}</td>
            </tr>
        </table>
    </div>
</body>
</html>

<!-- http://127.0.0.1:8000/ -->
<!-- http://127.0.0.1:5500/ -->