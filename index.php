<!DOCTYPE html>
<html lang="en">
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Actualizaciones · JkDev</title>
    <!-- CSS only -->
    <link href="ej.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <style type="text/css" media="screen">
      a {
        color: #9f0;
      }
      a:hover {
        color: #00FF00;
      }
    </style>

</head>
<body class="bg-dark">
  <div class="container">
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <h1 class="display-4 text-light">Historial Actividades</h1>
        <div class="hora-actual">
          <h2 id="HoraActual" class="text-light"></h2>
        </div>
        <p class="lead text-info">Sistema para almacenar actividades hechas en programación/trabajos</p>
        <button type="button" class="btn btn-outline-light" data-toggle="modal" data-target="#crearActividad">Crear Actividad</button>
        <script src="hora.js" type="text/javascript" charset="utf-8" async defer></script>
      </div>
    </div>
    <br />
    <div class="abs-table">
      <?php
        $link = new PDO('mysql:host=localhost;dbname=actualizaciones', 'root', '');
      ?>
      <table class="table table-dark table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">FECHA</th>
            <th scope="col">CAMBIOS</th>
            <th scope="col">COMENTARIOS</th>
            <th scope="col">TIPO</th>
            <th scope="col">POR</th>
          </tr>
        </thead>
        <?php foreach ($link->query('SELECT * from act_jk') as $row){ ?>
        <tbody>
          <tr>
            <th scope="row"><?php echo $row['id']; ?></th>
            <td><span class="text-muted" data-toggle="tooltip" data-placement="top" title="<?php echo $row['horaAct']; ?>"><?php echo $row['fecha']; ?></span></td>
            <td><a href="<?php echo $row['sitioweb']; ?>"><?php echo $row['cam']; ?></td>
            <td><span class="text-info"><?php echo $row['com']; ?></span></td>
            <td><?php echo $row['tipo']; ?></td>
            <td><span class="text-warning"><?php echo $row['por']; ?></span></td>
          </tr>
        </tbody>
        <?php
          }
        ?>
      </table>

      <div class="modal fade" id="crearActividad" tabindex="-1" role="dialog" aria-labelledby="actividadModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="actividadModal">Agregar Actividad</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
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
        </div>
      </div>
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </div>
  </div>
</div>
</body>
</html>
