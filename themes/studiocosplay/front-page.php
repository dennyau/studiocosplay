<?php
get_header();
?>

    <div id="home" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
            <div class="item active">
                <object class="carousel-svg" type="image/svg+xml" data="<?php echo $img_dir; ?>decorative-frame-yellow.svg"></object>
                <div class="carousel-caption flex">
                    <div>
                        <h1>
                        <?php
                            echo get_theme_mod('carousel1_title', 'Hooray!');
                        ?>
                        </h1>
                        <?php
                            echo get_theme_mod('carousel1_caption','
                        <p>We are officially a 501(c)(3) non-profit organization and all donations are tax deductible.</p>
                        <p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=52HTX9WFZX38W" target="_blank">Click here to donate today!</a></p>
                            ');
                        ?>
                    </div>
                </div>
            </div>
            <div class="item">
                <object class="carousel-svg" type="image/svg+xml" data="<?php echo $img_dir; ?>decorative-frame-green.svg"></object>
                <div class="carousel-caption flex">
                    <div>
                        <h1>
                        <?php
                            echo get_theme_mod('carousel2_title', 'We have a NEW logo!');
                        ?>
                        </h1>
                        <?php
                            echo get_theme_mod('carousel2_caption','
                        <p>A big thank you to independent game developer Frogdice for lending their Graphic Designer to create our official logo.</p>
                        <p>Check them out at <a href="http://frogdice.com" target="_blank">frogdice.com</a></p>
                            ');
                        ?>
                    </div>
                </div>
            </div>
            <div class="item">
                <object class="carousel-svg" type="image/svg+xml" data="<?php echo $img_dir; ?>decorative-frame-pink.svg"></object>
                <div class="carousel-caption flex">
                    <div>
                        <h1>
                        <?php
                            echo get_theme_mod('carousel3_title', 'MASCOT CONTEST!');
                        ?>
                        </h1>
                        <?php
                            echo get_theme_mod('carousel3_caption','
                        <p>Help us design our mascot and win a $100 gift card to Amazon.com. See official rules <a href="mascot-contest.html">here</a>.</p>
                            ');
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#home" data-slide-to="0" class="active"></li>
          <li data-target="#home" data-slide-to="1"></li>
          <li data-target="#home" data-slide-to="2"></li>
        </ol>
    </div>
    <div id="studioCosplay">     
        <div class="container">  
            <div class="row"> 
                <div class="col-md-12" class="black">
                <?php // Grab the page contents of "studiocosplay" subpage of "our-story"
                    $studioCosplay = get_posts(
                        array(
                            'name'      => 'studiocosplay',
                            'post_type' => 'page'
                        )
                    );
                    if (! empty($studioCosplay) ){
                        echo $studioCosplay[0]->post_content;
                    } else { ?>
                <p class="black sc-default">Studio Cosplay is a 501(c)(3) nonprofit organization located in the DC metro area whose mission  is to promote community through the art of costuming by providing workspace, opportunity, and education. Studio Cosplay is opening a community-operated workshop in 2015 where cosplayers can connect and exchange ideas, share resources and knowledge, collaborate on projects, take instructional classes and hands-on workshops, and have the space and tools to work on costumes. Our workshop will be based in the DC metro area and will welcome all cosplayers, costume designers, LARPers, photographers, artists, and anyone interested in learning about costuming.</p>
                    <?php }
                ?>
                </div>
                <div class="col-md-12">
                    <br />
                    <p class="intro" class="shadowy">Show your support and spread the word! Like us on Facebook for updates on our status and donate to our Kickstarter today!</p>
                    <br />
                </div>
                <div class="col-sm-3"></div>
                <div class="col-sm-3">
<iframe id="fb-iframe" seamless src="http://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fstudiocosplay&width&layout=button&action=like&show_faces=true&share=true&height=80&appId=2345574733"></iframe>
                </div>
                <div class="col-sm-3">
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="52HTX9WFZX38W">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                </div>
                <div class="col-sm-3"></div>
            </div> 
        </div> 
    </div> 

    <div id="ourMission">
        <div class="container">
            <div class="row">
                <h1>Studio Cosplay is by cosplayers and for cosplayers</h1>
                <div class="col-md-4">
                    <div class="info-img">
                        <object type="image/svg+xml" data="<?php echo $img_dir; ?>studio.svg"></object>
                    </div>
                    <h2>Studio</h2>
                    <p>We aim to provide a physical space around the DC area for our members to have access to equipment such as sewing machines, sergers, airbrushes, 3D printers, heat guns/knives, etc. for cosplay creation and a green screen for photography.</p>
                </div>
                <div class="col-md-4">
                    <div class="info-img">
                        <object type="image/svg+xml" data="<?php echo $img_dir; ?>repair.svg"></object>
                    </div>
                    <h2>Repair</h2>
                    <p>Our convention booths will be stocked with cosplay essentials like sewing notions, paints, adhesives, molding materials, etc. and will be available to our members for touchups and repairs.</p>
                </div>
                <div class="col-md-4">
                    <div class="info-img">
                        <object type="image/svg+xml" data="<?php echo $img_dir; ?>instruction.svg"></object>
                    </div>
                    <h2>Instruction</h2>
                    <p>We seek to share and expand our cosplay knowledge by offering instructional classes and hands-on workshops on a variety of costuming aspects including sewing, wig styling, prop making, armour, and photography.</p>
                </div>
            </div>
        </div>
    </div>

    <div id="blogSection">
        <div class="container">
            <div class="row">
                <div class="inner">
                <?php // Grab the page contents of "today" subpage of "our-story"
                    $today = get_posts(
                        array(
                            'name'      => 'today',
                            'post_type' => 'page'
                        )
                    );
                    if (! empty($today) ){
                        echo $today[0]->post_content;
                    } else { ?>
                    <h1 class="sc-default">Watch for our Kickstarter</h1>
                    <br />
                    <p>
                    Our Kickstarter campaign is targeted to launch February 2015 to cover first year’s expenses; including the physical space (rent, utilities, etc.), equipment (machines, tools, furniture, etc.), security / safety (site access, respirators, etc.), and administrative costs (website, insurance, Kickstarter rewards, etc.).
                    </p>
                    <p>
                    We have a long wish list and many stretch goals, including a classroom area, sewing stations, airbrush and painting stations, fabrication stations with a 3D printer, and green screen for a photography area.
                    </p>
                    <p> 
Currently, we are only accepting monetary donations. Once we have a physical space, we will gladly accept equipment, fabric, notions, and anything else you’d like to share with the community!
                    </p>
                    <?php } ?>
                    <br />
<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="52HTX9WFZX38W">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
                </div>
                <div class="col-md-12">
                    <br />
                    <br />
                    <br />
                    <p class="intro shadowy">
                        Want to receive updates, announcements, and opportunities to help out by email? Join our mailing list!
                    </p>
                </div>
                <div class="col-md-3"></div><div class="col-md-6">
                <form id="not-mailing-list-form" role="form" action="https://docs.google.com/forms/d/1lRJ6ktsDnMhwPFuH5bCg_sRJfvULYftTgso7osCxrNU/formResponse" method="POST">
                    <div class="form-group row">
                        <label for="entry_309242874">Email Address:</label>
                        <input type="email" class="form-control" id="entry_309242874" name="entry.309242874" placeholder="email@domain.com" required>
                    </div>
                    <input type="hidden" name="entry.2101776408" value="Updates on Studio Cosplay progress" id="group_2101776408_1">
                    <input type="hidden" name="entry.2101776408" value="Opportunities to help out" id="group_2101776408_2">
                    <div class="form-group row">
                        <button type="submit" name="submit" id="ss-submit" class="btn btn-large btn-primary">Sign Me Up!</button>
                    </div>
                </form>
                </div><div class="col-md-3"></div>
            </div>
        </div>
    </div>

    <div id="meetOurTeam">
        <div class="container">
            <div class="row">
            <?php
            // 3 Cards of the most recent posts!
            global $post;
            $current_page_slug = $post->post_name;
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

            query_posts( 'post_type=post&paged=' . $paged );
            $counter = 0;
            $max_count = 3;

            if ( have_posts() ) {
                while ( have_posts() ) {
                    the_post();
                    $counter++;
                    ?>
                    <div class="pin col-sm-6 col-md-4 col-xs-12">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title_attribute(); ?></a></h4>
                        <?php
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                the_post_thumbnail();
                            }
                        ?>
                        <h6><?php the_time( 'F jS, Y' ); ?></h6>
                        <p>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
                        </p>
                    </div>
                    <?php
                    if ($counter >= $max_count) break;
                }
            }
            ?>
            </div>
        </div>
    </div>

</div>
<?php
get_footer();
