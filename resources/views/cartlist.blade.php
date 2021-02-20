@extends('index')
{{-- including index page here --}}

{{-- here fetching data after using joins ie between 2 or more classes eg is {{$item->id}} --}}
@section("content")
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>Result for Product <span style="padding-left: 10%"></span> <a class="btn btn-success" href="orderNow">Order Now</a></h4>
            @foreach ($products_item as $item)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3">
                        <a href="detail/{{$item->id}}">
                            <img src="{{$item->gallery}}" class="trending-image">
                        </a>
                    </div>
                    <div class="col-sm-4 cart-detail-first">
                        <div class="">
                            <h2>{{$item->name}}</h2>
                            <h4>{{$item->description}}</h4>
                        </div>
                    </div>
                    <div class="col-sm-3 cart-detail-second">
                        <a href="/delete_cart_item/{{$item->cart_id}}"><button class="btn btn-danger">Remove from Cart</button></a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection