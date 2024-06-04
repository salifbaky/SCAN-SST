
<!DOCTYPE html>
<html class="no-js">
@include('fronts.accessoirs._entete')
<body>

	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<div class="preloader_image"></div>
	</div>


	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">
				<i class="rt-icon2-cross2"></i>
			</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform form-inline" action="./">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Recherche</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls with_padding">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul>
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->
            @include('fronts.accessoirs._adresse')
            @include('fronts.accessoirs._navigation')

			<section class="intro_section page_mainslider">
				<div class="flexslider">
					<ul class="slides">
						<li class="cs">
							<img src="images/sécurité au travail.png" alt="">
							<div class="bg_overlay">
								<div class="frame"></div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<p class="big">
														Créativité
													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<p class="divider_20">
														<span class="bold highlight2"></span><br><br>
														Nous apportons des solutions informatiques créatives à vos besoins.

													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<a href="free-quote.html" class="theme_button color2">Exprimez un besoin</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li class="cs">
							<img src="images/slide01.jpg" alt="">
							<div class="bg_overlay">
								<div class="frame"></div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<p class="big">
														Réativité
													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<p class="divider_20">
														<span class="bold highlight2"></span><br><br>
														Face à vos demandes urgentes, l'anticipation reste la clef de notre Réactivité.

													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<a href="free-quote.html" class="theme_button color2">Exprimez un besoin</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>

						<li class="cs">
							<img src="images/Sante-Secu.jpg" alt="">
							<div class="bg_overlay">
								<div class="frame"></div>
							</div>
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
										<div class="slide_description_wrapper">
											<div class="slide_description">
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<p class="big">
														Succès
													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<p class="divider_20">
														<span class="bold highlight2"></span><br><br>
														Notre succès repose sur la satisfaction de vos besoins.

												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<a href="free-quote.html" class="theme_button color2">Exprimez un besoin</a>
												</div>
											</div>
											<!-- eof .slide_description -->
										</div>
										<!-- eof .slide_description_wrapper -->
									</div>
									<!-- eof .col-* -->
								</div>
								<!-- eof .row -->
							</div>
							<!-- eof .container -->
						</li>
					</ul>
				</div>
				<!-- eof flexslider -->
			</section>

			<section class="ls section_padding_top_65 section_padding_bottom_100 columns_margin_bottom_30 page_about">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-7">
							<div class="framed-heading">
								<h2 class="section_header">
									<p>Startup Binaire</p>
								</h2></br>
								<span class="small">Nous sommes une entreprise Informatique de développepment de solutions numériques innovantes.</span>
							</div>
							<p>

							Le temps étant la ressource la plus onéreuse dans le contexte professionnel actuel,
							notre but est de vous apporter dans la réalisation de vos tâches informatisées et redondantes
							des solutions pour l'amélioration de votre productivité.
							</p>
							<a href="about.html" class="theme_button topmargin_30">En savoir plus</a>
						</div>
						<div class="col-md-5 col-lg-offset-1">
							<div class="content-card with_background offset-card">
								<h3 class="bold text-uppercase inverse_bg_color text-center">Nous rencontrer </h3>
								<div class="with_padding">

									<!--action="./"-->
									<form class="quote-form" method="post" action="#">
										<div class="form-group">
											<label for="quote-name" class="sr-only">Nom
												<span class="required">*</span>
											</label>
											<div class="input-group">
												<i class="flaticon-avatar highlight"></i>
												<input type="text" aria-required="true" size="30" value="" name="quote-name" id="quote-name" class="form-control" placeholder="Nom">
											</div>
										</div>

										<div class="form-group">
											<label for="quote-email" class="sr-only">E-mail
												<span class="required">*</span>
											</label>
											<div class="input-group">
												<i class="flaticon-envelope highlight"></i>
												<input type="text" aria-required="true" size="30" value="" name="quote-email" id="quote-email" class="form-control" placeholder="E-mail">
											</div>
										</div>

										<div class="form-group">
											<label for="quote-phone" class="sr-only">Contact
												<span class="required">*</span>
											</label>
											<div class="input-group">
												<i class="flaticon-phone-call highlight"></i>
												<input type="text" aria-required="true" size="30" value="" name="quote-phone" id="quote-phone" class="form-control" placeholder="Contact">
											</div>
										</div>

										<div class="form-group">
											<label for="quote-description" class="sr-only">Objet
												<span class="required">*</span>
											</label>
											<div class="input-group">
												<i class="flaticon-edit highlight"></i>
												<textarea aria-required="true" rows="5" cols="45" name="quote-description" id="quote-description" class="form-control" placeholder="Objet"></textarea>
											</div>
										</div>

										<div class="text-center topmargin_40">
											<button type="submit" id="quote_submit" name="quote_submit" class="theme_button color2">Envoyer</button>
										</div>
									</form>

								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="section_padding_140 page_services intro_section2">
				<div class="container-fluid">
					<div class="row columns_margin_bottom_20">

						<div class="col-md-4 content-block-right cs to_animate" data-animation="fadeInRightLong">
							<div class="to_animate" data-animation="fadeInRight" data-delay="300">
								<div class="framed-heading side-frame">
									<h2 class="section_header">
										Nos
										<br> Services
									</h2>
								</div>
								<p>

								</p>
							</div>
						</div>

						<div class="col-md-8 content-block-left ls to_animate" data-animation="fadeInLeft">
							<div class="row">
								<div class="col-sm-6 to_animate" data-animation="pullDown">
									<div class="media teaser">
										<div class="media-left">
											<div class="teaser_icon size_normal">
												<i class="flaticon-package grey"></i>
											</div>
										</div>
										<div class="media-body">
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Application Web-Mobile</h4>
											<p>
											<ul>
												<li>Applications Webs</li>
												<li>Applications Mobiles</li>
												<li>Application Desktop</li>
												<li>Site Web </li>

											</ul>
											</p>
										</div>
									</div>
								</div>

								<div class="col-sm-6 to_animate" data-animation="pullDown">
									<div class="media teaser">
										<div class="media-left">
											<div class="teaser_icon size_normal">
												<i class="flaticon-package grey"></i>
											</div>
										</div>
										<!-- <script>alert('this is my first alert meaasage')</script> -->
										<div class="media-body">
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Dessin 2D/3D</h4>
											<p>
												<ul >
												<li>Télécoms</li>
												<li>Energie</li>
												<li>BTP</li>
												<li>Mécaniques</li>
												</ul>
											</p>
										</div>
									</div>
								</div>
