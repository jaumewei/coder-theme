<?php defined('ABSPATH') or die; ?>
<?php if (have_posts()) : the_post(); ?>
<div class="container spa-md">
    <div class="wrap">
        <?php the_content() ?>
    </div>
</div>
<?php endif; ?>
