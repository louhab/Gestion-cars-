@extends('layouts.master')
@section('content')
<div class="row my-4">
   <div class="col-md-3">
      <div class="card bg-light border border-primary">
         <h3 class="card-header">
         Recherch
         </h3>
         <div class="card-body">
            <form action="#" method="POST">
              <div class="form-group">
                <label for="search">recherch</label>
                <input type="text" name="search" id="" class="form-control" placeholder="Recherche....">
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">valider</button>
              </div>
            </form>
         </div>
      </div>
   </div>

 <div class="col-md-9">
     <div class="card border border-primary">
        <h3 class="card-header">toutes les voitures </h3>
        <div class="card-body">
          @foreach($cars as $car)
          <div class="media mb-2">
             <div class="media-left">
               <img src="{{$car->image}}" width="100" height="100" alt="" class="img-fluid rounded-circle">
             </div>
          
              <div class="media-body">
               <h3 class="text-imfo">
                <a href="{{route('cars.show', $car->id)}}" class="btn btn-link">
                {{$car->marque}}
                </a>
               </h3>
               <p class="d-flex flex-row justify-content-start">
               <span class="badge badge-danger mx-3 ">Type:     {{$car->type}}</span>
               <span class="badge badge-primary">prix journee:    {{$car->prixJ}} TTC </span>
               @if($car->dispo)
               <span class="badge badge-success mx-3">disponible</span>
               @else
               <span class="badge badge-warning mx-3">reserve</span>
               @endif
               </p>
              </div>
          </div>
          <hr>
          @endforeach
        </div>
     </div>
 </div>  
 
</div>
@endsection