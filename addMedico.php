<?php
    require_once('config/database_eloquent.php');
    require_once('Medico.php');

    if(!empty($_POST)){
        $medico = new Medico();
        $medico->registroMedico = $_POST['registro'];
        $medico->nombre = $_POST['nombre'];
        $medico->institucion = $_POST['institucion'];
        $medico->telefono = $_POST['telefono'];
        $medico->correoElectronico = $_POST['correo'];
        $medico->save();
    }
?>

<!DOCTYPE html>
<html>
<?php include_once('header.php') ?>
<body>
    <h1>Adicionar M&eacute;dico</h1>
    <a class="btn btn-primary" href="listaMedicos.php" role="button">Lista M&eacute;dicos</a>
    <form action="addMedico.php" method="post">
        <div class="form-group">
            <label for="">Registro M&eacute;dico:</label>
            <input type="text" name="registro" class="form-control" placeholder="Escribe el registro medico" required>
        </div>

        <div class="form-group">
            <label for="">Nombre:</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="">Instituci&oacute;n:</label>
            <input type="text" name="institucion" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="">Tel&eacute;fono:</label>
            <input type="text" name="telefono" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="">Correo electr&oacute;nico:</label>
            <input type="email" name="correo" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
