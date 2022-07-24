<!DOCTYPE html>
<html lang="pt-br">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lara-crud</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">,

</head>
<body>

    <main>

        <section>
            <div class="container">
                <div class="row">
                    <div class="my-3 text-center">
                        <h3>LARAVEL + MYSQL - CRUD</h3>
                        <hr>
                    </div>
                    <div class="col-sm-12 col-lg-12">
                        @yield('content')
                    </div>
                </div>
            </div>
        </section>

    </main>

</body>
</html>