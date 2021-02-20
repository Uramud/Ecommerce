@extends('index')
{{-- including index page here --}}

@section("content")
    <div class="custom-product">
          <div class="trending-wrapper">
              <h3>Searching Products</h3>
                @foreach ($productData as $item)
                    <div class="search-item">
                        <a href="detail/{{$item['id']}}">
                            <img class="trending-image" src="{{$item['gallery']}}">
                            <div class="">
                                <h2>{{$item['name']}}</h2>
                                <h3>{{$item['description']}}</h3>
                            </div>
                        </a>
                    </div>
                @endforeach
          </div>
    </div>
@endsection