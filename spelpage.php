<?php
/**
 * @package WordPress
 * @subpackage White_out
 */

get_header(); ?>

<div id="content">

    <?php if ( !is_page('spel')){
        echo '<img class="alignright" src="'.get_bloginfo('template_directory').'/images/poesje.jpg" alt="Poesje"/>';
    }?>
    <?php if ( !is_page()){
        echo '<img class="alignright" src="'.get_bloginfo('template_directory').'/images/poesje.jpg" alt="Poesje"/>';
    }?>

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>

    <?php if ( is_page ('spel')){
        echo '<script>
			jQuery(document).ready(function() {
				init();
				initAnimation();
			});
			</script>';

        echo '<canvas id="game" width="950" height="640">';
        echo '</canvas>';
    }?>

</div>


<?php get_sidebar(); ?>

<?php get_footer(); ?>