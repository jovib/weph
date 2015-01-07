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
			<a class="navbar-brand" href="{{URL::to('/')}}">WePh</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a class="glyphicon glyphicon-home" href="{{URL::to('/')}}"></a></li>
				<li><a href="{{URL::to('/phone')}}">DIRECTORIO</a></li>
				<li><a href="{{URL::to('/user/')}}">USUARIOS</a></li>
				<li class="dropdown">
				<a href="#" class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown"><span class="caret"></span></a>
				<ul class="dropdown-menu" role="menu">
				<li><a href="{{URL::to('user/{user}')}}">Perfil</a></li>
				<li class="divider"></li>
				<li><a href="{{URL::to('/logout')}}">Salir</a></li>
				</ul>
				</li>
			</ul>
			@yield('search')
		</div>
	</div>
</div>
