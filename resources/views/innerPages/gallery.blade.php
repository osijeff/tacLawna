 @extends('layouts.navbar')
 @section('content')
 <!-- AUTO-FIT AND MINMAX -->
        
        <div class="jumbotron">
            <h1 class="display-4 text-center">LET CREATE AN IMAGE GALLERY</h1>
            <hr class="my-4">
            <p class="lead text-center">This is our image gallery.</p>
         
            
        </div>
        
    <div class="container border shadow p-3 mb-5 bg-white rounded" >
        <div class="img-grid ">
            <div class="1 hvr-grow " style="background-color:red">1</div>
            <div class="big hvr-grow " style="background-color:rgb(146, 139, 139)">2</div>
            <div class="3 hvr-grow " style="background-color:blue">3</div>
            <div class="horizontal hvr-grow " style="background-color:rgb(19, 4, 4)">4</div>
            <div class="vertical hvr-grow " style="background-color:rgb(30, 187, 38)">5</div>
            <div class="6 hvr-grow " style="background-color:rgb(18, 9, 68)">6</div>
            <div class="horizontal hvr-grow " style="background-color:rgb(199, 24, 132)">7</div>
            <div class=" hvr-grow 8" style="background-color:green">8</div>
            <div class="horizontal hvr-grow " style="background-color:gold">9</div>
            <div class="10 hvr-grow " style=" background-color:violet">10</div>
            <div class="big hvr-grow " style=" background-color:rgb(133, 70, 70)">11</div>
            <div class="vertical hvr-grow " style=" background-color:darkcyan">12</div>
        </div>
    </div>
        @include('partials.foot')
        @endsection