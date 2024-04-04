<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{$title ?? 'Presto.it'}}</title>
</head>

<body>

    <div class="min-vh-100 ">
        {{$slot}}
    </div>




</body>

</html>