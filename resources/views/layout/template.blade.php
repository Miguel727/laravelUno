<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            /* Asegura que el cuerpo ocupe al menos la altura de la ventana */
        }

        main {
            flex: 1;
            /* Hace que el contenido principal (excluyendo el pie de página) ocupe el espacio disponible */
        }
    </style>
</head>

<body>
    <main>
        <div class="container py-4">
<h1>@yield('title')</h1>
            @yield('content')


        </div>
    </main>
    <div class="py-4">
        <footer class="pt-3 mt-4 text-muted border-top text-center">
            Footer &copy;
        </footer>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>

</html>