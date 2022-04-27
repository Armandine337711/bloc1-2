<?php 
/* Template Name: Modèle page info */ 
?>

<?php get_header() ?>
<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

<div class="row">
<div class="mt-4 mb-4">
<h2><?php the_title(); ?></h2>
<div><?php the_content(); ?></div>


<div class="text-right font-italic">Publié le <?php the_time('d/m/Y') ?></div>
</div>
</div>
</div>
<?php get_footer() ?>

