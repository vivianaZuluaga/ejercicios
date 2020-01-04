<?php
    require_once('config/database_eloquent.php');
    require_once('Medico.php');
    $medicos = Medico::all();
?>

<!DOCTYPE html>
<html>
<?php include('header.php') ?>
<body>
    <h1>Lista de M&eacute;dicos</h1>
    <a class="btn btn-primary" href="addMedico.php" role="button">Agregar M&eacute;dico</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Registro M&eacute;dico</th>
                <th>Nombre</th>
                <th>Instituci&oacute;n</th>
                <th>Tel&eacute;</th>
                <th>Correo Electr&oacute;nico</th>
                <th>Fecha Registro</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($medicos as $key => $medico): ?>
                <tr>
                    <td><?php echo $medico->registroMedico; ?></td>
                    <td><?php echo $medico->nombre; ?></td>
                    <td><?php echo $medico->institucion; ?></td>
                    <td><?php echo $medico->telefono; ?></td>
                    <td><?php echo $medico->correoElectronico; ?></td>
                    <td><?php echo $medico->fechaRegistro; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
