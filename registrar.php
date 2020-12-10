<?php
include("con_db.php");

if (isset($_POST['actualizacion'])) {
    if (strlen($_POST['sitioweb']) >= 1 && strlen($_POST['cam']) >= 1 && strlen($_POST['com']) >= 1 && strlen($_POST['por']) >= 1) {
        $sitioweb = trim($_POST['sitioweb']);
        $fecha = date("d/m/y H:i:s");
        $cam = trim($_POST['cam']);
        $com = trim($_POST['com']);
        $tipo = trim($_POST['tipo']);
        $por = trim($_POST['por']);
        $horaAct = date("H:i:s");
        $consulta = "INSERT INTO act_jk(sitioweb, fecha, cam, com, tipo, por, horaAct) VALUES ('$sitioweb','$fecha','$cam','$com','$tipo','$por','$horaAct')";
        //echo $consulta;
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <br />
            <div class="alert alert-secondary ok" role="alert">
              ¡Datos actualizados!
            </div>
            <div class="progress">
            <div class="progress-bar progress-bar-striped bg-success progress-bar-animated" role="progressbar" aria-valuenow="100" aria-valuemin="100" aria-valuemax="100" style="width: 100%"></div>
            </div>
           <?php
        } else {
            ?>
            <br />
            <div class="alert alert-danger bad" role="alert">
                ¡Ups ha ocurrido un error!
            </div>
            <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="50" aria-valuemax="100" style="width: 50%"></div>
            </div>
           <?php
        }
    }   else {
            ?>
            <br />
            <div class="alert alert-danger bad" role="alert">
                ¡Por favor complete los campos!
            </div>
            <div class="progress">
            <div class="progress-bar progress-bar-striped bg-danger progress-bar-animated" role="progressbar" aria-valuenow="5" aria-valuemin="5" aria-valuemax="100" style="width: 5%"></div>
            </div>
           <?php
    }
}

?>
