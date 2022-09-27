<?= $header; ?>
<br>

<nav class="navbar navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Administrador</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('listaUsuarios') ?>">Lista Usuarios<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('crear')?>">Crear Usuario</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('listaNoticias')?>">Lista Noticias</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="<?=base_url('registrarNoticia')?>">Crear Noticia</a>
      </li>
    </ul>
  </div>
</nav>

<br>
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