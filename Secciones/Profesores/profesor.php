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
                                <input type="text" name="id" id="id" class="form-control" placeholder="ID..." value="<?php echo $id;?>" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nombre">Nombre Profesor:</label>
                                <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Nombre del profesor..." value="<?php echo $nombreProfe;?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="apellidos">Apellidos del Profesor:</label>
                                <input type="text" name="apellidos" id="apellidos" class="form-control" placeholder="apellidos del profesor" value="<?php echo $appProfe;?>" required>
                            </div>
                            <div class="mb-3">
                                <label for="email">Email del Profesor</label>
                                <input type="email" name="email" id="email" class="form-control" placeholder="profesor@example.com" value="<?php echo $emailProfe;?>" required>
                            </div>
                    </div>
                    <div class="card-footer">
                            <div class="btn-group" role="group" aria-label="Button group name">
                                <button type="submit" name="btnAccion" value="btnAdd" class="btn btn-outline-success"><i class="fas fa-save"></i></button>
                                <button type="submit" name="btnAccion" value="btnEdit" class="btn btn-outline-warning"><i class="fas fa-edit"></i></button>
                                <button type="submit" name="btnAccion" value="btnDelete" class="btn btn-outline-danger"><i class="fas fa-trash"></i></button>
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
                                    <form action="" method="post">
                                        <input type="hidden" name="id" id="id" value="<?php echo $profesor['id'];?>">
                                        <button type="submit" name="btnAccion" value="btnSelect" class="btn btn-outline-info"><i class="fas fa-hand-pointer"></i></button>
                                    </form>
                                    <button type="button" class="btn btn-outline-danger"><i class="fas fa-file-pdf"></i></button>
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