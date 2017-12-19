<section class="pricing-lists">
  <div class="container">
    <?php if( have_rows('pricing_list_females') ):?>

      <?php while ( have_rows('pricing_list_females') ) : the_row(); ?>

        <?php get_template_part('templates/sections/parts/pricinglists','item'); ?>

      <?php endwhile; ?>

    <?php endif; ?>

    <?php if( have_rows('pricing_list_males') ):?>

      <?php while ( have_rows('pricing_list_males') ) : the_row(); ?>

        <?php get_template_part('templates/sections/parts/pricinglists','item'); ?>

      <?php endwhile; ?>

    <?php endif; ?>

    <?php if( have_rows('pricing_list_children') ):?>

      <?php while ( have_rows('pricing_list_children') ) : the_row(); ?>

        <?php get_template_part('templates/sections/parts/pricinglists','item'); ?>

      <?php endwhile; ?>

    <?php endif; ?>
  </div>
</section>
