<?php include("../../templates/header.php"); ?>
<br>
<div class="card">
    <div class="card-header">
        Datos del empleado
    </div>
    <div class="card-body">
        <form action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="nombre" aria-describedby="helpId" placeholder="Nombre">
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="apellido" aria-describedby="helpId" placeholder="Apellido">
            </div>
            <div class="mb-3">
                <label for="foto" class="form-label">Foto:</label>
                <input type="fIle" class="form-control" name="foto" id="foto" aria-describedby="helpId">
            </div>
            <div class="mb-3">
                <label for="cv" class="form-label">CV(PDF):</label>
                <input type="fIle" class="form-control" name="cv" id="cv" aria-describedby="helpId" placeholder="CV">
            </div>
            <div class="mb-3">
                <label for="puesto" class="form-label">Puesto:</label>
                <select class="form-select form-select-sm" name="puesto" id="idpuesto">
                    <option selected>Select one</option>
                    <option value="">New Delhi</option>
                    <option value="">Istanbul</option>
                    <option value="">Jakarta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="fechadeingreso" class="form-label">Fecha de ingreso:</label>
                <input type="date" class="form-control" name="fechadeingreso" id="fechadeingreso" aria-describedby="emailHelpId" placeholder="Fecha de ingreso">
            </div>

            <button type="submit" class="btn btn-success">Agregar registro</button>
            <a name="" id="" class="btn btn-primary" href="index.php" role="button">Cancelar</a>

        </form>
    </div>

</div>

<?php include("../../templates/footer.php"); ?>