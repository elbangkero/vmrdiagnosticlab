 <div class="bg" style="z-index: -1;"></div>
 <div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
     <div class="container">
         <div class="row align-items-center">
             <div class="col-sm-12 col-md-6 offset-md-3">
                 <div class="card card-box">

                     @php
                     try { 
                     $exists->id;
                     } catch (Exception $e) {
                     
                     echo "<div class='card-header' style='text-align: center;'>
                     <i class='fa fa-warning'  style='color:red;'></i> Data doesn't  exist anymore <i class='fa fa-warning'  style='color:red'></i> 
                     </div>";

                     return false;
                     }
                     @endphp
                     <div class="card-header">
                         Verify Certificate
                     </div>
                     @foreach($show_result as $info)
                     <div class="card-body">
                         <h4>{{$info->name}}</h4>

                         @if($info->test_result=="negative")
                         <div style="margin-top: 25px;background: green;" class="card text-white bg-green card-box">
                             <div class="card-header"><i class="icon-copy fa fa-check-circle" aria-hidden="true"></i> Negative</div>
                         </div>
                         @else
                         <div style="margin-top: 25px;background: rgb(208,2,2);" class="card text-white bg-green card-box">
                             <div class="card-header"><i class="fa fa-times-circle" aria-hidden="true"></i> Positive</div>
                         </div>
                         @endif
                         <p style="font-size: 19px;margin-top:25px"> We verify that <b>{{$info->name}}</b> has been tested for COVID-19 by the <b> VMR Diagnostic Laboratory </b> on <b>{{$info->date_collection}}</b> is marked as <b style=" text-transform: uppercase;"> {{$info->test_result}}</b><br><br>
                             Test was processed at <b> VMR Diagnostic Laboratory </b> </p>
                     </div>
                     @endforeach
                 </div>
             </div>
         </div>
     </div>
 </div>