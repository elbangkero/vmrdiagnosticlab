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
                        <h4 class="text-blue h4">Account Registration</h4>
                    </div>
                    <div class="pull-right">
                        <a href="{{route('mng_admin')}}" class="btn btn-primary btn-sm"><i class="fa fa-angle-left"></i> Go Back</a>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <h6>{{ $error }}</h6>
                        @endforeach
                    </ul>
                </div>
                @endif
                @foreach($edit_user as $user)
                <form action="{{ route('update_admin',$user->id) }}" method="POST" enctype="multipart/form-data" class="form-horizontal form-label-left">
                    @csrf
                    @method('PUT')
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Name : </label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" name="name" type="text" placeholder="Full Name" value="{{$user->name}}" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Email : </label>
                        <div class="col-sm-12 col-md-10">
                            <input class="form-control" type="email" name="email" placeholder="email"  value="{{$user->email}}"  required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Password: </label>
                        <div class="col-sm-4 col-md-4">
                            <input class="form-control" type="password" name="password" placeholder="password" >
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-12 col-md-2 col-form-label">Confirm Password : </label>
                        <div class="col-sm-4 col-md-4">
                            <input class="form-control" type="password" name="password_confirmation" placeholder="confirm password" >
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