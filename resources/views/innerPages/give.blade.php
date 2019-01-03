

@extends('layouts.navbar')
@section('content')

<div class="jumbotron jumbotron-fluid text-left give " id="giving" style="height:60vh" >
 <div class="container">
  <h1>GIVE ONLINE</h1>
    <p>As you give the good Lord will greatly reward</p>
</div>
</div> 
<!-- // end of jobotron -->
<div class="container-fluid text-center">
    <h2>GIVING</h2>
    <div class="container">
     <p>Here at Hope we give because God first gave to us. It’s not out of duty, obligation or guilt. Our gracious    God actually rejects those motives. It’s not because we have to, it’s because we get to. And in giving out     of a heart of gratitude we are able, in yet one more tangible way, to be part of a mission bigger than        ourselves – sharing the Hope of Jesus with a world in need of Hope.
     </p> 
    </div>
</div>
<!-- // Vimeo Player API -->
<div class="container-fluid text-center">
    <iframe src="https://player.vimeo.com/video/76979871" id="vimeo" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay; encrypted-media">
    </iframe>
    <div id="made-in-ny"></div>
</div>
<div class="container-fluid  give-now text-center">
    <h1 class="actionBtn-con">
        <button type="button" class="btn btn-primary" >
            <a href="http://">
              GIVE NOW
            </a>
    </button>
</div>
<div class="container">
    <h2 class="more-recource" >more resources on giving</h2>
    <div class="row">
        <div class="col-md-4 hvr-grow">
            <div class="card card-body">
                <h4 class="card-title">Tithe</h4>
                <hr>
                <p class="card-text">Boot polish is a waxy paste, cream, or liquid used to polish, shine, and           waterproof leather
                    shoes or boots to extend the footwear's life, and restore, maintain and improve their appearance.</p>
                     <a href="{{ route('books')}}" class="btn btn-primary">More</a>
            </div>
        </div>
        <div class="col-md-4 hvr-grow">
            <div class="card card-body">
                <h4 class="card-title">material Donation</h4>
                <hr>
                <p class="card-text">Boot polish is a waxy paste, cream, or liquid used to polish, shine, and waterproof leather
                    shoes or boots to extend the footwear's life, and restore, maintain and improve their appearance.</p>
                <a href="{{ route('tithe')}" class="btn btn-primary">More</a>
           </div>
        </div>
        <div class="col-md-4 hvr-grow">
           <div class="card card-body">
                <h4 class="card-title">recommended reading</h4>
                <hr>
                <p class="card-text">Boot polish is a waxy paste, cream, or liquid used to polish, shine, and waterproof leather
                    shoes or boots to extend the footwear's life, and restore, maintain and improve their appearance.</p>
                <a href="{{ route('materialDonate')}" class="btn btn-primary">More</a>
           </div> 
        </div>
    </div>
</div>
<!-- end of more resource on gibing -->
<div class="container">
    FREQUENTELY ASKED QUESTIONS ON GIVING
</div>
<frequently-component></frequently-component>

<!-- // frquently asked question on give -->
<div class="container">
<div class="accordion" id="accordionExample">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Should we tithe the "Gross or the Net"?
    
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Why tithe if my income is so small?
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        What if we can't afford to tithe?
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
      </div>t
    </div>
  </div>
</div>
</div>
<!-- end of frequently asked questions -->
 @include('partials.foot')
<!-- // Vimeo Player API -->
<script src="https://player.vimeo.com/api/player.js"></script>
<script>
    var options = {
        id: 59777392,
        width: 640,
        loop: true
    };

   
</script>







@endsection
</div>