            <?php get_header(); ?>
            
            <a href="<?php echo site_url('/contact'); ?>">
                <h2 class="page-heading">Contact Us</h2>
            </a>
        
        <section>

            <div class="container">
                <form> <?php echo do_shortcode( '[contact-form-7 id="17" title="Cube Contact"]' ); ?></form>
            </div>
        </section>

        </main>
              <?php get_footer(); ?>