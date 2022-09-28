<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

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
                        <a class="nav-link" href="<?=base_url('verNoticias')?>">Lista Noticias</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url('registrarNoticia')?>">Crear Noticia</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url('verCategoria')?>">Lista Categorias</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url('crearCategoria')?>">Crear Categoria</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="<?=base_url('salir')?>">Crear Categoria</a>
                    </li>
                </ul>
            </div>
    </nav>
</head>

    
