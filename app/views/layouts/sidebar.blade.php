<div class="col-sm-3 col-md-2 sidebar">
	<ul class="nav nav-sidebar">
		<li @yield('phone-active')><a href="{{URL::to('/phone')}}">Directorio</a></li>
		@yield('phone-create')
	</ul>
</div>
