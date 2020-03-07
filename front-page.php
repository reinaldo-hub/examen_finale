

<?php underscores_post_thumbnail(); ?>
<?php
get_header();
?>

    <h2 class="container">Nos dernieres conférences</h2>
    <div class="conference container">
    <?php
        $args = array(
        'category_name' => 'conference',
        'posts_per_page' => 3
        );
        
        $query1 = new WP_Query($args);

        while($query1->have_posts()):
            $query1->the_post();
            echo "<div class='division-conference'>";
                echo "<div class='div-conf'>";
                the_post_thumbnail("thumbnail");
                echo "</div>";
                echo "<div>";
                echo "<a href='" . get_permalink() . "'><h4>" . get_the_title() . " " . "<span class='date-span'>" . get_the_date() .  "</span>" . "</h4></a>";
                echo "<p>" . get_the_excerpt() . "</p>";
                echo "</div>";
            echo "</div>";

        endwhile;
    ?>
    </div>
    <h2 class="container">Voici les  dernières nouvelles</h2>
    <div class="nouvelle container">
    <?php
        $args = array(
        'category_name' => 'nouvelles',
        'posts_per_page' => 4
        );
        
        $query1 = new WP_Query($args);
        while($query1->have_posts()):
            
            $query1->the_post();
            echo "<div class='division-nouvelles'>";
                the_post_thumbnail("thumbnail");
                echo "<a href='" . get_permalink() . "'><h4>" . get_the_title() . "</h4></a>";
            echo "</div>";

        endwhile;
    ?>
    </div>
    
    </main><!-- #main -->
</div><!-- #primary -->
<h1 class="container">Nos evenement importants</h1>
