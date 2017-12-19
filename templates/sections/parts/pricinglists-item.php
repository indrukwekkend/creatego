
<?php the_sub_field('title'); ?>

<?php the_sub_field('lead');?>

<?php if( have_rows('treatment') ):?>

  <?php while ( have_rows('treatment') ) : the_row(); ?>

    <?php the_sub_field('title'); ?>

    <?php the_sub_field('description'); ?>

    <?php the_sub_field('price'); ?>

  <?php endwhile;?>

<?php endif;?>
