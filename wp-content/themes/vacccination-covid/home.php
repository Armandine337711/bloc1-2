<?php get_header(); ?>
<div id="ttr_main" class="row">
<div id="ttr_content" class="col-lg-8 col-sm-8 col-md-8 col-xs-12">

<div class="row">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="mt-4 mb-4">
<h2><?php the_title(); ?></h2>
<p><?php the_content(__('(more...)')); ?></p>

<div class="text-right font-italic">Publié le <?php the_time('d/m/Y') ?></div>
</div>
<?php endwhile; else: ?>
<p><?php _e('Désolé, aucun arcticle ne correspond à vos critères.'); ?></p>
<?php endif; ?>
</div>
</div>
<?php get_footer(); ?>