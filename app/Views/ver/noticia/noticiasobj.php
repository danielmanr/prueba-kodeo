<?= $header; ?>
<br>
<?php $contador = 1 ;?>


<?php foreach($tbl_noticias as $noticia):  ?>
    <?php $contador = $contador + 1;?>
    <?php if($contador<=6):?>
<br>
    <div class="card" style="width: 18rem;">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title"><?= $noticia->Titular ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?= $noticia->Nombre ?></h6>
                    <p class="card-text"> <?= $noticia->Texto?> </p>
                <a href=" <?=base_url('noticia/detalleNoticia/'.$noticia->slug.'/'.$noticia->id)?> " class="card-link">Detalle Noticia</a>
            </div>
        </div>
    </div>
 <br>
<?php endif;?>
<?php endforeach;  ?>


<?= $footer; ?>