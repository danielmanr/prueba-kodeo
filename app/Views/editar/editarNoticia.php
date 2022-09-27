<?= $header; ?>

<h5>Editar Noticia</h5>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingrese los Datos de la Noticia</h5>
            <p class="card-text">

            <form method="post" action="<?= site_url('/actualizarNoticia')?>" enctype="multipart/form-data">

                <input type="hidden" name="id" value="<?=$tbl_noticias['id']?>">

                <div class="form-group">
                    <label for="fecha">Fecha Noticia</label>
                    <input id="fecha" value="<?=$tbl_noticias['FechaNoticia']?> class="form-control" type="date" name="fecha">
                </div>


                <div class="form-group">
                    <label for="titular">Titular</label>
                    <input id="titular" value="<?=$tbl_noticias['Titular']?>" class="form-control" type="text" name="titular">
                </div>

                <div class="form-group">
                    <label for="texto">texto</label>
                    <textarea class="form-control" placeholder="<?=$tbl_noticias['Texto']?>" id="texto" name="texto" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Categorias</label>
                    <select multiple class="form-control" value="<?=$tbl_noticias['categoria_id']?>" id="categoria" name="categoria">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="slug">slug</label>
                    <input id="slug" value="<?=$tbl_noticias['slug']?>" class="form-control" type="text" name="slug">
                </div>

                <button class="btn btn-success" type="submit">Actualizar</button>

            </form>

            </p>
        </div>
    </div



<?= $footer; ?>