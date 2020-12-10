<!DOCTYPE html>
<html>
<head>
    <title>Actualización · JkDev</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="ej.css" rel="stylesheet">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="abs-center">
            <div class="card">
                <div class="card-body">
                    <form method="post">
                        <div class="form-row">
                            <div class="form-group">
                                <label class="text-danger" for="input1">Sitio Web</label>
                                <input type="text" class="form-control" name="sitioweb" placeholder="http://sitioweb.com" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="text-danger" for="input2">Cambios</label>
                                <input type="tex" class="form-control" name="cam" placeholder="Titulo Cambio" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="text-danger" for="input3">Comentarios</label>
                                <input type="text" class="form-control" name="com" placeholder="Comentario" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <label class="text-danger" for="input4">Tipo</label>
                                <select id="tipo" class="form-control" name="tipo" class="form-control" autocomplete="off">
                                    <option name="Plugin">Plugin</option>
                                    <option name="Actualización">Actualización</option>
                                    <option name="Mantenimiento">Mantenimiento</option>
                                    <option name="Configuración">Configuración</option>
                                    <option name="Usuario">Usuario</option>
                                    <option name="Respaldo">Respaldo</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="text-danger" for="input4">Realizado</label>
                                <input type="text" class="form-control" name="por" placeholder="JkDev" autocomplete="off">
                            </div>
                        </div>
                        <br />
                        <input type="submit" class="btn btn-primary" name="actualizacion">
                    </form>
                <?php
                    include("registrar.php");
                ?>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
