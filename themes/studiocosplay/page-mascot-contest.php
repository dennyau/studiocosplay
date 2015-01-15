<?php

get_header();
?>
    <div id="home" class="carousel slide">
        <div class="carousel-inner">
            <div class="item active">
                <div class="overflow-active" style="height: 130px;">
                    <img src="<?php echo $img_dir . 'level-up-cosplay.png'; ?>" alt="Studio Cosplay's Mascot Contest!" />
                </div>
                <div class="carousel-caption">
                    <h1 style="font-size: 32px;"><?php get_the_title(); ?></h1>
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
