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

        @include('fronts.accessoirs._adresse')
			<!-- template sections -->
			<section class="ls ms section_padding_top_100 section_padding_bottom_100 section_full_height">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
							<div class="with_background with_padding">

								<h4 class="text-center">
									Création de compte
								</h4>
								<hr class="bottommargin_30">
								<div class="wrap-forms">
									<form  method="POST" action="{{ route('register') }}">

                                    @csrf

										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="name">Nom</label>
													<!--i class="grey fa fa-user"></i -->
													<input type="text" class="form-control" id="name" name="name" placeholder="Nom"  value="{{ old('name') }}" >

                                                    @error('name')
                                                    <p style="color:red;">Nom obligatoire</p>
                                                    @enderror

                                                </div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="prenoms">Prénoms</label>
													<input type="text" class="form-control" id="prenoms" name="prenoms" placeholder="Prénoms" value="{{ old('prenoms') }}">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="email">Address Mail</label>
													<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                                </div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="matricule">Matricule</label>
													<input type="text" class="form-control" id="matricule" name="matricule" placeholder="Matricule" value="{{ old('matricule') }}">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="contacts">Contacts</label>
													<input type="text" class="form-control" id="contacts" name="contacts" placeholder="Contacts" value="{{ old('contacts') }}">
												</div>
											</div>
										</div>


                                        <div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="departement">departement</label>
													<input type="text" class="form-control" id="departement" name="departement" placeholder="Département" value="{{ old('departement') }}">
												</div>
											</div>
										</div>


                                        <div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="fonction">Fonction</label>
													<input type="text" class="form-control" id="fonction" name="fonction" placeholder="Fonction" value="{{ old('fonction') }}">
												</div>
											</div>
										</div>

                                        <div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="site">Site</label>
													<input type="text" class="form-control" id="site" name="site" placeholder="Site" value="{{ old('site') }}">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="password">Mot de passe</label>
													<!--i class="grey fa fa-pencil-square-o"></i-->
													<input type="password" class="form-control" id="password" name="password" placeholder="Mot de passe">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                                </div>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="password-confirm">Confirmation </label>
													<!--i class="grey fa fa-pencil-square-o"></i-->
													<input type="password" class="form-control" id="password-confirm" name="password_confirmation" placeholder="Confirmation">
												</div>
											</div>
										</div>

										<!--div class="row">
											<div class="col-sm-12">
												<div class="checkbox">
													<label>
														<input type="checkbox"> Rememrber Me
													</label>
												</div>
											</div>
										</div -->

										<button type="submit" class="theme_button block_button color1">Valider</button>
									</form>
								</div>

							</div>
							<!-- .with_background -->

							<p class="divider_20 text-center">
								Vous disposé déjà d'un compte?
								<a href="{{ route('login') }}">connectez-vous</a>.
							</p>

						</div>
						<!-- .col-* -->
					</div>
					<!-- .row -->
				</div>
				<!-- .container -->
			</section>
            @include('fronts.accessoirs._piedpage')
		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->
    @include('fronts.accessoirs._jslink')

</body>

</html>
