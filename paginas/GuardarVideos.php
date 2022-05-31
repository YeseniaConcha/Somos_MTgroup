<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GuardarVideo</title>
    <link rel="stylesheet" href="../assets/css/estilo.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-7">
                <div class="card px-5 py-4" id="form1">
                    <form action="../controlador/ControladorGuardarVideo.php" method="POST">
                        <div class="mb-3">
                            <h2>Ingreso de videos </h2>
                            <label for="formGroupExampleInput" class="form-label">Categoria</label>
                            <select name="categoria" class="form-select" aria-label="Default select example">
                                <option value="voz">Voz</option>
                                <option value="viento">Viento</option>
                                <option value="cuerda">Cuerda</option>
                                <option value="percusion">Percusión</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">URL</label>
                            <input name="url" type="text" class="form-control" id="formGroupExampleInput" placeholder="URL">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Nombre de video</label>
                            <input name="nombre" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Nombre de video">
                            <div class="mb-3"> <button type="submit" id="Iniciar" class="btn btn-primary w-100">Ingresar</button> </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>