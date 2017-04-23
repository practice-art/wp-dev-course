<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>PHP for WordPress</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Varela+Round" rel="stylesheet">
  <link rel="stylesheet" href="/wp-content/themes/1.9-phpforwp-completed/style.css">
  </head>
  <body>

    <header id="masthead">
    	<h1><a href="#">PHP for WordPress</a></h1>
    </header>

    <div id="content">

  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

  <h2><?php the_title(); ?></h2>
  <?php the_content(); ?>

  <?php endwhile; else: ?>

  <h2><?php _e( '404 Error' ); ?></h2>
  <p><?php _e( 'Sorry, content not found.', 'phpforwp' ); ?></p>

  <?php endif; ?>

  </div>

  </body>
</html>
