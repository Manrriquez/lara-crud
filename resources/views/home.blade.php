<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
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
                        <div class="d-flex justify-content-center text-center">
                            <div class="w-50 my-3">
                                <div class="text-center my-5">
                                    <h4>Para visualizar a tabela da sua preferencia clique no botão abaixo:</h4>
                                </div>
                                <div class="d-flex justify-content-around">
                                    <a href="{{ route('categories.index') }}" class="btn btn-lg btn-secondary">Ir para categorias</a>        
                                    <a href="{{ route('products.index') }}" class="btn btn-lg btn-secondary">Ir para produtos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    
</body>
</html>