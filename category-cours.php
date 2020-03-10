<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package underscores
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div <h2 class="archive-description"></h2>', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
                echo get_the_title() ."<br>" ."</br>";
			

			endwhile;

		
		
		?>

         <!-- ordre alphabetique -->
        <?php
            $orderAlpha = get_the_title();
            sort($orderAlpha);

            $arrlength = count($orderAlpha);
            for($x = 0; $x < $arrlength; $x++) {
                echo $orderAlpha[$x];
                echo "<br>";
            }
        ?>

        <!-- code pour la grille de cours -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
    
    
    

