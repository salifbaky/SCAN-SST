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
			<form method="get" class="searchform search-form form-inline" action="./">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="theme_button">Search</button>
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

			<header class="page_header_side page_header_side_sticked active-slide-side-header ds">
				<span class="toggle_menu_side toggler_light header-slide">
					<span></span>
				</span>
				<div class="scrollbar-macosx">
					<div class="side_header_inner">
						<div class="greylinks">
							<!-- user -->

							<div class="user-menu">
								<div class="user-menu-media">
									<img src="images/team/01.jpg" alt="">
								</div>
								<div class="user-menu-info">
									<h4>Esmel Stephane</h4>
									<ul class="nav vertical-nav menu-side-click">
										<li class="active">
											<a href="#">
												Administrateur
											</a>
											<ul>
												<li>
													<a href="#">
														<i class="fa fa-user"></i>
														Profil
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-edit"></i>
														Modififier
													</a>
												</li>
												<li>
													<a href="#">
														<i class="fa fa-sign-out"></i>
														Déconnexion
													</a>
												</li>
											</ul>
										</li>
									</ul>
								</div>
							</div>

							<!-- main side nav start -->
							<nav class="mainmenu_side_wrapper">
								<h3 class="main_bg_color2">Tableau de bord</h3>
								<ul class="nav vertical-nav menu-side-click">
									<li class="active">
										<a href="{{ route('accueil') }}">
											<i class="fa fa-home"></i>
											Accueil
										</a>

									</li>
                                    <li class="active">
										<a href="#">
											<i class="fa fa-th-large"></i>
											tableau de bord
										</a>

									</li>
                                    <li>
										<a href="#">
											<i class="fa fa-user"></i>
											Comptes
										</a>
										<ul>
											<li>
												<a href="#">
													Droit d'accès
												</a>
											</li>
										</ul>
									</li>
								</ul>

								<h3 class="dark_bg_color">Evènements</h3>
								<ul class="nav vertical-nav menu-side-click">
									<li>
										<a href="#">
											<i class="fa fa-file-text"></i>
											Incidents
										</a>
										<ul>
											<li>
												<a href="#">
													Déclarartions
												</a>
											</li>
											<li>
												<a href="#">
													Analyses
												</a>
											</li>
											<li>
												<a href="#">
													Traitements
												</a>
											</li>
											<li>
												<a href="#">
													Clôtures
												</a>
											</li>
										</ul>
									</li>
								</ul>

								<h3 class="dark_bg_color">CSST</h3>
								<ul class="nav vertical-nav menu-side-click">
                                <li>
										<a href="#">
											<i class="fa fa-suitcase"></i>
											Gestionnaire CSST
										</a>
										<ul>
											<li>
												<a href="#">
													Plublications
												</a>
											</li>
											<li>
												<a href="#">
													Gestion
												</a>
											</li>

										</ul>
									</li>
								</ul>
							</nav>
							<!-- eof main side nav -->
						</div>
					</div>
				</div>
			</header>

			<header class="page_header header_white">

				<!--div class="widget widget_search">

					<form method="get" class="searchform form-inline" action="./">
						<div class="form-group">
							<label class="screen-reader-text" for="widget-search">Search for:</label>
							<input id="widget-search" type="text" value="" name="search" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="theme_button">Search</button>
					</form>
				</div-->


				<div class="pull-right">
					<ul class="inline-dropdown inline-block">
						<li class="dropdown header-notes-dropdown">
							<a class="header-button" id="header-messages" data-target="#" href="./" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false">
								<i class="fa fa-envelope grey"></i>
								<span class="header-button-text">Notifications</span>
								<span class="header-dropdown-number">
									2
								</span>
							</a>

							<div class="dropdown-menu" role="menu" aria-labelledby="header-messages">
								<ul class="list1 no-bullets no-top-border no-bottom-border bottommargin_0 ">

                                    <li class="item-editable">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="teaser_icon label-danger round">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>
                                                            Ines Wavo
                                                            <small>il y a 2 heures</small>
                                                        </h5>
                                                        <div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                        </div>
                                                    </div>
                                                </div>
                                    </li>
                                    <li class="item-editable">
                                                <div class="media">
                                                    <div class="media-left">
                                                        <div class="teaser_icon label-danger round">
                                                            <i class="fa fa-bolt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="media-body">
                                                        <h5>
                                                            Ines Wavo
                                                            <small>il y a 2 heures</small>
                                                        </h5>
                                                        <div>
                                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
                                                        </div>
                                                    </div>
                                                </div>
                                    </li>

								</ul>
							</div>

						</li>
					</ul>
				</div>
				<!-- eof .header_right_buttons -->

			</header>

			<section class="ls ms section_padding_top_50 section_padding_bottom_50 columns_padding_5">
				<div class="container-fluid">

					<div class="row">
						<div class="col-sm-12">
							<h3>Dashboard
								<small></small>
							</h3>
						</div>
					</div>
					<!-- .row -->

					<div class="row">
						<div class="col-sm-6 col-lg-3">

							<div class="teaser media after_cover color_bg_1">

								<div class="media-body">
                                <h4 class="highlight counter-wrap">
										Total:
										<span class="counter" data-from="0" data-to="2630" data-speed="1800">0</span>
										<!--span class="counter-add">K</span-->
									</h4>
									<p>Incidents Déclarés</p>
								</div>

								<div class="media-right">
									<div class="teaser_icon size_small">
										<i class="fa fa-star-half-o"></i>
									</div>
								</div>
							</div>

						</div>
						<!-- .col-* -->

						<div class="col-sm-6 col-lg-3">

							<div class="teaser media after_cover color_bg_2">

								<div class="media-body">
									<h4 class="highlight counter-wrap">
										<span class="counter" data-from="0" data-to="223" data-speed="2500">0</span>
									</h4>
									<p>Incidents Analysés</p>
								</div>

								<div class="media-right">
									<div class="teaser_icon size_small">
										<i class="fa fa-users"></i>
									</div>
								</div>
							</div>

						</div>
						<!-- .col-* -->

						<div class="col-sm-6 col-lg-3">

							<div class="teaser media after_cover color_bg_3">

								<div class="media-body">
									<h4 class="counter highlight" data-from="0" data-to="325" data-speed="2100">0</h4>
									<p>Incidents Traités</p>
								</div>
								<div class="media-right">
									<div class="teaser_icon size_small">
										<i class="fa fa-shopping-cart"></i>
									</div>
								</div>
							</div>

						</div>
						<!-- .col-* -->

						<div class="col-sm-6 col-lg-3">

							<div class="teaser media after_cover color_bg_1">

								<div class="media-body">
									<h4 class="highlight counter-wrap">
										<span class="counter" data-from="0" data-to="121" data-speed="2500">0</span>
										<span class="counter-add">K</span>
									</h4>
									<p>Incidents Clôturés</p>
								</div>
								<div class="media-right">
									<div class="teaser_icon size_small">
										<i class="fa fa-line-chart"></i>
									</div>
								</div>
							</div>

						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->

					<div class="row">
						<!-- Yearly Visitors -->
						<div class="col-xs-12 col-md-6">
							<div class="with_background with_padding">
								<canvas class="canvas-chart-incidents"></canvas>
							</div>
						</div>
						<!-- .col-* -->
						<!-- Monthly Visitors -->
						<div class="col-xs-12 col-md-6">
							<div class="with_background with_padding">
								<canvas class="canvas-chart-recommandations"></canvas>
							</div>
						</div>

						<!--div class="col-xs-12 col-md-4">
							<div class="with_background with_padding">
								<canvas class="canvas-chart-incidents"></canvas>
							</div>
						</div-->

					</div>
					<!-- .row -->

					<div class="row">
						<div class="col-xs-12 col-md-6">

							<div class="with_background with_padding">
								<h4>
									Récentes Déclarations d'Incident
								</h4>
								<div class="admin-scroll-panel scrollbar-macosx">
									<ul class="list1 no-bullets">
										<li class="item-editable">
											<div class="media">
												<div class="media-left">
													<div class="teaser_icon label-danger round">
														<i class="fa fa-bolt"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Ferdinand Koko
														<small>il y a 2 heures</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="media-left">
													<div class="teaser_icon label-danger round">
														<i class="fa fa-bolt"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Ines Wavo
														<small>il y a 2 heures</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable">
											<div class="media">
												<div class="media-left">
													<div class="teaser_icon label-danger round">
														<i class="fa fa-bolt"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Melissa Kouadio
														<small>il y a 2 heures</small>
													</h5>
													<div>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>


									</ul>
								</div>
								<!-- .admin-scroll-panel -->
								<div class="text-right greylinks panel-view-all">
									<a href="#">Tout voir</a>
								</div>
							</div>
							<!-- .with_background -->
						</div>
						<div class="col-xs-12 col-md-6">

							<div class="with_background with_padding">
								<h4>
									Récentes Clôtures d'Incident
								</h4>
								<div class="admin-scroll-panel scrollbar-macosx">
									<ul class="list1 no-bullets">
										<li class="item-editable small-teaser">
											<div class="media">
												<!--div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
												</div-->
												<div class="media-left">
													<div class="teaser_icon label-success fontsize_16">
														<i class="fa fa-file-text"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Site:
														<small>Site 01</small>
													</h5>
                                                    <div>
														<p>5/05/2024</p>
													</div>
													<div>
														<h6>Observation</h6>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable small-teaser">
											<div class="media">
												<!--div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
												</div-->
												<div class="media-left">
													<div class="teaser_icon label-success fontsize_16">
														<i class="fa fa-file-text"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Site:
														<small>Site 01</small>
													</h5>
                                                    <div>
														<p>5/05/2024</p>
													</div>
													<div>
														<h6>Observation</h6>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
										<li class="item-editable small-teaser">
											<div class="media">
												<!--div class="item-edit-controls darklinks">
													<a href="#">
														<i class="fa fa-share-square-o"></i>
													</a>
													<a href="#">
														<i class="fa fa-edit"></i>
													</a>
												</div-->
												<div class="media-left">
													<div class="teaser_icon label-success fontsize_16">
														<i class="fa fa-file-text"></i>
													</div>
												</div>
												<div class="media-body">
													<h5>
														Site:
														<small>Site 01</small>
													</h5>
                                                    <div>
														<p>5/05/2024</p>
													</div>
													<div>
														<h6>Observation</h6>
														Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cum, corporis. Voluptatibus odio perspiciatis non quisquam provident, quasi eaque officia.
													</div>
												</div>
											</div>
										</li>
									</ul>
								</div>
								<!-- .admin-scroll-panel -->
								<div class="text-right greylinks panel-view-all">
									<a href="#">Tout voir</a>
								</div>
							</div>
							<!-- .with_background -->
						</div>
						<!-- .col-* -->

						<div class="col-xs-12 col-md-12">
							<div class="with_background with_padding">
								<h4>
									Statistique de gestion
								</h4>
								<div class="admin-scroll-panel scrollbar-macosx">

									<ul class="list1 no-bullets">
										<li>
											<div class="media small-teaser">
												<div class="media-left">
													<i class="fa fa-users highlight"></i>
												</div>
												<div class="media-body">
													<strong class="grey">
														150
													</strong>
													Responsables QHSE
												</div>
											</div>
										</li>
										<li>
											<div class="media small-teaser">
												<div class="media-left">
													<i class="fa fa-users highlight"></i>
												</div>
												<div class="media-body">
													<strong class="grey">
														244
													</strong>
													Agents de déclarartion
												</div>
											</div>
										</li>
										<li>
											<div class="media small-teaser">
												<div class="media-left">
													<i class="fa fa-users highlight"></i>
												</div>
												<div class="media-body">
													<strong class="grey">
														40
													</strong>
													Traiteurs
												</div>
											</div>
										</li>
										<li>
											<div class="media small-teaser">
												<div class="media-left">
													<i class="fa fa-building highlight"></i>
												</div>
												<div class="media-body">
													<strong class="grey">
														340
													</strong>
													Départements
												</div>
											</div>
										</li>
                                        <li>
											<div class="media small-teaser">
												<div class="media-left">
													<i class="fa fa-location-arrow highlight"></i>
												</div>
												<div class="media-body">
													<strong class="grey">
														568
													</strong>
													Sites
												</div>
											</div>
										</li>
									</ul>

								</div>
								<!-- .admin-scroll-panel -->
							</div>
							<!-- .with_background -->
						</div>
						<!-- .col-* -->

						<!--div class="col-xs-12 col-md-6">
							<div class="with_background with_padding">
								<h4>
									Last Notes
								</h4>
								<div class="admin-scroll-panel scrollbar-macosx">

									<ul class="list1 no-bullets">
										<li>
											<div class="media small-teaser">
												<div class="media-left">
													<div class="teaser_icon label-success round">
														<i class="fa fa-shopping-cart"></i>
													</div>
												</div>
												<div class="media-body">
													<span class="grey">
														New order
													</span>
													<small class="pull-right">2 minutes ago</small>
												</div>
											</div>
										</li>
										<li>
											<div class="media small-teaser">
												<div class="media-left">
													<div class="teaser_icon label-success round">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="media-body">
													<span class="grey">
														New user registered
													</span>
													<small class="pull-right">3 minutes ago</small>
												</div>
											</div>
										</li>

										<li>
											<div class="media small-teaser">
												<div class="media-left">
													<div class="teaser_icon label-danger round">
														<i class="fa fa-bolt"></i>
													</div>
												</div>
												<div class="media-body">
													<span class="grey">
														Server overloaded
													</span>
													<small class="pull-right">5 minutes ago</small>
												</div>
											</div>
										</li>

										<li>
											<div class="media small-teaser">
												<div class="media-left">
													<div class="teaser_icon label-warning round">
														<i class="fa fa-bell-o"></i>
													</div>
												</div>
												<div class="media-body">
													<span class="grey">
														Long database query
													</span>
													<small class="pull-right">5 minutes ago</small>
												</div>
											</div>
										</li>

										<li>
											<div class="media small-teaser">
												<div class="media-left">
													<div class="teaser_icon label-success round">
														<i class="fa fa-user"></i>
													</div>
												</div>
												<div class="media-body">
													<span class="grey">
														New user registered
													</span>
													<small class="pull-right">8 minutes ago</small>
												</div>
											</div>
										</li>

									</ul>
								</div>
							</div>
						</div-->
						<!-- .col-* -->


					</div>
					<!-- .row -->
				</div>
				<!-- .container -->
			</section>

		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
    @include('fronts.accessoirs._jslink')

</body>

</html>
