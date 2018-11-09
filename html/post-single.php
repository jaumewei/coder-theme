<?php defined('ABSPATH') or die; ?>
<?php if (have_posts()) : the_post(); ?>
    <!-- CABECERA -->
    <div class="post-header">
        <div class="container">
            <h1 class="post-title wrap"><?php the_title(); ?></h1>
        </div>
    </div>
    <!-- contenido -->
    <div class="post-content">
        <?php the_content(); ?>
    </div>
<?php endif; ?>