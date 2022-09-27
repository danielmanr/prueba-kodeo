<?= $header; ?>

<form method="post" action="<?= site_url('/loguear')?>" enctype="multipart/form-data">

  <div class="form-group">
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre"aria-describedby="emailHelp">
    <small id="" class="form-text text-muted">Debe estar Registrado Previamente.</small>
  </div>

  <div class="form-group">
    <label for="contrasena">Contrasena</label>
    <input type="password" class="form-control" id="contrasena" name="contrasena">
  </div>

  <div class="form-group form-check">
  </div>

  <button type="submit" class="btn btn-primary">Ingresar</button>

</form>

<?= $footer; ?>