<?php get_header(); ?>

<div class="container-404">
    <h2 class="page-heading">Oh no! What happened? 404?</h2>
    <img src="http://source.unsplash.com/640x480/?lost" alt="">

    <h3>Sorry friend, I think you're lost. Please try the following links.</h3>
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

<?php get_footer(); ?>