<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>
    <div class="¨bob">
        <p class="gg">dsdsds</p>
    </div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

        <h2>Conférences</h2>
        <div class="conference">
        
            <?php

               $args = array(
                'category_name' => 'evenement',
                'posts_per_page' => 4,
                'order' => 'DESC',
                );
                
                $query1 = new WP_Query($args);

                while($query1->have_posts()):
                    
                    $query1->the_post();

                    echo "<div>";
                        the_post_thumbnail();
                        echo "<h4>" . get_the_title() . "</h4>";
                        echo "<p>" . get_the_excerpt() . "</p>";
                    echo "</div>";

                endwhile;

            
            ?>
        </div>





















		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
