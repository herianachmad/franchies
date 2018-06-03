<section class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
				<span class="icon icon-bar"></span>
			</button>
			<a href="#" class="navbar-brand">FRANCHI-ES</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#home" class="smoothScroll">HOME</a></li>
				<li><a href="#gallery" class="smoothScroll">FOOD GALLERY</a></li>
				<li><a href="#menu" class="smoothScroll">SPECIAL MENU</a></li>
				<li><a href="#team" class="smoothScroll">CHEFS</a></li>
				<li><a href="#contact" class="smoothScroll">CONTACT</a></li>
				<li class="dropdown">
				 <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{AUTH::user()->name}}<span class="caret"></span></a>
				 <ul class="dropdown-menu">
					 <li><a href="#">Action</a></li>
					 <li><a href="#">Another action</a></li>
					 <li><a href="#">Something else here</a></li>
					 <li role="separator" class="divider"></li>
					 <li><a href="#">Separated link</a></li>
					 <li role="separator" class="divider"></li>
					 <li>
							 <a href="{{ route('logout') }}"
									 onclick="event.preventDefault();
														document.getElementById('logout-form').submit();">
									 Logout
							 </a>

							 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
									 {{ csrf_field() }}
							 </form>
					 </li>
				 </ul>
			 </li>
			</ul>
		</div>
	</div>
</section>
