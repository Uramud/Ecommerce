@extends('index')
{{-- including index page here --}}

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <img style="height:450px" src="{{$itemData['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
                <br>
                <a href="/login"><button class="btn btn-success">Go Back</button></a>
                <br><br>
                <h3>Details : {{$itemData['name']}}</h3>
                <p>About <br> 
                    Details : {{$itemData['category']}} <br>
                    Manufracture : {{$itemData['description']}} <br>
                    Price : {{$itemData['price']}} <br>
                   
                </p>
                <form action="/add_to_cart" method="POST"  >
                    @csrf
                    <input type="hidden" name="product_id" value="{{$itemData['id']}}">
                    <button type="submit" class="btn btn-primary">Add to Cart</button>
                </form>
                <br><br>
                <button class="btn btn-danger">Buy Now</button>
            </div>
        </div>
    </div>
@endsection