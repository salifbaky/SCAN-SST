
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
														Santé
													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<p class="divider_20">
														<span class="bold highlight2"></span><br><br>
														La santé au travail n'est pas seulement un objectif, c'est une valeur fondamentale qui guide nos actions au quotidien

													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<a href="#" class="theme_button color2">En savoir plus</a>
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
														Sécurité
													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<p class="divider_20">
														<span class="bold highlight2"></span><br><br>
														Prioriser la sécurité au travail est bien plus qu'une obligation légale.

													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
                                                <a href="#" class="theme_button color2">En savoir plus</a>
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
														Travail
													</p>
												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
													<p class="divider_20">
														<span class="bold highlight2"></span><br><br>
														Le travail est bien plus qu'une simple activité ; c'est une source de développement, d'accomplissement et de connexion avec le monde qui nous entoure

												</div>
												<div class="intro-layer to_animate" data-animation="fadeInLeft">
                                                <a href="#" class="theme_button color2">En savoir plus</a>
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
									<p>SCAN-SST</p>
								</h2></br>
								<span class="small">SCAN-SST est une application complète de gestion des risques professionnels, facilitant l'identification, l'évaluation et la prévention des dangers en milieu de travail, tout en favorisant une culture de sécurité proactive.</span>
							</div>
							<p>SCAN-SST est une application innovante dédiée à la santé et à la sécurité au travail. Conçue pour répondre aux besoins des entreprises de toutes tailles et de tous secteurs, elle offre une approche holistique de la gestion des risques professionnels.
							</p>
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
										Mes
										<br> Fonctionnalités
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
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Déclaration d'incident</h4>
											<p>
                                            La fonctionnalité de déclaration d'incident de SCAN-SST est essentielle pour une gestion efficace des risques professionnels.
                                            Elle permet aux employés de signaler rapidement et facilement les incidents survenus en milieu de travail, ce qui permet une réponse rapide et appropriée de la part de l'entreprise.
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
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Analyse des Risques</h4>
											<p>
                                            SCAN-SST permet d'identifier, d'évaluer et de prioriser les risques professionnels grâce à des nos agents expériementés en la matière. Cette approche aide les entreprises à mettre en œuvre des mesures préventives efficaces pour réduire les accidents et les incidents.
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
										<div class="media-body">
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Gestion des Incidents</h4>
											<p>
                                            L'application permet de signaler et de suivre les incidents, facilitant ainsi la gestion proactive des situations d'urgence. Les données collectées alimentent une base de connaissances qui peut être utilisée pour prévenir les récurrences et améliorer continuellement les pratiques de sécurité.
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
										<div class="media-body">
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Formation et Sensibilisation</h4>
											<p>
                                            La plateforme SCAN-SST propose des thématiques sur divers aspects de la santé et de la sécurité au travail. Ces informations sont adaptées aux besoins spécifiques de chaque entreprise et service.
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
										<div class="media-body">
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Suivi des Indicateurs de Performance</h4>
											<p>
                                            L'application fournit des tableaux de bord personnalisés permettant de suivre les indicateurs de performance clés en matière de santé et de sécurité au travail. Ces données aident les entreprises à évaluer leur conformité réglementaire, à identifier les domaines à améliorer et à démontrer leur engagement envers la sécurité des employés.
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
										<div class="media-body">
											<h4 class="text-uppercase fontsize_20 extrabold bottommargin_20">Communication et Collaboration</h4>
											<p>
                                            SCAN-SST facilite la communication et la collaboration entre les différentes parties prenantes, y compris les employés, les gestionnaires, les représentants syndicaux et les organismes de réglementation. Cette transparence favorise un climat de confiance et renforce l'engagement envers la santé et la sécurité au travail.
											</p>
										</div>
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
									Recentes Séances CSST
								</h2>
							</div>
						</div>
					</div>
					<div class="row">

                    <div class="col-sm-10 col-sm-push-1">

<div class="widget widget_slider">

<h3 class="widget-title">Thématiques</h3>
<div class="owl-carousel" data-nav="true" data-loop="true" data-autoplay="false" data-items="1" data-responsive-lg="1" data-responsive-md="1" data-responsive-sm="1" data-responsive-xs="1">


    <div class="vertical-item">


    <div class="side-item event-item content-padding with_border bottommargin_30">

