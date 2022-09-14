<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<header>
        <div class="d-flex justify-content-between px-5 my-2">
            <div class="logo"><strong>LOGO</strong></div>
            <div class="menu">
                <ul class="list-unstyled d-flex">
                    <li><a class="text-decoration-none mx-2 text-dark" href="{{ url('/home') }}">{{ $home }}</a></li>
                    <li><a class="text-decoration-none mx-2 text-dark" href="{{ url('/contact') }}">{{ $contact }}</a></li>
                    <li><a class="text-decoration-none mx-2 text-dark" href="{{ url('/about') }}">{{ $about }}</a></li>
                    <li><a class="text-decoration-none mx-2 text-dark" href="{{ url('/blog') }}">{{ $blog }}</a></li>
                </ul>
            </div>
        </div>
    </header>
    <h1 class="display-1 text-center">About page</h1>
</body>
</html>