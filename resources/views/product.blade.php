@extends('layout')
@section("content")
<div class="container custom-product">
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
     @foreach($product as $item)
    <div class="item {{$item['id']==1? 'active':''}}">
      <img src="{{$item['gallery']}}" alt="{{$item['gallery']}}">
      <div class="carousel-caption">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
 
    </div>

    @endforeach
    </div>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
@endsection
