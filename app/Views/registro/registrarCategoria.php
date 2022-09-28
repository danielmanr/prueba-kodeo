<?= $header; ?>

<h5>Crear Categoria</h5>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingrese La Nueva Categoria</h5>
            <p class="card-text">

            <form method="post" action="<?= site_url('/guardarCategoria')?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" class="form-control" type="text" name="nombre">
                </div>

                <button class="btn btn-success" type="submit">Guardar</button>

            </form>

            </p>
        </div>
    </div


<?= $footer; ?>