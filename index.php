<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="Includes/style.css">
    <title>CRUD-Carros</title>
</head>

<body>
    <header>
        <nav>

        </nav>
    </header>
    <main class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <header class="card-header">
                        <h2>INGRESANDO LOS DATOS DEL CARRO</h2>
                    </header>

                    <body class="card-body row g-3">

                        <form class="row g-3" action="Class/procesa_carros.php" method="post">
                            <div class="col-md-6">
                                <label class="form-label">Marca</label>
                                <input type="text" class="form-control" placeholder="Nissan" name="marca">
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Modelo</label>
                                <input type="text" class="form-control" placeholder="Frontier" name="modelo">
                            </div>
                            <div class="col-6">
                                <label class="form-label">ID</label>
                                <input type="text" class="form-control" placeholder="Ej: 12-A51-21" name="id">
                            </div>
                            <div class="col-6">
                                <label class="form-label">Número de placa</label>
                                <input type="number" class="form-control" placeholder="Ej: 1245" name="placa">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Descripción</label>
                                <textarea class="form-control" placeholder="Escriba una descripción" name="descrp"></textarea>

                            </div>

                            <div class="d-grid gap-2">
                                <button class="btn btn-primary" type="submit" name="enviar">Enviar</button>
                            </div>
                        </form>

                    </body>
                </div>
            </div>

            <div class="col">
                <div class="card ">
                    <header class="card-header">
                        <h2>Buscar un Carro por Placa</h2>
                    </header>
                    <form action="">

                        <body class="card-body cuerpo">
                            <div class="col-12">
                                <label class="form-label">Buscar placa</label>
                                <input class="typeahead form-control" type="text" placeholder="Buscar placa....">
                            </div>
                            <br>
                            <div class="d-grid gap-2">
                                <button class="btn btn-success" type="submit">Buscar</button>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-md-4">
                                    <img src=" " class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body" style="background-color:#f8f9fa;">
                                        <h5 class="card-title">ACA IRA INFORMACION</h5>
                                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                        <button type="submit" class="btn btn-secondary btn-sm">Editar</button>
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </div>
                                </div>
                            </div>

                        </body>
                    </form>
                </div>
            </div>
        </div>
        <div class="row">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Foto</th>
                        <th>Id</th>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tbody>

                </tbody>
            </table>

        </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>