<?= $header; ?>

<h5>Crear Usuario</h5>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingrese los Datos</h5>
            <p class="card-text">

            <form method="post" action="<?= site_url('/guardar')?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" class="form-control" type="text" name="nombre">
                </div>

                <div class="form-group">
                    <label for="contrasena">contrasena</label>
                    <input id="contrasena" class="form-control-file" type="password" name="contrasena">
                </div>

                <button class="btn btn-success" type="submit">Guardar</button>

            </form>

            </p>
        </div>
    </div


<?= $footer; ?>