<!--
								<div class="col-sm-6 to_animate" data-animation="pullDown">
									<div class="media teaser">
										<div class="media-left">
											<div class="teaser_icon size_normal">
												<i class="flaticon-package grey"></i>
											</div>
										</div>
										<div class="media-body">
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Numérisation et Automatisation Process</h4>
											<p>
												<ul >
													<li>Analyse process existant</li>
													<li>Evaluation du temps d'execution process</li>
													<li>Automatisation </li>
												</ul>
											</p>
										</div>
									</div>
								</div>
							-->
								<div class="col-sm-6 to_animate" data-animation="pullDown">
									<div class="media teaser">
										<div class="media-left">
											<div class="teaser_icon size_normal">
												<i class="flaticon-package grey"></i>
											</div>
										</div>
										<div class="media-body">
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Réseaux Informatiques</h4>
											<p>
												<ul >
													<li>Câblages</li>
													<li>Réseaux</li>
													<li>Téléphonie</li>
													<li>Maintenances Informaique</li>
												</ul>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="cs section_padding_25">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center topmargin_0">
							<div class="framed-heading top-offset-frame bottommargin_5">
								<h2 class="section_header small">
									Dernières innovations
								</h2>
							</div>
							<div class="filters isotope_filters greylinks text-center greylinks">
								<a href="#" data-filter="*" class="selected">Toutes</a>
								<a href="#" data-filter=".kitchen">Applications</a>
								<!-- <a href="#" data-filter=".bathroom">Automatisation</a> -->
								<a href="#" data-filter=".hallway">Dessins Techniques</a>
								<a href="#" data-filter=".livingroom">Réseaux</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="ls columns_padding_5 section_padding_5">
				<div class="container">
					<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">

						<div class="col-md-3 col-sm-4 isotope-item margin_0"></div>

						<div class="col-md-3 col-sm-4 isotope-item margin_0"></div>

						<div class="col-md-3 col-sm-4 isotope-item margin_0"></div>

						<div class="isotope-item col-md-6 col-sm-8 col-md-push-6 kitchen">

							<div class="vertical-item gallery-item content-absolute vertical-center text-center square-item">
								<div class="item-media">
									<img src="images/work/15.jpg" alt="">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/15.jpg"></a>
										</div>
									</div>
								</div>
								<div class="item-content">
									<div class="display_table">
										<h4 class="item-meta display_table_cell">
											<a href="gallery-single.html">working process</a>
										</h4>
									</div>

								</div>
							</div>

						</div>

						<div class="isotope-item col-md-3 col-sm-4 col-md-push-6 bathroom">

							<div class="vertical-item gallery-item content-absolute vertical-center text-center square-item">
								<div class="item-media">
									<img src="images/work/11.jpg" alt="">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/11.jpg"></a>
										</div>
									</div>
								</div>
								<div class="item-content">
									<div class="display_table">
										<h4 class="item-meta display_table_cell">
											<a href="gallery-single.html">working process</a>
										</h4>
									</div>

								</div>
							</div>

						</div>

						<div class="isotope-item col-md-3 col-sm-4 hallway">

							<div class="vertical-item gallery-item content-absolute vertical-center text-center square-item">
								<div class="item-media">
									<img src="images/work/05.jpg" alt="">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/05.jpg"></a>
										</div>
									</div>
								</div>
								<div class="item-content">
									<div class="display_table">
										<h4 class="item-meta display_table_cell">
											<a href="gallery-single.html">working process</a>
										</h4>
									</div>

								</div>
							</div>

						</div>

						<div class="isotope-item col-md-3 col-sm-4 livingroom">

							<div class="vertical-item gallery-item content-absolute vertical-center text-center square-item">
								<div class="item-media">
									<img src="images/work/17.jpg" alt="">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/17.jpg"></a>
										</div>
									</div>
								</div>
								<div class="item-content">
									<div class="display_table">
										<h4 class="item-meta display_table_cell">
											<a href="gallery-single.html">working process</a>
										</h4>
									</div>

								</div>
							</div>

						</div>

						<div class="isotope-item col-md-3 col-sm-4 nursery">

							<div class="vertical-item gallery-item content-absolute vertical-center text-center square-item">
								<div class="item-media">
									<img src="images/work/16.jpg" alt="">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/16.jpg"></a>
										</div>
									</div>
								</div>
								<div class="item-content">
									<div class="display_table">
										<h4 class="item-meta display_table_cell">
											<a href="gallery-single.html">working process</a>
										</h4>
									</div>

								</div>
							</div>

						</div>

					</div>
				</div>
			</section>

			<section class="ls section_padding_top_75 section_padding_bottom_90 columns_margin_bottom_30 page_blog">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="framed-heading">
								<h2 class="section_header">
									Recentes publications
								</h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_border blog-item">
								<div class="item-media">
									<img src="images/gallery/18.png" alt="">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/18.png"></a>
											<a class="p-share" title="" href="#"></a>
											<a class="p-like" title="" href="#"></a>
										</div>
									</div>
								</div>
								<div class="item-content">
									<header class="entry-header">

										<span class="date">
											<time datetime="2016-01-10T15:05:23+00:00" class="entry-date">
												Septembre, 2019
											</time>
										</span>
										<h3 class="entry-title">
											<a href="suivi-conso-electricite.html" rel="bookmark">Suivi Conso électricité</a>
										</h3>
									</header>

									<p>
										Suivre au quotidien l'évolution de sa consommation d'électricité pour un client CIE au tarif Post-payé
										est la problématique qui a beaucoup scucité notre attention dans les temps qui précédèrent
										cette innovations. Désormais, grace à votre application Suivi Conso Electricité, et sans Internet, cela est possible.
									</p>

									<a href="suivi-conso-electricite.html" class="small-text extrabold">Télécharger</a>
								</div>
							</article>
						</div>

						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_border blog-item">
								<div class="item-media">
									<img src="images/gallery/19.png" alt="">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a>
											<a class="p-share" title="" href="#"></a>
											<a class="p-like" title="" href="#"></a>
										</div>
									</div>
								</div>
								<div class="item-content">
									<header class="entry-header">
										<span class="date">
											<time datetime="2016-01-10T15:05:23+00:00" class="entry-date">
												Octobre, 2020
											</time>
										</span>
										<h3 class="entry-title">
											<a href="suivi-conso-eau.html" rel="bookmark">Suivi Conso Eau</a>
										</h3>
									</header>
									<p>
										Suivre au quotidien l'évolution de sa consommation d'eau courante pour un client SODECI
										est la problématique qui a beaucoup scucité notre attention dans les temps qui précédèrent
										cette innovations. Désormais, grace à votre application Suivi Conso Eau, et sans Internet, cela est possible.
									</p></br>
									<a href="suivi-conso-eau.html" class="small-text extrabold">Télécharger</a>
								</div>
							</article>
						</div>

						<div class="col-md-4 col-sm-6">
							<article class="vertical-item content-padding with_border blog-item">
								<div class="item-media">
									<img src="images/gallery/20.png" alt="">
									<div class="media-links">
										<div class="links-wrap">
											<a class="p-view prettyPhoto " title="" data-gal="prettyPhoto[gal]" href="images/gallery/03.jpg"></a>
											<a class="p-share" title="" href="#"></a>
											<a class="p-like" title="" href="#"></a>
										</div>
									</div>
								</div>
								<div class="item-content">
									<header class="entry-header">
										<span class="date">
											<time datetime="2016-01-10T15:05:23+00:00" class="entry-date">
												Janvier, 2019
											</time>
										</span>
										<h3 class="entry-title">
											<a href="tableur-sms.html" rel="bookmark">Tableur SMS</a>
										</h3>
									</header>
									<p>
										Vous êtes responsable de communication, d'une petite, moyenne, grande communauté ou
										d'un etablissement scolaire, avec l'application android Tableur SMS, vous pouvez désormais envoyer automatiquement,
										à chaque destinatire, des SMS non groupé, avec un contenu personnalisé.
									</p></br>
									<a href="tableur-sms.html" class="small-text extrabold">Télécharger</a>
								</div>
							</article>
						</div>
					</div>
				</div>
			</section>

			<section class="ds ms color section_padding_top_75 section_padding_bottom_100">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 text-center">
							<div class="framed-heading bottommargin_15">
								<h2 class="section_header">
									Nos Partenaires
								</h2>
							</div>
							<p>

							</p>
						</div>
					</div>
					<div class="row topmargin_30">
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="./images/partners/01.png" alt="" />
							</a>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="./images/partners/02.png" alt="" />
							</a>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="./images/partners/03.png" alt="" />
							</a>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="./images/partners/04.png" alt="" />
							</a>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="./images/partners/05.png" alt="" />
							</a>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="./images/partners/06.png" alt="" />
							</a>
						</div>
					</div>
				</div>
			</section>
            @include('fronts.accessoirs._piedpage')


		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->

	 <script src="js/compressed.js"></script>
	<script src="js/main.js"></script>


</body>

</html>
