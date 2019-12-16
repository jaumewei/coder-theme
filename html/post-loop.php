<?php defined('ABSPATH') or die; ?>
<?php if ( !is_front_page( ) ) : ?>
    <div class="category-header">
        <div class="container pad-lg">
            <h1 class="category-title wrap"><?php print get_queried_object()->name ?></h1>
        </div>
    </div>
<?php endif; ?>
<?php if (have_posts()) : ?>
    <ul class="loop container">
        <?php while ( have_posts()) : the_post(); ?>
        <li class="post container">
            <div class="wrap clearfix">
                <div class="container post-image">
                    <a class="link" href="<?php echo get_permalink(get_the_ID()); ?>">
                        <?php print coders_thememan_image( get_the_ID() , 'medium' ); ?>
                    </a>
                </div>
                <div class="container post-content">
                    <div class="header">
                        <h1 class="title">
                            <a href="<?php print get_permalink(get_the_ID()); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h1>
                    </div>
                    <div class="content">
                        <?php the_content(__('Leer m&aacute;s')); ?>
                    </div>
                </div>
            </div>
        </li>
        <?php endwhile; ?>
    </ul>
    <div class="paginator">
        <div class="pages"><?php echo paginate_links(); ?></div>
    </div>
<?php else: ?>
    <!-- no post -->
    <p><?php print __('No hay entradas que mostrar') ?></p>
<?php endif; ?>

