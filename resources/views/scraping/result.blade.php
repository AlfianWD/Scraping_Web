<!-- Created By Alfian Wahyu -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Scriping_Web</title>

    <!-- favicon -->
    <link rel="icon" type="image/png" href="{{ asset('img/icon.png') }}" >

    <!-- CSS -->
    <link rel="stylesheet" href="{{ asset('/css/app2.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <h2>Hasil Scraping</h2>
        <div class="result">
            <h4>Title: </h4>
            <p> {{ $title }} </p>
        </div>
        <div class="result">
            <h4>Creator: </h4>
            <p>
            @foreach ($creators as $creator)
                @if (is_array($creator))
                    @foreach ($creator as $item)
                        {{ $item }}<br>
                    @endforeach
                @else
                    {{ $creator }}<br>
                @endif
            @endforeach
            </p>
        </div>
        <div class="result">
            <h4>Date: </h4>
            <p> {{ $date }} </p>
        </div>
        <div class="button">
            <a class="btn btn-outline-danger" href="/">Exit</a>
        </div>
    </div>
</body>
</html>