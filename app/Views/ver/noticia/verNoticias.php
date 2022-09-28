<?= $header; ?>
        <table class="table table-light">       
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Fecha Noticia</th>
                    <th>Titular</th>
                    <th>Categorias</th>
                    <th>slug</th>
                    <th>Opciones</th>
                </tr>        
            </thead>
            <tbody>
                <?php foreach($tbl_noticias as $noticia):?>
                <tr>
                    <td> <?=$noticia->id;?> </td>
                    <td><?=$noticia->FechaNoticia?></td>
                    <td><?=$noticia->Titular?></td>
                    <td><?=$noticia->Nombre?></td>
                    <td><?=$noticia->slug?></td>
                    <td>
                        <a href="<?=base_url('editarNoticia/'.$noticia->id)?>" class="btn btn-info" type="button">editar</a>

                        <a href="<?=base_url('borrarNoticia/'.$noticia->id)?>" class="btn btn-danger" type="button">borrar</a>

                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

<?= $footer; ?>