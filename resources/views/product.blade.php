@extends('index')
{{-- including index page here --}}

@section("content")
    <div class="custom-product">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
              <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
            {{-- the product data is from controller called Product Controller --}}
              @foreach ($productData as $item)
              <div class="carousel-item {{$item['id']==1?'active':''}}">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['gallery']}}" class="d-block w-100" >
                    <div class="carousel-caption d-none d-md-block">
                        <h5>{{$item['name']}}</h5>
                        <p>Cost : {{$item['price']}}, Manufacture : {{$item['description']}}</p>
                    </div>
                </a>
              </div>
              @endforeach
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="trending-wrapper">
              <h3>Trending Products</h3>
                @foreach ($productData as $item)
                <a href="detail/{{$item['id']}}">
                    <div class="trending-item">
                        <img class="trending-image" src="{{$item['gallery']}}">
                        <div class="">
                            <h3>{{$item['name']}}</h3>
                        </div>
                    </div>
                </a>
                @endforeach
          </div>
    </div>
@endsection