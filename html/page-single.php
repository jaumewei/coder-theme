<?php defined('ABSPATH') or die; ?>
<?php if (have_posts()) : the_post(); ?>
    <?php if ( !is_home( ) && !is_front_page( ) ) : ?>
        <!-- CABECERA -->
        <div class="page-header">
            <div class="container">
                <h1 class="page-title wrap"><?php the_title( ) ?></h1>
            </div>
        </div>
    <?php endif; ?>
    <!-- contenido -->
    <div class="page-content container">
        <?php if(poly_thememan_hasclass('siteorigin-panels')): ?>
        <div classs="wrap clearfix"><!-- inicio wrap contenido -->
        <?php endif; ?>

        <?php the_content() ?>

        <?php if(poly_thememan_hasclass('siteorigin-panels')): ?>
        <!-- fin wrap contenido --></div>
        <?php endif; ?>
    </div>
<?php endif; ?>


