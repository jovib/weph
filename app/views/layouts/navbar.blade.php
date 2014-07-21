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
			<a class="navbar-brand" href="{{URL::to('/phone')}}">Phonebook</a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="{{URL::to('/')}}">Inicio</a></li>
				<li><a href="{{URL::to('/user')}}">Usuarios</a></li>
			</ul>
			@yield('search')
		</div>
	</div>
</div>
