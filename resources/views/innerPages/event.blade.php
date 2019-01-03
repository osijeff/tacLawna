@extends('layouts.navbar')
@section('content')

<h1>this is upcoming event page</h1>
  <div class="container">
        <h3 class="h3">News Slider Demo - 1 </h3>
        <div class="row">
            <div class="col-md-12">
                <div id="news-slider" class="owl-carousel">
                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#">
                                <img src="http://bestjquery.com/tutorial/news-slider/demo19/images/img-1.jpg" alt="">
                                <div class="post-date">
                                    <span class="date">10</span>
                                    <span class="month">jan</span>
                                </div>
                            </a>
                        </div>
                        <div class="post-review">
                            <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            <ul class="post-bar">
                                <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">5</a></li>
                            </ul>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni, nesciunt obcaecati possimus quasi quibusdam quos ratione sequi sit veritatis.</p>
                        </div>
                    </div>
     
                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#">
                                <img src="http://bestjquery.com/tutorial/news-slider/demo19/images/img-2.jpg" alt="">
                                <div class="post-date">
                                    <span class="date">13</span>
                                    <span class="month">jan</span>
                                </div>
                            </a>
                        </div>
                        <div class="post-review">
                            <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            <ul class="post-bar">
                                <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">7</a></li>
                            </ul>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni, nesciunt obcaecati possimus quasi quibusdam quos ratione sequi sit veritatis.</p>
                        </div>
                    </div>
                    <div class="post-slide">
                        <div class="post-img">
                            <a href="#">
                                <img src="http://bestjquery.com/tutorial/news-slider/demo19/images/img-3.jpg" alt="">
                                <div class="post-date">
                                    <span class="date">13</span>
                                    <span class="month">jan</span>
                                </div>
                            </a>
                        </div>
                        <div class="post-review">
                            <h3 class="post-title"><a href="#">Latest News Post</a></h3>
                            <ul class="post-bar">
                                <li><i class="fa fa-user"></i><a href="#">admin</a></li>
                                <li><i class="fa fa-comment"></i><a href="#">7</a></li>
                            </ul>
                            <p class="post-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad magni, nesciunt obcaecati possimus quasi quibusdam quos ratione sequi sit veritatis.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

