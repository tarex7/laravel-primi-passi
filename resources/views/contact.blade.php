<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
<header>
        <div class="d-flex justify-content-between px-5 my-2">
            <div class="logo"><strong>LOGO</strong></div>
            <div class="menu">
                <ul class="list-unstyled d-flex">
                @foreach ($menu as $key=>$link)
                    <li><a class="text-decoration-none mx-2 text-dark" href="{{ $key }}">{{ $link }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </header>
    <h1 class="display-1 text-center">Contact page</h1>
</body>
</html>