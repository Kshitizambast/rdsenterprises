@if($message = Session::get('success'))
   <div class="alert alert-success">
      <h5>{{$message}}</h5>
   </div>
@endif
@if($message = Session::get('danger'))
   <div class="alert alert-danger">
      <h5>{{$message}}</h5>
   </div>
@endif