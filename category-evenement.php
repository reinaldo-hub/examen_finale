

<?php
get_header();
?>
    <h2 class="container">Voici les  derniers evenement</h2>
    <div class="super-evenement">
    <?php
        $args = array( 'category_name' => "evenement",
        'date_query' => array(
            'column' => 'post_date',
            'after' => '2019-09-01',
            'before' => '2019-11-31' 
        ));
        $query1 = new WP_Query($args);
        while($query1->have_posts()):
            $query1->the_post();
            $jour = get_the_date("j");
            $mois = get_the_date("m");
            if($mois == 11 ){
                $mois = 3;
             }
            else if($mois == 10) {
                $mois = 2;
            }
            else if($mois == 9) {
                $mois = 1;
            }
            $row = "grid-row-start:" . $jour;
            $column = "grid-column-start:" . $mois;
            $classInt = $row . ";" . $column;
            echo "<div style='" . $classInt . "' class='division-event'>";
                echo "<a href='" . get_permalink() . "'><h4>" . get_the_title() . "</h4></a>";
                echo get_the_date();
            echo "</div>";

        endwhile;
    ?>
    </div>
    
    </main><!-- #main -->
</div><!-- #primary -->
