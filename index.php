<?php

get_header(); ?>

<div class="max-w-4xl mx-auto px-4">

  <!-- example react component -->
  <div id="render-react-example-here"></div>
  <!-- end example react component -->

  <div class="prose max-w-full">
    <?php if (have_posts()) {
      while(have_posts()) {
        the_post(); ?>
        <div>
          <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php the_content(); ?>
        </div>
        <div class="grid grid-flow-col">
          <h2>hi</h2>
          <div class="grid grid-flow-row justify-between">
            <div>HELP</div>
            <div>ME</div>
          </div>
          <div>hel</div>
          <div>Nope</div>
          <div>Nope</div>
        </div>
      <?php }
    } ?>
  </div>
</div>

<?php get_footer();