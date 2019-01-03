<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    .


    <link rel="stylesheet" href="css/owl.css">
    <link rel="stylesheet" href="css/theme.css">
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/background.css') }}" rel="stylesheet">
</head>
<body>
  
<div>
<nav class="navbar navbar-expand-lg navbar-light clientnav">
  <a class="navbar-brand" href="#">THE APOSTOLIC CHURCH LAWNA <br>SOUTH AFRICA</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('history')}}">	History</a>
          <a class="dropdown-item" href="{{route('believes')}}">Our believes</a>
          <a class="dropdown-item" href ="{{route('leadership')}}">Leadership</a>
          <a class="dropdown-item" href="{{route('nationalExco')}}">National excutives</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Ministries
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{ route('men')}}">Men's movement</a>
          <a class="dropdown-item" href="{{ route('women')}}">women's movement</a>
          <a class="dropdown-item" href="{{ route('youth')}}">youth's movement</a>
          <a class="dropdown-item" href="{{ route('children')}}">chlidren's movement</a>
        </div>
      </li>
       <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         Resources
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('nationalSubscription')}}">National Subscription</a>
          <a class="dropdown-item" href="{{route('gallery')}}">gallery</a>
          <a class="dropdown-item" href="{{route('event')}}">Events</a>
          <a class="dropdown-item" href="{{route('podcast')}}">Audio Podcast</a>
          <a class="dropdown-item" href="{{route('announcement')}}">Announcement</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('news')}}">News</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="{{route('blog')}}">Blog</a>
      </li> 
       <li class="nav-item">
        <a class="nav-link" href="{{route('contact')}}">Contact Us</a>
      </li> 
    </ul>
     <ul class="navbar-nav ml-auto">
       <li class="nav-item">
          <button class=" btn btn-primary my-2 my-sm-0">
        <a class="nav-link" href="{{route('give')}}">
           Online Giving
        </a>
        </button>
      </li>
    </ul>
  </div>
 </nav>
</div>
<div class="app">
            @yield('content')
        
    </div>
 </body>

</html>





