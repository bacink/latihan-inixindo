@php
    $numbers = [1, 2, 3];
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,
initial-scale=1">
    <title>Vanilla PHP "View" </title>
</head>

<body>
    <div>
        <h1>Vanilla PHP View </h1>
        <hr>
        <ul>
            @foreach ($numbers as $number)
                <li>Number is : {{ $number }}</li>
            @endforeach
        </ul>
    </div>
</body>

</html>
