<?php
include "Conecta.php";
include "Carros.php";

$consulta = "SELECT * FROM carros";
$almc = $conecta->query($consulta);
$car_temporary = new Carro();
if (isset($_GET["placa"])) {
    while ($tempo = $almc->fetch_assoc()) {
        if ($tempo["placa"] == $_GET["placa"]) {
            $car_temporary->marca = $tempo["marca"];
            $car_temporary->id = $tempo["id"];
            $car_temporary->placa = $tempo["placa"];
            $car_temporary->descripción = $tempo["descripcion"];
            $car_temporary->modelo = $tempo["modelo"];
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Editando carros</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="style-edita.css">
    </head>
    <body>
        <main class="edita-carros">
            <header class="card-header">
                <h2>ACTUALIZANDO LOS DATOS DEL CARRO</h2>
            </header>

            <body class="card-body row g-3">

                <form class="row g-3" action="actualiza_carro.php" method="post">
                    <div class="col-md-6">
                        <label class="form-label">Marca</label>
                        <input type="text" class="form-control" placeholder="<?php echo $car_temporary->marca; ?>" name="marca">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Modelo</label>
                        <input type="text" class="form-control" placeholder="<?php echo $car_temporary->modelo; ?>" name="modelo">
                    </div>
                    <div class="col-6">
                        <label class="form-label">ID</label>
                        <input type="text" class="form-control" readonly placeholder="<?php echo $car_temporary->id; ?>" value=<?php echo $car_temporary->id; ?> name="id">
                    </div>
                    <div class="col-6">
                        <label class="form-label">Número de placa</label>
                        <input type="number" class="form-control" readonly placeholder="<?php echo $car_temporary->placa; ?>" value=<?php echo $car_temporary->placa; ?> name="placa">
                    </div>
                    <div class="col-12">
                        <label class="form-label">Descripción</label>
                        <textarea class="form-control" placeholder="<?php echo $car_temporary->descripcion ?>" name="descrp"></textarea>

                    </div>

                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit" name="edita">Actualizar</button>
                    </div>
                </form>

            </body>
        </main>
    </body>
    </html>

<?php } ?>