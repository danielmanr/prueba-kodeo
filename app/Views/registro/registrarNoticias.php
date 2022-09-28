<?= $header; ?>



<h5>Crear Nueva Noticia</h5>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Ingrese los Datos de la Noticia</h5>
            <p class="card-text">

            <form method="post" action="<?= site_url('/guardarNoticia')?>" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="fecha">Fecha Noticia</label>
                    <input id="fecha" class="form-control" type="date" name="fecha">
                </div>

                <div class="form-group">
                    <label for="titular">Titular</label>
                    <input id="titular" class="form-control" type="text" name="titular">
                </div>

                <div class="form-group">
                    <label for="texto">texto</label>
                    <textarea class="form-control" id="texto" name="texto" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect2">Categorias</label>
                    <select multiple class="form-control" id="categoria" name="categoria">
                        <?php foreach($tbl_noticias_categorias as $categoria): ?>     
                        <option value ="<?php echo($categoria->id)?>"><?php echo($categoria->Nombre)?></option>
                        <?php endforeach; ?> 
                        
                    </select>
                </div>

                <div class="form-group">
                    <label for="slug">slug</label>
                    <input id="slug" class="form-control" type="text" name="slug">
                </div>

                <button class="btn btn-success" type="submit">publicar</button>
            </form>

     

            </p>
        </div>
    </div


<?= $footer; ?>