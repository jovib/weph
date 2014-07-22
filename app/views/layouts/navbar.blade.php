@yield('js-tablesorter')
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="{{URL::to('/')}}">Phonebook</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{URL::to('/')}}">Inicio</a></li>
				<li><a href="{{URL::to('/phone')}}">Directorio</a></li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="{{URL::to('/user')}}">Ver todos</a></li>
				<li class="divider"></li>
				<li><a href="{{URL::to('/logout')}}">Salir</a></li>
				</ul>
				</li>
			</ul>
			@yield('search')
		</div>
	</div>
</div>
