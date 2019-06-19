    <?php get_header(); ?>

      <div id="banner">
        <h1>GM<sup>3</sup> Designs</h1>
        <h3>Imagination to Pagination</h3>
        <img src="<?php echo get_template_directory_uri(); ?>/img/gm_cubed_neon.png" alt="">
      </div>

      <main>
        <a href="<?php echo site_url('/projects'); ?>">
          <h2 class="section-heading">Projects</h2>
        </a>

          <section>

            <?php 
            
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 2,
                );

                $blogposts = new WP_Query($args);

                while($blogposts->have_posts()) {
                 $blogposts->the_post();
            ?>

            <div class="card">
              <div class="card-image">
                <a href="<?php the_permalink(); ?>">
                  <img src="<?php echo get_the_post_thumbnail_url(get_the_ID()); ?>" alt="Post Image">
                </a>
              </div>
              <div class="post-description">
                <a href="<?php the_permalink(); ?>">
                  <h3><?php the_title(); ?></h3>
                </a>
                <p>
                  <?php echo wp_trim_words(get_the_excerpt(), 30); ?>
                </p>
                <a href="<?php the_permalink(); ?>" class="btn-readmore">read more</a>
              </div>
            </div>

                <?php } 
                   wp_reset_query(); 
                 ?>

          </section>

     <?php get_footer(); ?>