<?php
get_header();
?>
<body>

      <!-- Static navbar -->
      <div id="navigationSection" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" rel="#" title="Studio Cosplay" href="#"><img height="41" id="studio-cosplay-logo" src="<?php echo $img_dir; ?>studio-cosplay-logo.png" /></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#home">Home</a></li>
                <li><a href="#ourMission">What We Do</a></li>
                <li><a href="#meetOurTeam">Our Story</a></li>
                <li><a href="mascot-contest.html">MASCOT Contest</a></li>
                <li><a href="#contactUs">Contact Us</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

    <div id="home" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
            <div class="item active">
                <object class="carousel-svg" type="image/svg+xml" data="<?php echo $img_dir; ?>decorative-frame-yellow.svg"></object>
                <div class="carousel-caption flex">
                    <div>
                        <h1>Hooray!</h1>
                        <p>We are officially a 501(c)(3) non-profit organization and all donations are tax deductible.</p>
                        <p><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=52HTX9WFZX38W" target="_blank">Click here to donate today!</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <object class="carousel-svg" type="image/svg+xml" data="<?php echo $img_dir; ?>decorative-frame-green.svg"></object>
                <div class="carousel-caption flex">
                    <div>
                        <h1>We have a NEW logo!</h1>
                        <p>A big thank you to independent game developer Frogdice for lending their Graphic Designer to create our official logo.</p>
                        <p>Check them out at <a href="http://frogdice.com" target="_blank">frogdice.com</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <object class="carousel-svg" type="image/svg+xml" data="<?php echo $img_dir; ?>decorative-frame-pink.svg"></object>
                <div class="carousel-caption flex">
                    <div>
                        <h1>MASCOT CONTEST!</h1>
                        <p>Help us design our mascot and win a $100 gift card to Amazon.com. See official rules <a href="mascot-contest.html">here</a>.</p>
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
                <div class="col-md-12">
                <p class="black">Studio Cosplay is a 501(c)(3) nonprofit organization located in the DC metro area whose mission  is to promote community through the art of costuming by providing workspace, opportunity, and education. Studio Cosplay is opening a community-operated workshop in 2015 where cosplayers can connect and exchange ideas, share resources and knowledge, collaborate on projects, take instructional classes and hands-on workshops, and have the space and tools to work on costumes. Our workshop will be based in the DC metro area and will welcome all cosplayers, costume designers, LARPers, photographers, artists, and anyone interested in learning about costuming.</p>
                </div>
                <div class="col-md-12">
                    <br />
                    <p class="intro" class="shadowy">Show your support and spread the word! Like us on Facebook for updates on our status and watch for our Kickstarter in early 2015 or donate today!</p>
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
                    <h1>Watch for our Kickstarter</h1>
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

<!-- Meet our team======================================== -->
<div id="meetOurTeam">
<div class="container">
    <div class="row">
        <div class="col-md-12 cntr">
            <h1>Our Story</h1>
<p>
The idea for Studio Cosplay originated from our own need for more workspace and specialized equipment, and we recognize that many in the cosplay community face the same challenges.  The average cosplayer may not have access to embroidery machines and 3D printers. But as a community, we can acquire and share these resources.
</p>
<p>
We founded Studio Cosplay because our creations should only be limited by imagination; not by logistics or lack of knowledge. Meet the people dedicated to bringing you Studio Cosplay:
</p>
            <br />
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <div id="liz-profile" class="slide vertical" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <object class="profile" type="image/svg+xml" data="<?php echo $img_dir; ?>liz-profile.svg"></object>
                    </div>
                    <div class="item">
                        <object class="profile" type="image/svg+xml" data="<?php echo $img_dir; ?>liz-cosplay.svg"></object>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h4>Liz Gmaz</h4>
            <h5>President</h5>
