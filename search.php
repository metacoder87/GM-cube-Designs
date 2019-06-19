    <?php get_header(); ?>
     
          <h2 class="page-heading">Search Results for... <?php echo get_search_query(); ?></h2>

        <?php if(have_posts()) { ?>

          <section>

            <?php 

                while(have_posts()) {
                  the_post();
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
                <div class="card-meta">
                    Posted by <?php the_author(); ?> on <?php the_time('F,j Y'); ?> 
                    <?php if(get_post_type() =='post') { ?> in <a href="*"><?php echo get_the_category_list(', ') ?></a>
                    <?php } ?>
                </div>
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

                    <?php } else { ?>

                    <div class="no-results">
                        <h2>Could not find what you were looking for...</h2>
                        <h3>Use the keys on the board to form coherent words for me to locate... it's supposed to be easy.</h3>
                        <img src="https://source.unsplash.com/640x480/?search" alt="">
                        <h3>No Worries</h3>
                        <h3>Check out the following links:</h3>
                            <ul>
                                <li>
                                    <a href="<?php echo site_url(''); ?>">Just take me Home</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('/developer'); ?>">Learn about the talent.</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('/projects'); ?>">Check out the work.</a>
                                </li>
                                <li>
                                    <a href="<?php echo site_url('/contact'); ?>">Contact, the Dude.</a>
                                </li>
                            </ul>
                    </div>

                    <?php } ?>

          <div class = "pagination">
                  <?php echo paginate_links(); ?>
          </div>

     <?php get_footer(); ?>