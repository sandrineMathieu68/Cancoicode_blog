<!doctype html>
<html lang="fr">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">



	<title>Membre</title>
	<?php wp_head(); ?>
</head>

<body>


	<div id="fullpage">
		<div class="section horizontal-scrolling">
			<div class="slide">
				<div id="accueil" class="container-fluid">
					<div class="row">
						<div class="col-2">
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
			</div>
			<div class="slide">
				<main id="post-grid" class="d-flex flex-column align-content-between justify-content-between">
					<!-- Header -->
					<header class="container-fluid">
						<nav class="navbar navbar-expand-lg ">
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
					</header>

					<!-- Content -->
					<div class="container-fluid ctnf">
						<div class="container">
							<!-- Searchbar -->
							<div class="row searchbar d-flex justify-content-end">
								<div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<input type="text" placeholder="Rechercher...">
								</div>
							</div>
							<!-- Post -->
							<div class="row d-flex justify-content-between">
								<div class="card col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<img class="card-img-top" src="assets/img/blog.png" alt="Card image cap">
									<div class="card-body">
										<h3 class="card-title">Réalité virtuelle et patrimoine</h3>
										<p class="sous-titre"><i class="fa fa-calendar-o" aria-hidden="true"></i> 7 janvier 2018 <i class="fa fa-user" aria-hidden="true"></i> Lucie GRIETTE <i class="fa fa-comments" aria-hidden="true"></i> 0 Comment</p>
										<p class="card-text">Réalité virtuelle et modélisation 3D au service de la culture : Et demain, un musée virtuel ? La réalité virtuelle et la modélisation 3D ne se cantonnent pas aux jeux vidéos ou au cinéma. Dans ce flux continu d’innovation, le monde des musées n’est pas en reste. Ces deux technologies s’implantent peu à peu dans de nombreux sites ou musées..
										</p>
										<a href="#" class="btn btn-primary">Voir plus</a>
									</div>
								</div>
								<div class="card col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<img class="card-img-top" src="assets/img/blog.png" alt="Card image cap">
									<div class="card-body">
										<h3 class="card-title">Réalité virtuelle et patrimoine</h3>
										<p class="sous-titre"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 5 janvier 2018 <i class="fa fa-user" aria-hidden="true"></i> Yohann THOREZ-DEBRUCQ <i class="fa fa-comments" aria-hidden="true"></i> 0 Comment</p>
										<p class="card-text">La dématérialisation a été une véritable révolution à l’échelle de la planète. Le contenu s’est dématérialisé et la nécessité de tout imprimer, de tout écrire à l’encre sur des feuilles de papier a progressivement disparu dans la plupart des entreprises…
										</p>
										<a href="#" class="btn btn-primary">Voir plus</a>
									</div>
								</div>
								<div class="card col-xs-12 col-sm-12 col-md-3 col-lg-3">
									<img class="card-img-top" src="assets/img/blog.png" alt="Card image cap">
									<div class="card-body">
										<h3 class="card-title">Réalité virtuelle et patrimoine</h3>
										<p class="sous-titre"> <i class="fa fa-calendar-o" aria-hidden="true"></i> 5 janvier 2018 <i class="fa fa-user" aria-hidden="true"></i> Benoît DELOYE <i class="fa fa-comments" aria-hidden="true"></i> 0 Comment</p>
										<p class="card-text">
											La couette connectée, pour des nuits ni trop chaudes, ni trop froides, et le souci en moins de devoir refaire son lit. SmartDuvet, une société Canadienne a eu une excellente idée pour améliorer la qualité de nos nuits : La couette connectée !
										</p>
										<a href="#" class="btn btn-primary">Voir plus</a>
									</div>
								</div>
							</div>
							<!-- Pagination -->
							<div class="row">
								<div class="col-12 col-sm-12 col-md-12 col-lg-12 d-flex justify-content-center">
									<nav aria-label="Page navigation example" id="pagination">
										<ul class="pagination">
											<li class="page-item"><a class="page-link" href="#">Previous</a></li>
											<li class="page-item"><a class="page-link" href="#">1</a></li>
											<li class="page-item"><a class="page-link" href="#">2</a></li>
											<li class="page-item"><a class="page-link" href="#">3</a></li>
											<li class="page-item"><a class="page-link" href="#">4</a></li>
											<li class="page-item"><a class="page-link" href="#">Next</a></li>
										</ul>
									</nav>
								</div>
							</div>

						</div>
					</div>

					<!-- footer -->
					<footer>

					</footer>
				</main>
			</div>
			<div class="slide">
				<div id="flexC" class="d-flex flex-column align-content-between justify-content-between container-fluid">

					<nav class="navbar navbar-expand-lg ">
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



					<section id="ctn" class="container d-flex align-items-center justify-content-center">
						<div id="team_grid" class="row">
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Antoine</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Magali</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Kevin</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Mourad</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Anthony</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Romain</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Benoit</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Charlie</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Sandrine</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Floriane</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Yohann</p>
							</div>
							<div class="col-3 d-flex align-items-center justify-content-center">
								<p class="p_team">Lucie</p>
							</div>
						</div>
					</section>
					<footer>

					</footer>

				</div>
			</div>
			<div class="slide">
				<div class="about">
					<div class="container-fluid fin">
						<div class="row ">
							<div class="col-6 text-center quand ">
								<h3>QUAND ?</h3>
								<p id="quand">De septembre 2017 à mai 2018, Cancoicode est la cinquième promotion de l’Access Code School.</p>
							</div>
							<div class="col-6 text-center quoi">
								<h3>QUOI ?</h3>
								<p id="quoi">14 personnes (formateurs inclus) enfermés durant 6mois.</p>
							</div>
						</div>
						<div class="row fin1">
							<div class="col-12 text-center code">
								<p class="mot">Un seul mot d'ordre</p>
								<h3>CODE</h3>
								<p class="if">If (Quand+Quoi+Code === Cancoicode) { </p>
								<p class="if">console.log(” CODE,CODE,CODE ”);</p>
								<p class="if text-left chevron">}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>










<?php wp_footer(); ?>
</body>

</html>