<p>
Liz Gmaz is an actress and cosplayer in the DC Metro Area and brings stage and film experience, as well as combat and stunt experience, to convention panels to help educate in posing, makeup, gun discipline, and more. She has been a costume designer for over six years and is one of the Founders of Studio Cosplay. She’s an avid Podcaster and Marvel Funko Pop Collector. Liz has been featured on multiple media outlets for her Cosplay work and has appeared on many popular TV shows, including House of Cards.
</p>
            <a class="facebook" href="https://www.facebook.com/StudioEingana"></a>
            <a class="twitter" href="https://twitter.com/LizGmaz"></a>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-4 col-md-push-8">
            <div id="daria-profile" class="slide vertical" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <object class="profile" type="image/svg+xml" data="<?php echo $img_dir; ?>sabrina-profile.svg"></object>
                    </div>
                    <div class="item">
                        <object class="profile" type="image/svg+xml" data="<?php echo $img_dir; ?>sabrina-cosplay.svg"></object>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-pull-4">
            <h4>Sabrina (Katilist) Maizland</h4>
            <h5>Vice President &amp; Treasurer</h5>
<p>
Sabrina Maizland has been cosplaying for five years and her Emma Frost has been featured on the front page of CNN.com. She is a Founder of Studio Cosplay and has been a panelist at many conventions, including San Diego Comic Con, Pheonix Comicon, and Dragon*Con. Her Worbla safety tutorial is published on Worbla.com and she is sponsored Cosplayer by Indie game developer FrogDice. Sabrina was also the Set Designer for the charity film “Browncoat Redemption,” which was endorsed by Joss Whedon.
</p>
            <a class="facebook" href="https://www.facebook.com/KatilistCosplay"></a>
            <a class="twitter" href="https://twitter.com/KatilistCosplay"></a>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-4">
            <div id="daria-profile" class="slide vertical" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <object class="profile" type="image/svg+xml" data="<?php echo $img_dir; ?>daria-profile.svg"></object>
                    </div>
                    <div class="item">
                        <object class="profile" type="image/svg+xml" data="<?php echo $img_dir; ?>daria-cosplay.svg"></object>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h4>Daria Medved</h4>
            <h5>Creative Director</h5>
            <p>
Daria Medved is a Founder of Studio Cosplay with over 20 years of costuming experience. Her first cosplay was featured in Animerica, she won Best Armor at Dragon*Con’s Dawn Look-Alike contest, and has a comic book issue devoted to her. To support herself through college, she owned and operated a successful cosplay boutique, filling numerous costume commissions for the 501st. Daria specializes in pattern making, leather working, wig styling, prop making, resin, and sewing. She also Chairs Japan Now for DC’s Sakura Matsuri Festival and fights in her own costumes for Dagorhir.
            </p>
            <a class="facebook" href="https://www.facebook.com/DashaCosplay"></a>
            <a class="twitter" href="https://twitter.com/CLDaria"></a>
        </div>
    </div>
    <hr />
    <div class="row">
        <div class="col-md-4 col-md-push-8">
            <div id="stef-profile" class="slide vertical" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="item active">
                        <object class="profile" type="image/svg+xml" data="<?php echo $img_dir; ?>stef-profile.svg"></object>
                    </div>
                    <div class="item">
                        <object class="profile" type="image/svg+xml" data="<?php echo $img_dir; ?>stef-cosplay.svg"></object>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8 col-md-pull-4">
            <h4>Stefanie Hackenberg</h4>
            <h5>Secretary</h5>
<p>
Stefanie Hackenberg has been cosplaying since 1998, and has been featured on prominent media outlets such as CNN and io9. She is a Studio Cosplay Founder with experience in multiple media such as thermoplastics, leatherwork, wood, found objects and other materials.  When Stefanie is not role-playing someone else she is a Reiki Master-certified energy therapist, Certified Wine Professional, avid video gamer, and a proud all-around nerd.
</p>
            <a class="facebook" href="https://www.facebook.com/FaeriesWearBootsCosplay"></a>
            <a class="twitter" href="https://twitter.com/FaeriesWBCosplay"></a>
        </div>
    </div>
</div>
</div>
</div>
<?php
get_footer();
