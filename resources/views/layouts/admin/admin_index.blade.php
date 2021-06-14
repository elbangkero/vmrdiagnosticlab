@include('layouts.admin.admin_header')

@include('layouts.admin.admin_overlay')
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