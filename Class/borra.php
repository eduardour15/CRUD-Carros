<?php
include "Conecta.php";
include "Carros.php";
if (isset($_GET["placa"])) {
    $consulta_borra = "SELECT * FROM carros";
    $almc = $conecta->query($consulta_borra);
    $temporary_del = new Carro();
    while ($almc_borra = $almc->fetch_assoc()) {
        if ($almc_borra["placa"] == $_GET["placa"]) {
            $temporary_del->marca = $almc_borra["marca"];
            $temporary_del->id = $almc_borra["id"];
            $temporary_del->placa = $almc_borra["placa"];
            $temporary_del->descripcion = $almc_borra["descripcion"];
            $temporary_del->modelo = $almc_borra["modelo"];
        }
    } ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style-edita.css">
        <title>Borra carro</title>
    </head>

    <body>
        <main class="edita-carros">
            <header class="card-header">
                <h2>ELIMINANDO LOS DATOS DEL CARRO</h2>
            </header>

            <body class="card-body row g-3">
                <form class="row g-3" action="elimina_carros.php" method="post">
                    <div class="col-md-6">
                        <label class="form-label">Marca</label>
                        <input type="text" class="form-control" readonly placeholder="<?php echo $temporary_del->marca; ?>" name="marca">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Modelo</label>
                        <input type="text" class="form-control" readonly placeholder="<?php echo $temporary_del->modelo; ?>" name="modelo">
                    </div>
                    <div class="col-6">
                        <label class="form-label">ID</label>
                        <input type="text" class="form-control" readonly readonly placeholder="<?php echo $temporary_del->id; ?>" value=<?php echo $temporary_del->id; ?> name="id">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Número de placa</label>
                        <input type="number" class="form-control" readonly readonly placeholder="<?php echo $temporary_del->placa; ?>" value=<?php echo $temporary_del->placa; ?> name="placa">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" readonly placeholder="<?php echo $temporary_del->descripcion ?>" name="descrp"></textarea>

                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-danger" type="submit" name="elimina">Eliminar</button>
                    </div>
                </form>
            </body>
        </main>
    </body>

    </html>
<?php } ?>