<?php
  use App\Http\Controllers\ProductController;
  if(Session::has('user')){
    $total_Item_In_Cart = ProductController::cartItem();
  }else{
    $total_Item_In_Cart=0;
  }
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/">Hamro Mobile</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="orderlist">My Order</a>
        </li>
        <li>
          <form action="search" class="form-inline my-2 my-lg-0">
            <input name="query" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
          <li><a href="cartlist"> cart ({{$total_Item_In_Cart}})</a></li>
          @if(Session::has('user'))  
            <li class="dropdown">
              <a href="#" class="dropdown" data-toggle="dropdown">{{Session::get('user')['name']}}<span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="logout">Logout</a></li>
              </ul>
            </li>
          @else
          <li><a href="/login">Login</a></li>
          <li><a href="/adduser">Register</a></li>
          @endif
      </ul>
    </div>
  </nav>