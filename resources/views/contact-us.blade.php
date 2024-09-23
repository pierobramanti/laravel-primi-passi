<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>I Miei Primi Passi</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header class="bg-danger py-4 px-2">
        <div class="container">
            <ul class="list-unstyled d-flex">
                <li class="px-2"><a href="{{ route('home') }}" class="text-white fs-5 text-decoration-none fw-bold">Home</a></li>
                <li class="px-2"><a href="{{ route('about-us') }}" class="text-white fs-5 text-decoration-none fw-bold">Chi siamo</a></li>
                <li class="px-2"><a href="{{ route('contact-us') }}" class="text-white fs-5 text-decoration-none fw-bold">Contattaci</a></li>
                <li class="px-2"><a href="{{ route('social') }}" class="text-white fs-5 text-decoration-none fw-bold">I nostri social</a></li>
            </ul>
        </div>
    </header>

    <!-- Main -->
    <main class="my-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                <p>{{$msg}}</p>
                </div>
            </div>
        </div>
    </main>

</body>
</html>
