<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Blog Cancaicode</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" media="screen" href="assets/css/media.css" />
	<?php wp_head(); ?>

</head>
<body>
	
<div class="container-fluid">
	<div class="row">
		<div class="col-1">
			<nav class="  navbar navbar-expand-lg navbar-light bg-light">



			    <?php
        wp_nav_menu( array(
        	'menu'              => 'top-menu',
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'navbar-nav',
            'container_id'      => 'navbar',
            'menu_class'        => 'nav navbar-nav ',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
        );
?>
			  
			</nav>
		</div>
		
		<div class="col-10 text-center titre">
			<h1>Cancoicode</h1>
			<p id="stitre">Le Blog</p>	

		</div>
</div>
</div>



<?php wp_footer(); ?>	
</body>
</html>