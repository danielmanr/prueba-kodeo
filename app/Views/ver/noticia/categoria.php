<?= $header; ?>

    
    <br>

    <?php foreach ($tbl_noticias_categorias as $categoria):?>
        
        <a href="categoria/<?=($categoria->Nombre)?>" class="btn btn-primary" role="button"><?php echo($categoria->Nombre)?></a>

    <?php endforeach;?>


<?= $footer; ?>