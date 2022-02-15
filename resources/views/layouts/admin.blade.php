<!doctype html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">

</head>
<body class="bg-dark text-white">

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 bg-dark text-white border-bottom">
        <h5 class="my-0 mr-md-auto font-weight-normal">VladiSlave</h5>
        <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
            <h5 class="my-0 mr-md-auto font-weight-normal">Панель Администратора</h5>
        </nav>
    </div>
    <div class="container">
        @yield('main_content')
    </div>

</body>
</html>

