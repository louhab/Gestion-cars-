@extends('layouts.master')
@section('content')

<div class="row my-4">
    <div class="col-md-8 mx-auto ">
      <div class="card border border-primary shadow-sm"> 
         <h3 class="card-header">Connexion </h3>
         <div class="card-body">
        
            <form action="{{'users.auth'}}" method="POST">
            @csrf
              <div class="form-group">
                <label>email</label>
                <input type="email" name="email" id="" class="form-control" placeholder="email">
                <label >email</label>
                <input type="password" name="password" id="" class="form-control" placeholder="password">
              </div>
              <div class="form-group">
              <button type="submit" class="btn btn-primary">valider</button>
              </div>
            </form>
         </div> 
      </div>
     
    </div>
</div>   

@endsection