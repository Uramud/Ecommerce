@extends('index')
{{-- including index page here --}}

{{-- here fetching data after using joins ie between 2 or more classes eg is {{$item->id}} --}}
@section("content")
    <div class="col-sm-10">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">Amount</th>
                <th scope="col">$ {{$total_cost}}</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">Tax</th>
                <td>$ 0</td>
              </tr>
              <tr>
                <th scope="row">Delivery Charges</th>
                <td>$ 10</td>
              </tr>
              <tr>
                <th scope="row">Total Amount</th>
                <td>{{$total_cost+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
              <form action="orderplace" method="POST">
                  @csrf
                  <div class="form-group">
                    <textarea name="address" placeholder="Enter address Detail" class="form-control" cols="30" rows="5" required></textarea>
                  </div>
                  <div class="form-group">
                      <label for="pwd">Payment Method</label>  <br><br>
                      <input type="radio" name="payment" value="cash"><span>Online Payment</span>  <br><br> 
                      <input type="radio" name="payment" value="cash"><span>Esewa Payment</span>  <br><br>
                      <input type="radio" name="payment" value="cash"><span>Payment on Delivery</span>  <br>
                  </div>
                  <button class="btn btn-success">order Now</button> <br><br>
              </form>
          </div>
    </div>
@endsection