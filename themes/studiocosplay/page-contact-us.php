<?php
/*
 * Template Name: Contact Us Page Template
 * Description:   A page template with the green title banner and the Mailing list signup
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
                <div class="inner">
                <?php
                    remove_filter('the_content', 'st_add_widget');
                    the_post();
                    the_content();
                ?>
                </div> 
            </div>
            <div style="text-align: center">
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

<?php
get_footer();
