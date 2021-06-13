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
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix" style="margin-bottom: 50px;">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Personal Information</h4>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('admin_index')}}" class="btn btn-primary btn-sm"><i class="fa fa-angle-left"></i> Go Back</a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @foreach ($edit_patient as $patient)

                <form action="{{ route('update_patient',$patient->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Name : </label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="name" type="text" placeholder="Patient Full Name" value="{{$patient->name}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Age : </label>
                        <div class="col-sm-1 col-md-1">
                            <input class="form-control" name="age" type="text" placeholder="age" value="{{$patient->age}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Gender : </label>
                        <div class="col-sm-12 col-md-10">
                            <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="gender" value="male" autocomplete="off" @if($patient->gender == "male") checked @endif> Male
                                </label>
                                <label class="btn btn-outline-secondary">
                                    <input type="radio" name="gender" value="female" autocomplete="off" @if($patient->gender == "female") checked @endif> Female
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Birthdate : </label>
                        <div class="col-sm-2 col-md-2">
                            <input class="form-control date-picker" name="birthday" placeholder="Select Date" type="text" value="{{$patient->birthday}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Address : </label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="address" placeholder="address" value="{{$patient->address}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Patient Control Number: </label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="patient_id" placeholder="control number" value="{{$patient->patient_id}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Specimen No : </label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="text" name="specimen_no" placeholder="specimen no" value="{{$patient->specimen_no}}">
                        </div>
                    </div>
            </div>
            <!-- Default Basic Forms End -->
            <!-- Default Basic Forms Start -->
            <div class="pd-20 card-box mb-30">
                <div class="clearfix" style="margin-bottom: 50px;">
                    <div class="pull-left">
                        <h4 class="text-blue h4">Test Result</h4>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Test Result : </label>
                    <div class="col-sm-12 col-md-10">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="test_result" value="positive" autocomplete="off" required @if($patient->test_result == "positive") checked @endif> Positive
                            </label>
                            <label class="btn btn-outline-secondary">
                                <input type="radio" name="test_result" value="negative" autocomplete="off" @if($patient->test_result == "negative" ) checked @endif> Negative
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Remarks : </label>
                    <div class="col-sm-12 col-md-10">
                        <input class="form-control" type="text" name="remarks" placeholder="remarks" value="This Laboratory result should be interpreted in correlation with clinical data" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Date Requested : </label>
                    <div class="col-sm-2 col-md-2">
                        <input class="form-control date-picker" name="date_requested" placeholder="Select Date" type="text" value="{{$patient->date_requested}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Date Received : </label>
                    <div class="col-sm-2 col-md-2">
                        <input class="form-control date-picker" name="date_received" placeholder="Select Date" type="text" value="{{$patient->date_received}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Date of Specimen Collection : </label>
                    <div class="col-sm-2 col-md-2">
                        <input class="form-control date-picker" name="date_collection" placeholder="Select Date" type="text" value="{{$patient->date_collection}}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Specimen Type : </label>
                    <div class="col-sm-2 col-md-2">
                        <input class="form-control" type="text" name="specimen_type" placeholder="specimen type" value="OPS & NPS" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-12 col-md-2 col-form-label">Laboratory Test Performed : </label>
                    <div class="col-sm-6 col-md-6">
                        <input class="form-control" type="text" name="test_perform" placeholder="test perform" value="SARS-CoV-2 (causative agent of COVID-19) virus detection by Real-Time Polymerase Chain Reaction" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <div style="float:right" class="offset-6">
                        <button type="submit" class="btn btn-success btn-sm">Submit</button>
                    </div>
                </div>
                </form>
                @endforeach
            </div>
            <!-- Default Basic Forms End -->



        </div>
    </div>
</div>
<!-- js -->