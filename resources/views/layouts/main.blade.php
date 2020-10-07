<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/font.css')}}">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
</head>
<body>

<!-- HEADER --->
     @section('header')
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-default">
        <a class="navbar-brand" href="{{route('home')}}">Fns</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
              
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">
                      <li class="nav-item active">
                      <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                      <a class="nav-link" href="{{route('about')}}">About</a>
                      </li>
                      <!--
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="#">Action</a>
                          <a class="dropdown-item" href="#">Another action</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                        </li>
                      -->
                    </ul>
                <!---Auth--->
                @auth
                    <div class="search">
                        <form class="form-inline my-2 my-lg-0">
                          @csrf
                          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>
                    </div>
                    <div class="logout">
                        
                        <!---LOG OUT--->
    
                        <span onclick="return confirm('Log Out?');">
                            <a class=" btn btn-danger p-2 m-2" href="{{ route('logout') }}"
                            onclick=" event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            </a>
                        </span>
    
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>

                  @endauth

                <!---Guest--->    
                    @guest
                        
                      <a href="{{route('login')}}" class="btn btn-primary mr-2">{{__('Login')}}</a>
                      <a href="{{route('register')}}" class="btn btn-white" style="color:#fff;">{{__('Sign Up')}}</a>
                    @endguest
                </div>
         </nav>            

         <!--
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Library</li>
            </ol>
          </nav>
        -->

     @show 
         
<!-- SLIDE --->
    @section('slide1')
        <h2 class="hd-text" >WEL<span class="span-text"  style="color:orange;"n>V</span>OME</h2>
        <div class="bck-slide1">
                                    
          </div>  

        <div class="container_fluid slides">
          <div id="carouselExampleControls" class="carousel slide slide1" data-ride="carousel" data-interval="2000">
            <div class="carousel-inner">
              <div class="carousel-item active">
                        <img class="d-block w-100" src="{{asset('img/p4.jpg')}}" alt="First slide" width="100%" height="100%">
                     
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/p2.jpg')}}" alt="First slide" width="100%" height="100%">>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/p3.jpg')}}" alt="First slide" width="100%" height="100%">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>    
    @show      

    @section('slide2')
    <div class="hd-slide2">
        <p><b>New Products</b> </p>
    </div> 

    <div class="container_fluid slide2">
      <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
                <div class="col"><img src="{{asset('img/p1.jpg')}}" alt="1 slide" class="w-100"></div>
                <div class="col"><img src="{{asset('img/p2.jpg')}}" alt="2 slide" class="w-100"></div>
                <div class="col"><img src="{{asset('img/p3.jpg')}}" alt="3 slide" class="w-100"></div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
                <div class="col"><img src="{{asset('img/p4.jpg')}}" alt="1 slide" class="w-100"></div>
                <div class="col"><img src="{{asset('img/p3.jpg')}}" alt="2 slide" class="w-100"></div>
                <div class="col"><img src="{{asset('img/p2.jpg')}}" alt="3 slide" class="w-100"></div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>


     
     @show

<!-- CONTENT --->
     @section('content')
          <div class="content">
                <div class="main">
                    Main
                </div>
                <div class="main">
                    Main                        
                </div>  
            
          </div>          
     @show

<!-- FOOTER --->
    @section('footer')
        <div class="footer">
            FOOTER
        </div>
    @show



    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>