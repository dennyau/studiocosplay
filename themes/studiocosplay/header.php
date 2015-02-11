<?php
// Core theme uris
$theme_dir = cdn('/wp-content/themes/studiocosplay');
$img_dir = $theme_dir . '/img/';
$js_dir = $theme_dir . '/js/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Studio Cosplay is a non-profit in the DC metro Area that promotes community through the art of costuming by providing workspace, opportunity and education.">
    <meta name="author" content="Studio Cosplay">
    <meta name="keywords" content="Studio Cosplay, Makerspace, Maryland, Cosplay Workshop, Cosplay Commmunity, Mobile Cosplay Support, Kickstarter, Worbla, Costume, Costuming, Wig styling, Comic Book, Prop Making, Projects, Photography, Green Screen, Cosplayer, Liz Gmaz, Sabrina Maizland, Daria Medved, Stefanie Hackenberg">
    <meta name="google-site-verification" content="JG5wqGPBeqN-NtPViiI2pT4UCEjLcU4ygDokq9ky7GU" />
    <link rel="icon" href="<?php $img_dir . 'favicon.ico'; ?>">

    <title><?php wp_title(''); ?></title>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- wordpress theme -->
    <link href='http://fonts.googleapis.com/css?family=Titan+One' rel='stylesheet' type='text/css'>
    <link href="<?php echo get_stylesheet_uri(); ?>" rel="stylesheet">

    <?php wp_head(); ?>
</head>
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
            <a class="navbar-brand" rel="#" title="Studio Cosplay" href="/"><img id="studio-cosplay-logo" src="<?php echo $img_dir . 'studio-cosplay-logo.png'; ?>" /></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            <?php
                $menu_name = 'header-menu';
                $menu_list = '';

                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );

                    $menu_items = wp_get_nav_menu_items($menu->term_id);

                    foreach ( (array) $menu_items as $key => $menu_item ) {
                        $title = $menu_item->title;
                        $url = $menu_item->url;
                        $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
                    }
                } else {
                    $menu_list = '<li>Menu "' . $menu_name . '" not defined.</li>';
                }
                echo $menu_list;
            ?>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
