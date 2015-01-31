<?php
/*
 * Template Name: Cosnews Cards Page Template
 * Description:   A page template with the green title banner
 */

get_header();
?>

    <div class="title-banner green-background">
        <div class="container">
            <div class="row">
                <div class="col-md-12 cntr">
                    <h1><?php the_title(); ?></h1>
                </div>
            </div>
        </div>
    </div>

    <div id="studioCosplay" style=" padding-left: 3%; padding-right: 3%; text-align: justify; ">     
        <div class="container">  
            <div class="row"> 
            <?php
            $sidebar = 'homepage-recentposts-widgets';
            if (is_active_sidebar($sidebar)) { 
                dynamic_sidebar($sidebar);
            }
            ?>
            </div> 
        </div> 
    </div> 

<?php
get_footer();
