@include('layouts.admin.admin_header')
@include('layouts.admin.admin_overlay')
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