<?php

get_header();
?>

    <div class="title-banner">
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
                <div class="inner">
                <?php
                    remove_filter('the_content', 'st_add_widget');
                    the_post();
                    the_content();
                ?>
                </div> 
            </div> 
        </div> 
    </div> 

<?php
get_footer();
