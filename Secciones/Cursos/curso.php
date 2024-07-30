<?php 
    include("../../templates/encabezado.php");
    include("cursoControlador.php");
?>
        <div class="container">
            <div class="row">
                <div class="col-5">
                    <div class="card">
                        <div class="card-header">Cursos</div>
                        <div class="card-body">
                            <form action="" method="post">
                            <div class="mb-3">
                                <label for="id">ID: </label>
                                <input type="text" name="id" id="id" class="form-control" placeholder="ID..." value="" readonly>
                            </div>
                            <div class="mb-3">
                                <label for="nombre_curso">ID: </label>
                                <input type="text" name="nombre_curso" id="nombre_curso" class="form-control" placeholder="Nombre del Curso" value="">
                            </div>
                            <div class="mb-3">
                                <label for="idProf">Profesor</label>
                                <select name="idProf" id="idProf" class="form-control">
                                    <option>Seleccione una Opción</option>
                                    <option value="">Juan Escobar López</option>
                                    <option value="">Laura Hernandez Balcazar</option>
                                </select>
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
                                    <th scope="col">Nombre del Curso</th>
                                    <th scope="col">Profesor que imparte</th>
                                    <th scope="col">Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($lstCursos as $curso){?>
                                <tr>
                                    <th scope="row"><?php echo $curso['id']; ?></th>
                                    <td><?php echo $curso['Curso']; ?></td>
                                    <td><?php echo $curso['Profesor']; ?></td>
                                    <td>
                                    <form action="" method="post">
                                        <!--<input type="hidden" name="id" id="id" value="<?php //echo $profesor['id'];?>">-->
                                        <button type="submit" name="btnAccion" value="btnSelect" class="btn btn-outline-info"><i class="fas fa-hand-pointer"></i></button>
                                    </form>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
<?php 
    include("../../templates/pie.php");
?>