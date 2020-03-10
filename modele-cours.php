


get_header();
?>

    <h2 class="container">Mes cours</h2>
    <div class="cours container">
    <?php
        $args = array(
        'category_name' => 'cours',
        'posts_per_page' => 10
        );
        
        $query1 = new WP_Query($args);

        while($query1->have_posts()):
            $query1->the_post();
            echo "<div class='division-cours'>";
                echo "<p>" . get_the_post() . "</p>";
                echo "</div>";
            echo "</div>";

        endwhile;
    ?>
    </div>
    
    
    

