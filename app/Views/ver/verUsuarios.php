<?= $header; ?>
<a href="<?=base_url('../registro/registrarUsuario.php')?>">Nuevo usuario</a>
<?php print_r($tbl_usuarios) ?>

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
                    <td>borrar/Editar</td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>

<?= $footer; ?>