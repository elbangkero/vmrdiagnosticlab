 <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-md-12 col-lg-12">
                 <div class="login-box bg-white box-shadow border-radius-10">
                     <div class="login-title">
                     <h5 style="text-align:center" class="text-primary">Login to</h5><br>
                         <h5  class="text-center text-primary">VMR Diagnostic Lab</h5><br>
                         
                         <img style="margin-left:43%;max-height:50px;max-width:50px;text-align:center" src="{{asset('public/images/circle-cropped.png')}}" alt="">
                     </div>
                     <form> 
                         <div class="input-group custom">
                             <input type="text" class="form-control form-control-lg" placeholder="Username">
                             <div class="input-group-append custom">
                                 <span class="input-group-text"><i class="icon-copy dw dw-user1"></i></span>
                             </div>
                         </div>
                         <div class="input-group custom">
                             <input type="password" class="form-control form-control-lg" placeholder="**********">
                             <div class="input-group-append custom">
                                 <span class="input-group-text"><i class="dw dw-padlock1"></i></span>
                             </div>
                         </div> 
                         <div class="row">
                             <div class="col-sm-12">
                                 <div class="input-group mb-0">
                                     <!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
                                     <a class="btn btn-primary btn-lg btn-block" href="{{route('admin_index')}}">Sign In</a>
                                 </div> 
                             </div>
                         </div>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>