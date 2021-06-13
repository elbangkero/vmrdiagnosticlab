<div class="header">
	<div class="header-left">
		<div class="menu-icon dw dw-menu"></div>
		<div class="header-search">
		</div>
	</div>
	<div class="header-right">
		<div class="user-info-dropdown">
			<div class="dropdown">
				<a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown"> 
					<span class="user-name">{{auth()->user()->name}}</span>
				</a>
				<div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list"> 
					<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
					<i class="dw dw-logout"></i> {{ __('Logout') }}
				</a>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
					@csrf
				</form>
				</div>
			</div>
		</div>
	</div>
</div>