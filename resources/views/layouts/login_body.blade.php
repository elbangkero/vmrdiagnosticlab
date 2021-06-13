 <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-md-12 col-lg-12">
                 <div class="login-box bg-white box-shadow border-radius-10">
                     <div class="login-title">
                         <h5 style="text-align:center" class="text-primary">Login to</h5><br>
                         <h5 class="text-center text-primary">VMR Diagnostic Lab</h5><br>

                         <img style="margin-left:43%;max-height:50px;max-width:50px;text-align:center" src="{{asset('public/images/circle-cropped.png')}}" alt="">
                     </div>
                     <form method="POST" action="{{ route('login') }}">
                         @csrf
                         <div class="input-group custom">


                             <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                             <div class="input-group-append custom">
                                 <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                             </div>
                             @error('email')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror

                         </div>
                         <div class="input-group custom">
                             <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="**********">
                             <div class="input-group-append custom">
                                 <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                             </div>
                             @error('password')
                             <span class="invalid-feedback" role="alert">
                                 <strong>{{ $message }}</strong>
                             </span>
                             @enderror

                         </div>
                         <div class="row">
                             <div class="col-sm-12">
                                 <div class="input-group mb-0">

                                     <button type="submit" class="btn btn-primary btn-lg btn-block">
                                         {{ __('Login') }}
                                     </button>
                                 </div>
                             </div>
                     </form>

                 </div>
             </div>
         </div>
     </div>
 </div>