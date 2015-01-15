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
            global $post;
            $current_page_slug = $post->post_name;
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            query_posts( 'post_type=post&paged=' . $paged );

            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    ?>
                    <div class="pin col-sm-6 col-md-4">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h4>
                        <h6><?php the_time( 'F jS, Y' ); ?></h6>
                        <img src="http://cssdeck.com/uploads/media/items/2/2v3VhAp.png" />
                        <h7><?php the_author(); ?></h7>
                        <p>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
                        </p>
                    </div>
                <?php } ?>

                <div class="navigation col-xs-12">
                    <p class="pager-pages">
                        <?php
                        global $wp_query;

                        $big = 999999999; // need an unlikely integer
                        $paginate_links = paginate_links( array(
                            'base'      => str_replace( $big, '%#%', get_pagenum_link( $big ) ),
                            'format'    => '?paged=%#%',
                            'current'   => max( 1, get_query_var( 'paged' ) ),
                            'total'     => $wp_query->max_num_pages,
                            'prev_text' => __( '&laquo; Back' ),
                            'next_text' => __( 'Next &raquo;' ),
                            'type'      => 'array'
                        ));
                        $numLinks = count( $paginate_links );
                        $i = 0;
                        $min = 1;
                        $max = $numLinks;

                        if ( $numLinks > 0 && strpos( $paginate_links[0], 'Back' ) !== false ) {
                            $min++;
                        }

                        if ( $numLinks > 0 && strpos( $paginate_links[$numLinks - 1], 'Next' ) !== false ) {
                            $max--;
                        }

                        foreach ( $paginate_links as $pgl ) {
                            $i++;

                            if ( $i > $max  || $i <= $min ) {
                                echo " $pgl";
                            } else {
                                echo " | $pgl";
                            }
                        }
                        ?>
                    </p>
                </div>
            <?php
            }

            wp_reset_query();
            ?>

            </div> 
        </div> 
    </div> 

<?php
get_footer();
