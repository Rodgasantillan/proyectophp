<?php 
    include("../../templates/encabezado.php");
    include("profesorControlador.php");
?>
    <div class="container">
        <div class="row">
            <div class="col-5">
                <div class="card">
                    <div class="card-header">Profesores</div>
                    <div class="card-body">
                        <form action="" method="post">
                            <div class="mb-3">
                                <label for="id">ID: </label>
                                <input type="text" name="id" id="id" class="form-control" placeholder="ID..." value="" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nombre">Nombre Profesor:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del profesor..." required>
                            </div>
                            <div class="mb-3">
                                <label for="apellidos">Apellidos del Profesor:</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="apellidos del profesor" required>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email del Profesor</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="profesor@example.com" required>
                            </div>
                    </div>
                    <div class="card-footer">
                            <div class="btn-group" role="group" aria-label="Button group name">
                                <button type="submit" class="btn btn-outline-success">Registrar</button>
                                <button type="submit" class="btn btn-outline-warning">Editar</button>
                                <button type="submit" class="btn btn-outline-danger">Eliminar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-7">
                <div class="table">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellidos</th>
                                <th scope="col">Email</th>
                                <th scope="col">Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($profesores as $profesor): ?>
                            <tr>
                                <th scope="row"><?php echo $profesor['id'];?></th>
                                <td><?php echo $profesor['nombre']; ?></td>
                                <td><?php echo $profesor['apellidos']; ?></td>
                                <td><?php echo $profesor['email']; ?></td>
                                <td>
                                    <form action="" method="">
                                        <button type="submit" class="btn btn-outline-info">Seleccionar</button>
                                    </form>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php 
    include("../../templates/pie.php");
?>