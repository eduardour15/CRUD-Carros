<?php
include "Carros.php";
include "Class/Conecta.php";
$consulta = "SELECT * FROM carros";
$almacena = $conecta->query($consulta);
?>
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

                        <form class="row g-3" action="procesa_carros.php" method="post">
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
                <header class="card-header">
                    <h2>Buscar un Carro por Placa</h2>
                </header>

                <body>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" class="look-up" method="post">
                        <div class="col-12">
                            <label class="form-label">Buscar placa</label>
                            <input class="typeahead form-control" type="text" placeholder="Buscar placa...." name="busPlaca">
                        </div> <br>
                        <div class="d-grid gap-2">
                            <button class="btn btn-success" type="submit" name="buscar">Buscar</button>
                        </div>
                        <table class="table table-hover look-up-table">
                            <thead>
                                <th>Id</th>
                                <th>Placa</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Descripción</th>
                                <th>Acción</th>
                            </thead>
                        <?php
                        if(isset($_POST["buscar"])){
                        while($tempo=$almacena->fetch_assoc()){
                            if($tempo["placa"]==$_POST["busPlaca"]){ ?>
                                <tbody>
                                <tr>
                                    <td> <?php echo $tempo['id'] ?></td>
                                    <td> <?php echo $tempo['placa'] ?></td>
                                    <td> <?php echo $tempo['marca'] ?></td>
                                    <td> <?php echo $tempo['modelo'] ?></td>
                                    <td> <?php echo $tempo['descripcion'] ?></td>
                                    <td>
                                        <button type="submit" class="btn btn-secondary btn-sm">Editar </button>
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        <?php
                            break;
                            } 
                        }
                        
                    }
                        ?>
                        
                            
                        </table>
                    </form>
                </body>
            </div>
        </div>
        <div class="row">

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Id</th>
                        <th>Placa</th>
                        <th>Marca</th>
                        <th>Modelo</th>
                        <th>Descripción</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $almacena2=$conecta->query($consulta);
                    $i = 1;
                    while ($almc = $almacena2->fetch_assoc()) { ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td> <?php echo $almc['id']; ?></td>
                            <td> <?php echo $almc['placa']; ?></td>
                            <td> <?php echo $almc['marca']; ?></td>
                            <td> <?php echo $almc['modelo']; ?></td>
                            <td> <?php echo $almc['descripcion']; ?></td>
                        </tr>
                    <?php
                        $i++;
                    } ?>
                </tbody>
            </table>

        </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>