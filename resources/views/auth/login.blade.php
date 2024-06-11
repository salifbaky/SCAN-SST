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
									Connectez-vous
								</h4>
								<hr class="bottommargin_30">
								<div class="wrap-forms">
									<form method="POST" action="{{ route('login') }}">
                                    @csrf
										<div class="row">
											<div class="col-sm-12">
												<div class="form-group has-placeholder">
													<label for="email">Addresse Email</label>
													<i class="grey fa fa-envelope-o"></i>
													<input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
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
													<label for="password">Password</label>
													<i class="grey fa fa-pencil-square-o"></i>
													<input type="password" class="form-control" id="password" name="password" required placeholder="Password">
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
												<div class="checkbox">
													<label>
														<input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Se souvenir
													</label>
												</div>
											</div>
										</div>


										<button type="submit" class="theme_button block_button color1">Connexion</button>
									</form>
								</div>
                                @if (Route::has('password.request'))
								<div class="darklinks text-center topmargin_20">

									<a role="button" data-toggle="collapse" href="#signin-resend-password" aria-expanded="false" aria-controls="signin-resend-password">
										Mot de passe oublié?
									</a>

								</div>
								<div class="collapse form-inline-button" id="signin-resend-password">
									<form class="form-inline topmargin_20" method="POST" action="{{ route('password.email') }}">
                                    @csrf
										<div class="form-group">
											<label class="sr-only">Enter your e-mail</label>
											<input type="email" id="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Entrez votre mail">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                        </div>
										<button type="submit" class="theme_button with_icon">
											<i class="fa fa-share"></i>
										</button>
									</form>
								</div>
                                @endif

							</div>
							<!-- .with_background -->

							<p class="divider_20 text-center">
								<a href="{{ route('register') }}">Nouveau compte</a>
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
