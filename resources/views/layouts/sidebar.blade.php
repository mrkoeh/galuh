<div id="sidebar" class="sidebar responsive ace-save-state">
<script type="text/javascript">
try{ace.settings.loadState('sidebar')}catch(e){}
</script>
@if(Auth::User()->role_id == 1)
<ul class="nav nav-list">
	<li class="active">
		<a href=""><i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> Dashboard </span>
		</a><b class="arrow"></b>
	</li>

	<li class="">
		<a href="/organization" ><i class="menu-icon fa fa-newspaper-o"></i>
			<span class="menu-text"> Organization </span>
		</a>
	</li>
	<li class="">
		<a href="/role" ><i class="menu-icon fa fa-newspaper-o"></i>
			<span class="menu-text"> User role </span>
		</a>
	</li>
	<li class="">
		<a href="/pic" ><i class="menu-icon fa fa-newspaper-o"></i>
			<span class="menu-text"> User role </span>
		</a>
	</li>

</ul>
@elseif(Auth::User()->role_id > 1)
<ul class="nav nav-list">
	<li class="active">
		<a href=""><i class="menu-icon fa fa-tachometer"></i>
			<span class="menu-text"> Dashboard </span>
		</a><b class="arrow"></b>
	</li>

	<li class="">
		<a href="/lihat1" ><i class="menu-icon fa fa-newspaper-o"></i>
			<span class="menu-text"> Organization </span>
		</a>
	</li>
	<li class="">
		<a href="/lihat2" ><i class="menu-icon fa fa-newspaper-o"></i>
			<span class="menu-text"> User role </span>
		</a>
	</li>
	<li class="">
		<a href="/lihat3" ><i class="menu-icon fa fa-newspaper-o"></i>
			<span class="menu-text"> User role </span>
		</a>
	</li>

</ul>
<!-- /.nav-list -->
@endif
<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
</div>
</div>