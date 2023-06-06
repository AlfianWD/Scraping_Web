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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">


</head>
<body>
    <div class="container">
        <h2>Web Scraping</h2>
        <form method="POST" action="/scrape">
            @csrf
            <div class="form-grup">
                <label for="url">Url : </label>
                <input type="text" name="url" class="form-control" autocomplete="off" placeholder="Input Url">
            </div>
            <input class="btn btn-outline-success" name="submit" type="submit" value="Scrape">
        </form>
    </div>
</body>
</html>