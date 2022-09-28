<?= $header; ?>
<br>
<?php $contador = 1 ;?>


<?php foreach($tbl_noticias as $noticia):  ?>
    <?php $contador = $contador + 1;?>
    <?php if($contador<=6):?>
<br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title"><?= var_dump($noticia['Titular']) ?></h5>
            <h6 class="card-subtitle mb-2 text-muted"><?= var_dump($noticia['Nombre']) ?></h6>
            <p class="card-text"> <?= var_dump($noticia['Texto'])?> </p>
        <a href=" <?=base_url('noticia/detalleNoticia/'.$noticia['slug'].'/'.$noticia['id'])?> " class="card-link">Detalle Noticia</a>
        </div>
    </div>
 <br>
<?php endif;?>
<?php endforeach;  ?>


<?= $footer; ?>