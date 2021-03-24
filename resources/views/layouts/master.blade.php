<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
     @yield('styles')
    <title>laravel rent CAR </title>
  </head>
  <body>
    <div class="container border border-primary my-3">
    <div class="header h-50 bg-primary rounded shadow-sm">
        <ul class="nav">
          <li class="nav-item"><a class="nav-link text-white" href="#">Acceuil</a> </li>
           @auth
           <li class="nav-item"><a class="nav-link text-white" href="#">{{auth()->user->name}}</a></li>
           <li class="nav-item">
           <form action="{{route('users.logout')}}" method="POST" ></form>
           <button type="submit" class="nav-link test-wite">deconnexion</button>
           </li>
           @else
          <li class="nav-item"><a class="nav-link text-white" href="{{route('users.register')}}">inscription</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{route('users.login')}}">connexion</a></li>
           @endauth
          
        </ul>
      </div>
         <div class="row">
           <div class="col-md-6 mx auto my-4">
           @include('includes.message')
           </div>
         </div>   
    @yield('content')
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>