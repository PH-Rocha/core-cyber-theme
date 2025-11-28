<?php 

    get_header(); 

      if ( have_posts() ) : while ( have_posts() ) : the_post();
    
?>
  <main id="primary" class="site-main">
    <?php 
      
      $about_page = get_page_by_path( 'sobre-nos' );
      
      $about_link = $about_page ? get_permalink( $about_page->ID ) : '#';
    
    ?>

    <section class="hero-section">
      <div class="wrap">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
      </div>
    </section>

    <section class="feature-section wrap">
      <h2>Recursos Principais:</h2>
      <div class="feature-list">
        <div class="feature-item">
          <h3>Design Responsivo</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque excepturi, eos nisi voluptates assumenda praesentium in modi eveniet odit voluptatibus, nesciunt rerum dolor soluta nostrum quidem vel minima dignissimos quae.</p>
        </div>
        <div class="feature-item">
          <h3>fácil personalização</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque excepturi, eos nisi voluptates assumenda praesentium in modi eveniet odit voluptatibus, nesciunt rerum dolor soluta nostrum quidem vel minima dignissimos quae.</p>
        </div>
        <div class="feature-item">
          <h3>Otimizado para velocidade</h3>
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Itaque excepturi, eos nisi voluptates assumenda praesentium in modi eveniet odit voluptatibus, nesciunt rerum dolor soluta nostrum quidem vel minima dignissimos quae.</p>
        </div>
      </div>
    </section>

    <section class="cta-section">
      <div class="wrap">
        <h2>Pronto para começar?</h2>
        <a href="<?php echo esc_url( $about_link ); ?>" class="btn-primary">
            Conheça Nossos Serviços
        </a>
      </div>
    </section>

    <section class="blog-preview-section wrap">
      <h2>Últimas Notícias do Blog</h2>
      <?php 
      
        $args = array(
            'posts_per_page' => 3,
            'ignore_sticky_posts' => true
        );

        $latest_posts = new WP_Query( $args );

        if ( $latest_posts->have_posts() ) :
            echo '<div class="posts-loop-grid">';
            while ( $latest_posts->have_posts() ) : $latest_posts->the_post();

            ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
              <div class="entry-summary">
                <?php the_excerpt(); ?>
              </div>
            </article>
            <?php 
            endwhile;
            echo '</div>';
            wp_reset_postdata();
        else :
            echo '<p>Nenhum post de blog encontrado.</p>';
        endif;
      ?>
    </section>
  </main>
  <?php endwhile; endif; ?>

<?php get_footer(); ?>