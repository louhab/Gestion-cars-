@if(Session::get('succses'))
<div class="alert alert-succses">
{{Session::get('success')}}

</div>
@endif
@if(Session::get('info'))
<div class="alert alert-info">
{{Session::get('info')}}

</div>
@endif
@if(Session::get('error'))
<div class="alert alert-danger">
{{Session::get('error')}}

</div>
@endif
@if($errors->count() > 0 )
    $foreach($errors->all() as $errors)
      <div class="alert alert-danger">
        {{$errors}}
     </div>
    $endforeach 
@endif