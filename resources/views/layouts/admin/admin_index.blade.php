@include('layouts.admin.admin_header')
<div class="right-sidebar">
	<div class="sidebar-title">
		<h3 class="weight-600 font-16 text-blue">
			Layout Settings
			<span class="btn-block font-weight-400 font-12">User Interface Settings</span>
		</h3>
		<div class="close-sidebar" data-toggle="right-sidebar-close">
			<i class="icon-copy ion-close-round"></i>
		</div>
	</div>
	<div class="right-sidebar-body customscroll">
		<div class="right-sidebar-body-content">
			<h4 class="weight-600 font-18 pb-10">Header Background</h4>
			<div class="sidebar-btn-group pb-30 mb-10">
				<a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
				<a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
			</div>

			<h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
			<div class="sidebar-btn-group pb-30 mb-10">
				<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light ">White</a>
				<a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
			</div>

			<h4 class="weight-600 font-18 pb-10">Menu Dropdown Icon</h4>
			<div class="sidebar-radio-group pb-10 mb-10">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="sidebaricon-1" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-1" checked="">
					<label class="custom-control-label" for="sidebaricon-1"><i class="fa fa-angle-down"></i></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="sidebaricon-2" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-2">
					<label class="custom-control-label" for="sidebaricon-2"><i class="ion-plus-round"></i></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="sidebaricon-3" name="menu-dropdown-icon" class="custom-control-input" value="icon-style-3">
					<label class="custom-control-label" for="sidebaricon-3"><i class="fa fa-angle-double-right"></i></label>
				</div>
			</div>

			<h4 class="weight-600 font-18 pb-10">Menu List Icon</h4>
			<div class="sidebar-radio-group pb-30 mb-10">
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="sidebariconlist-1" name="menu-list-icon" class="custom-control-input" value="icon-list-style-1" checked="">
					<label class="custom-control-label" for="sidebariconlist-1"><i class="ion-minus-round"></i></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="sidebariconlist-2" name="menu-list-icon" class="custom-control-input" value="icon-list-style-2">
					<label class="custom-control-label" for="sidebariconlist-2"><i class="fa fa-circle-o" aria-hidden="true"></i></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="sidebariconlist-3" name="menu-list-icon" class="custom-control-input" value="icon-list-style-3">
					<label class="custom-control-label" for="sidebariconlist-3"><i class="dw dw-check"></i></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="sidebariconlist-4" name="menu-list-icon" class="custom-control-input" value="icon-list-style-4" checked="">
					<label class="custom-control-label" for="sidebariconlist-4"><i class="icon-copy dw dw-next-2"></i></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="sidebariconlist-5" name="menu-list-icon" class="custom-control-input" value="icon-list-style-5">
					<label class="custom-control-label" for="sidebariconlist-5"><i class="dw dw-fast-forward-1"></i></label>
				</div>
				<div class="custom-control custom-radio custom-control-inline">
					<input type="radio" id="sidebariconlist-6" name="menu-list-icon" class="custom-control-input" value="icon-list-style-6">
					<label class="custom-control-label" for="sidebariconlist-6"><i class="dw dw-next"></i></label>
				</div>
			</div>

			<div class="reset-options pt-30 text-center">
				<button class="btn btn-danger" id="reset-settings">Reset Settings</button>
			</div>
		</div>
	</div>
</div>

<div class="left-side-bar">
	<div class="brand-logo">
		<a href="index.html">
			<img style="max-height:50px;max-width:50px;text-align:center" src="{{asset('public/images/circle-cropped.png')}}" alt="">
			<h5 style="margin-left: 25px;color:white;font-size:15px"><small>VMR Diagnostic Lab</small></h5>
		</a>
		<div class="close-sidebar" data-toggle="left-sidebar-close">
			<i class="ion-close-round"></i>
		</div>
	</div>
	<div class="menu-block customscroll">
		<div class="sidebar-menu">
			<ul id="accordion-menu">

				<li>
					<a href="calendar.html" class="dropdown-toggle no-arrow">
						<span class="micon dw dw-house-1"></span><span class="mtext">Home</span>
					</a>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="mobile-menu-overlay"></div>

<div class="main-container">
	<div class="xs-pd-20-10 pd-ltr-20">

		<div class="title pb-20">
			<h2 class="h3 mb-0">Clinic Overview</h2>
		</div>

		<div class="row pb-10">
			<div class="col-xl-3 col-lg-3 col-md-6 mb-20">
				<div class="card-box height-100-p widget-style3">
					<div class="d-flex flex-wrap">
						<div class="widget-data">
							<div class="weight-700 font-24 text-dark">{{$patient_count}}</div>
							<div class="font-14 text-secondary weight-500">Total Patient</div>
						</div>
						<div class="widget-icon">
							<div class="icon" data-color="#ff5b5b"><span class="icon-copy ti-heart"></span></div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- Simple Datatable start -->
	<div class="card-box mb-30">
		<div class="pd-20">

			<a style="float:right" class="btn btn-primary btn-sm" href="{{route('add_patient')}}" role="button"><span class="fa fa-plus"></span> Add Patient</a>
			<h4 class="text-blue h4">Patient List</h4>
		</div>
		<div class="pb-20">
			@if ($message = Session::get('delete'))
			<div class="alert alert-danger">
				<p>{{ $message }}</p>
			</div>
			@endif
			<table id="datatable-responsive" class="data-table table stripe hover nowrap">
				<thead>
					<tr>
						<th>Patient ID</th>
						<th class="table-plus datatable-nosort">Name</th>
						<th>Age</th>
						<th>Gender</th>
						<th>Test Result</th>
						<th>Date of Specimen Collection :</th>
						<th class="datatable-nosort">Action</th>
					</tr>
				</thead>
				<tbody>
					@foreach($patient_list as $list)
					<tr>
						<td>{{$list->id}}</td>
						<td class="table-plus">{{$list->name}}</td>
						<td>{{$list->age}}</td>
						<td>{{$list->gender}}</td>
						<td>{{$list->test_result}}</td>
						<td>{{$list->date_collection}}</td>
						<td>
							<div class="table-actions">

								<a href="{{asset($list->qr_code)}}" download><i class="icon-copy fa fa-download" aria-hidden="true" style="color:green"></i></a>
								<a href="{{route('patient_result',$list->id)}}"><i class="icon-copy fa fa-eye" aria-hidden="true" style="color:black"></i></i></a>
								<a href="{{route('edit_patient',$list->id)}}" data-color="#265ed7"><i class="icon-copy dw dw-edit2"></i></a>
								<a onclick="return confirmSubmit()" href="{{route('delete_patient',$list->id)}}" data-color="#e95959"><i class="icon-copy dw dw-delete-3"></i></a>
							</div>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	<!-- Simple Datatable End -->

</div>
<script>
	function confirmSubmit() {
		var agree = confirm("Are you sure you wish to continue?");
		if (agree)
			return true;
		else
			return false;
	}
</script>