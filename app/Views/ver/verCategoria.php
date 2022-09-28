<?= $header; ?>
<table class="table table-light">       
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>        
            </thead>
            <tbody>
                <?php foreach($tbl_noticias_categorias as $categoria):?>
                <tr>
                    <td> <?=$categoria['id'];?> </td>
                    <td><?=$categoria['Nombre']?></td>
                    <td>
                        <a href="<?=base_url('editarCategoria/'.$categoria['id'])?>" class="btn btn-info" type="button">editar</a>

                        <a href="<?=base_url('borrarCategoria/'.$categoria['id'])?>" class="btn btn-danger" type="button">borrar</a>

                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

<?= $footer; ?>