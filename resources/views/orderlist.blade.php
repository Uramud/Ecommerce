@extends('index')
{{-- including index page here --}}

{{-- here fetching data after using joins ie between 2 or more classes eg is {{$item->id}} --}}
@section("content")
    <div class="col-sm-4">
        <a href="#">Filter</a>
    </div>
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4>{{Session::get('user')['name']}} Order List</h4>
            @foreach ($orderItem as $item)
                <div class="row searched-item cart-list-divider">
                    <div class="col-sm-3 cart-detail-image">
                        <a href="detail/{{$item->id}}">
                            <img src="{{$item->gallery}}" class="trending-image">
                        </a>
                    </div>
                    <div class="col-sm-8 cart-detail-first">
                        <div class="">
                            <h2>Name : {{$item->name}}</h2>
                            <h4>Delivery Stauts : {{$item->status}}</h4>
                            <h4>Address : {{$item->address}}</h4>
                            <h4>Payment Status : {{$item->payment_status}}</h4>
                            <h4>payment Method : {{$item->payment_method}}</h4>
                        </div>
                    </div>
                    {{-- <div class="col-sm-3 cart-detail-second">
                        <a href="/delete_cart_item/{{$item->cart_id}}"><button class="btn btn-danger">Remove from Cart</button></a>
                    </div> --}}
                </div>
            @endforeach
        </div>
    </div>
@endsection