<div class="row">

    <div class="col-md-6">
        <div class="item-media">
            <img src="images/gallery/07.jpg" alt="">
            <div class="media-links">
                <a class="abs-link" title="" href="event-single-full.html"></a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="item-content">
            <h3 class="entry-title topmargin_0">
                <a href="event-single-full.html">Renforcement de la culture de sécurité</a>
            </h3>

            <p class="item-meta greylinks">
                <i class="rt-icon2-calendar4 highlight"></i> 3 juin 2024
                <i class="rt-icon2-location2 highlight"></i> Salle 10, SGE
            </p>
            <p> Focus sur l'engagement des employés, la communication ouverte, et la promotion d'une attitude proactive en matière de sécurité. Objectif : créer une culture d'échange où chacun se sent responsabilisé pour la sécurité au travail..</p>

        </div>
    </div>

</div>
</div>


<div class="side-item event-item content-padding with_border bottommargin_30">

<div class="row">

    <div class="col-md-6">
        <div class="item-media">
            <img src="images/gallery/09.jpg" alt="">
            <div class="media-links">
                <a class="abs-link" title="" href="event-single-full.html"></a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="item-content">
            <h3 class="entry-title topmargin_0">
                <a href="event-single-full.html">Gestion des risques professionnels</a>
            </h3>

            <p class="item-meta greylinks">
                <i class="rt-icon2-calendar4 highlight"></i> 10 mai 2024,
                <i class="rt-icon2-location2 highlight"></i> Salle 15, SGE
            </p>
            <p>Analyse approfondie des dangers potentiels en milieu de travail, évaluation des mesures préventives et planification de stratégies pour assurer un environnement de travail sécurisé et conforme aux réglementations.</p>

        </div>
    </div>

</div>
</div>


    </div>
    <div class="vertical-item">


    <div class="side-item event-item content-padding with_border bottommargin_30">

<div class="row">

    <div class="col-md-6">
        <div class="item-media">
            <img src="images/gallery/07.jpg" alt="">
            <div class="media-links">
                <a class="abs-link" title="" href="event-single-full.html"></a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="item-content">
            <h3 class="entry-title topmargin_0">
                <a href="event-single-full.html">Promotion de la santé mentale au travail</a>
            </h3>

            <p class="item-meta greylinks">
                <i class="rt-icon2-calendar4 highlight"></i> 5 avril 2024,
                <i class="rt-icon2-location2 highlight"></i> Salle 1, SGE
            </p>
            <p>Discussion sur les facteurs de stress, les initiatives de bien-être et les ressources de soutien pour favoriser un environnement professionnel sain et équilibré. Objectif : sensibiliser et soutenir la santé mentale des employés pour une productivité optimale..</p>

        </div>
    </div>

</div>
</div>


<div class="side-item event-item content-padding with_border bottommargin_30">

<div class="row">

    <div class="col-md-6">
        <div class="item-media">
            <img src="images/gallery/09.jpg" alt="">
            <div class="media-links">
                <a class="abs-link" title="" href="event-single-full.html"></a>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="item-content">
            <h3 class="entry-title topmargin_0">
                <a href="event-single-full.html">Culture de sécurité et engagement des employés</a>
            </h3>

            <p class="item-meta greylinks">
                <i class="rt-icon2-calendar4 highlight"></i> 20 mars 2024,
                <i class="rt-icon2-location2 highlight"></i> Salle 10, SGE
            </p>
            <p>Exploration des valeurs organisationnelles, encouragement de la participation active des employés dans la sécurité, et création d'une culture où la sécurité est une priorité partagée. Objectif : renforcer la responsabilité collective et l'implication dans les pratiques sécuritaires..</p>

        </div>
    </div>

</div>
</div>



    </div>
</div>

</div>




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
								<img src="images/cie1.png" alt="" />
							</a>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="images/eranove-academy.png" alt="" />
							</a>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="images/gs2e.jfif" alt="" />
							</a>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="images/sodeci.png" alt="" />
							</a>
						</div>
                        <div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="images/globux.jpg" alt="" />
							</a>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 text-center to_animate" data-animation="pullUp">
							<a href="#" class="partner-link">
								<img src="images/veone.png" alt="" />
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
