<?php
    //Fichero que muestra la cabecera del tema
?>

<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">

    <!-- Font Awesome CDN -->
    <script src="https://use.fontawesome.com/025d1f53df.js"></script>

    <!-- Main CSS -->
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>" type="text/css">

    <title>English Soccer Camp</title>

    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <!--Navbar-->
  
        <nav class="navbar navbar-expand-lg navbar-dark primary-color ml-auto">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'top',
                    'navbvar' => 'nav',
                    'navbar_class' => 'navbar',
                    'menu_class' => 'navbar-nav'
                ));
            ?>
<!-------------------MENU ORIGINAL HECHO A CODIGO-------------------->
          <!-- Navbar brand -->
          <a class="navbar-brand" href="/index.html">
            <img src="<?php bloginfo('template_url'); ?> /img/logo-v2.png" alt="logo ESC-Landing">
          </a>

          <!-- Collapse button -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav"
              aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

        </nav>
 
<!--/.Navbar-->

<!--------------------FIN DE MENU HECHO A CODIGO--------------------->

    </header>

      <div id="main">