<?php get_header(); ?>

    <section  class="single-post">
        <article class="article-full">
          <div class="single-post-header">
              <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail(); ?>
              <?php endif; ?>
              <h2><?php the_title(); ?></h2>
              <p>By: <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
          </div>
          <?php the_content(); ?>
        </article>
    </section>


<?php get_footer(); ?>