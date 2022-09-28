<?= $header; ?>

<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet"/>
<div class="row borde">
  <div class="offset-1 col-10">
    <div class="row">
      <div 
    </div>
      <div 
    </div>
      <div 
      <div class="mx-auto">
        </div>
    </div>
    </div>
  </div>
</div>


<div class="mx-auto">
<div class="card border-dark mb-3" style="max-width: 45rem;">
  <h5 div class="card-header"><?=$tbl_noticias['Nombre']?></h5>
  <div class="card-body text-dark">
    <h5 class="card-title"><?=$tbl_noticias['Titular']?></h5>
    <p class="card-text"><?=$tbl_noticias['Texto']?></p>
  </div>
</div>
<a href="<?=base_url('noticia')?>" button type="button" class="btn btn-primary btn-lg">Ver Mas</a>
<a href="<?=base_url('salir')?>" type="button" class="btn btn-secondary btn-lg">Inicio</a>
</div>

<?= $footer; ?>