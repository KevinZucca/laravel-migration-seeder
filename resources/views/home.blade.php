<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>


    <table class="table">
        <thead>
        <tr>
            <th scope="col">Agency</th>
            <th scope="col">Start Station</th>
            <th scope="col">Arrival Station</th>
            <th scope="col">Start Time</th>
            <th scope="col">Arrival Time</th>
            <th scope="col">Train Code</th>
            <th scope="col">Carriages Number</th>
            <th scope="col">Is in Time</th>
            <th scope="col">Is Canceled</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($trains as $singleTrain)
                <tr>
                    <td>{{$singleTrain->agency}}</td>
                    <td>{{$singleTrain->start_station}}</td>
                    <td>{{$singleTrain->arrival_station}}</td>
                    <td>{{$singleTrain->start_time}}</td>
                    <td>{{$singleTrain->arrival_time}}</td>
                    <td>{{$singleTrain->train_code}}</td>
                    <td>{{$singleTrain->carriages_number}}</td>
                    <td>{{$singleTrain->is_in_time}}</td>
                    <td>{{$singleTrain->is_canceled}}</td>
                </tr>
            @endforeach
       
        </tbody>
    </table>


</body>

</html>