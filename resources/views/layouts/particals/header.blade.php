<header class="header-area">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<nav class="main-nav">
						<!-- ***** Logo Start ***** -->
						<a href="{{route('index')}}" class="logo">

							<img src="images/logo-blue.png" alt="Chilo">
						</a>
						<!-- ***** Logo End ***** -->


						<!-- ***** Menu Start ***** -->
						<ul class="nav">
							<li><a href="{{route('index')}}">خانه</a></li>
							<li class="submenu">
								<a href="javascript:;">لندینگ پیج</a>
								<ul>
									<li><a href="#features">امکانات</a></li>
									<li><a href="#testimonials">مشتریان</a></li>
									<li><a href="#pricing-plans">تعرفه ها</a></li>
									<li><a href="#blog">وبلاگ</a></li>

								</ul>
							</li>
							<li class="submenu">
								<a href="javascript:;">صفحات</a>
								<ul>
									<li><a href="{{route('about.index')}}">درباره ما</a></li>
									<li><a href="{{route('features.index')}}">خدمات ما</a></li>
									<li><a href="{{route('faq.index')}}">سوالات متداول</a></li>
									<li><a href="{{route('blog.index')}}">وبلاگ</a></li>
								</ul>
							</li>
							<li><a href="{{route('contact.index')}}">تماس با ما</a></li>

						</ul>
						<a class="menu-trigger">
							<span>منو</span>
						</a>
						<!-- ***** Menu End ***** -->

						<div class="buttons">

                            @if (Route::has('login'))
                            @auth
                            <form class="flogin"  method="post" action="{{route('logout') }}">
                                @csrf
                                <button class="btn-register" type="submit">خروج</button>
                            </form>
							<a href="{{ route('dashboard.index') }}" class="btn-register"><span> داشبورد </span></a>
                            @else
                            <a href="{{ route('login') }}">ورود کاربران</a>

                            @if (Route::has('register'))

							<a href="{{ route('register') }}" class="btn-register">ثبت نام</a>

                            @endif
                            @endauth
                    @endif
						</div>
					</nav>
				</div>
			</div>
		</div>
	</header>
