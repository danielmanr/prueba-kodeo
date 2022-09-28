<?= $header; ?>

<h5>Editar Usuario</h5>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingrese los Datos</h5>
            <p class="card-text">

            <form method="post" action="<?= site_url('/actualizarCategorias')?>" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?=$tbl_noticias_categorias['id']?>">

                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input id="nombre" value="<?=$tbl_noticias_categorias['Nombre']?>" class="form-control" type="text" name="nombre">
                </div>

                <button class="btn btn-success" type="submit">Actualizar</button>

            </form>

            </p>
        </div>
    </div


<?= $footer; ?>