<header class="page_header header_darkgrey ms toggle_menu_left">
				<div class="container">
					<div class="row">
						<div class="col-md-9">
							<!-- main nav start -->
							<nav class="mainmenu_wrapper">
								<ul class="mainmenu nav sf-menu">
									<li class="active">
										<a href="index.html">Accueil</a>
									</li>
                                    @guest
                                    @else
									<li>
										<a href="#"></a>
									</li>
                                    <li>
										<a href="#">QR-CODE</a>
									</li>
                                    <li>

										<a href="{{ route('dashboard') }}">Tableau de bord</a>
									</li>
                                    @endguest
									<!--li>
										<a href="#" class="search_modal_button">
											<i class="flaticon-magnifying-glass"></i>
										</a>
									</li-->
									<!-- eof contacts -->
								</ul>
							</nav>
							<!-- eof main nav -->
						</div>
						<!-- eof .header_mainmenu  -->
						<div class="col-md-3 text-right">
							<span class="toggle_menu"><span></span>	</span>

                        @guest
                            @if (Route::has('login'))
							<a href="{{ route('login') }}" class="theme_button">Connexion</a>
                            @endif
                         @else

                         <a class="theme_button" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Déconnexion') }}
                         </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST">                                @csrf
                                    </form>
                         @endguest
						</div>








					</div>
				</div>
			</header>
