<DOCTYPE html>
<html lang="en">
<title>QUERY</title>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Voter</title>
</head>
<body>
        <h1 align="center">Query</h1>
    <table border="1">
        @foreach ($voter as $vote)
        <tr>
            <!-- <td>Shepherd</td><td>Ju Peter</td>
            <td>Topman</td><td>Warcury</td>
            <td>Ethanbaron</td><td>V. Nusjuro</td> -->
            {{--@foreach ($voter as $vote)--}}
            <td>{{$vote->id}}</td>
            <td>{{$vote->name}}</td>
            <td>{{$vote->email}}</td>
            <td>{{$vote->address}}</td>
            {{--@endforeach--}}
        </tr>
        @endforeach
</table>
</body>
</html>