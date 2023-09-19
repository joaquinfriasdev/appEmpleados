<?php include("../../templates/header.php");?>

<br>

<div class="card">
    <div class="card-header">
    <a name="" id="" class="btn btn-primary" href="crear.php" role="button">Agregar usuarios</a>
    </div>
    <div class="card-body">
        <div class="table-responsive-sm">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre del usuario</th>
                        <th scope="col">Contraseña</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="">
                        <td scope="row">1</td>
                        <td>Joaquín Frías</td>
                        <td>****</td>
                        <td>joaquin@gmail.com</td>
                        <td><input name="btneditar" id="btneditar" class="btn btn-primary" type="button" value="Editar">|<input name="btneliminar" id="btneliminar" class="btn btn-danger" type="button" value="Eliminar"></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>

<?php include("../../templates/footer.php");?> 