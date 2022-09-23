<?= $header; ?>
<a href="<?=base_url('crear')?>">Nuevo usuario</a>
        <table class="table table-light">       
            <thead class="thead-light">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>        
            </thead>
            <tbody>
                <?php foreach($tbl_usuarios as $usuario):?>
                <tr>
                    <td> <?=$usuario['id'];?> </td>
                    <td><?=$usuario['Nombre']?></td>
                    <td>Editar
                        <a href="<?=base_url('borrarUsuario/'.$usuario['id'])?>" class="btn btn-danger" type="button">borrar</a>

                        <a href="<?=base_url('borrarUsuario/'.$usuario['id'])?>" class="btn btn-danger" type="button">borrar</a>

                    </td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

<?= $footer; ?>