@extends('layouts.master')
@section('content')


 <div class="col-md-12">
     <div class="card border border-primary">
        <h3 class="card-header">{{$car->marque}} </h3>
        <div class="card-img-top">
          <img src="{{$car->image}}" alt="" class="img-fluid rounded m-2">
        </div>
        <div class="card-body">
         <p class="d-flex flex-row justify-content-start">
               <span class="badge badge-danger mx-3 ">Type:     {{$car->type}}</span>
               <span class="badge badge-primary">prix journee:    {{$car->prixJ}} TTC </span>
               @if($car->dispo)
               <span class="badge badge-success mx-3">disponible</span>
                  @auth
                  <p>
                  <a href="#" class="btn btn-primary mx-3">reserver</a> 
                  </p>
                  @else
                  <p>
                  <a href="{{'users.login'}}" class="btn btn-primary mx-3 ">reserver  </a> 
                  </p>          
                  @endauth
               
               @else
               <span class="badge badge-warning mx-3">reserve</span>
               @endif
         </p>
        </div>
    </div>
          <hr>
          
       
 </div>  

@endsection