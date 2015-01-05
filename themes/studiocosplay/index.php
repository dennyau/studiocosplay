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
            <a class="navbar-brand" rel="#" title="Studio Cosplay" href="#"><img height="41" id="studio-cosplay-logo" src="<?php echo $img_dir . 'studio-cosplay-logo.png'; ?>" /></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>

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
