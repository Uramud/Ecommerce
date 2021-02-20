<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ecommerce Project</title>

    {{-- Bootstrap Css --}}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">    
    {{-- Bootstrap js --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    {{-- while View V must be capital --}}
    {{View::make('header')}}
    @yield("content")
    {{View::make('footer')}}
</body>
<style>
    .custom-login{
        height:450px;
        padding-top:100px;
    }
    .d-block{
        height: 500px;
        width: 200px;
    }
    .carousel-caption{
        background-color: #35443585 !important;
    }
    .custom-product{
        height: 600px;
    }
    .trending-image{
        height: 100px;
    }
    .trending-item{
        float:left;
        width: 33%;
    }
    .trending-wrapper{
        margin:2%;
        padding: 0% 0% 0% 2%;
    }
    .cart-list-divider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding: 2%;
    }
    .cart-detail-image,.cart-detail-first,.cart-detail-second{
        align-self: center;
    }
    a{
        text-decoration: none;
    }
</style>
{{-- <script>
    $(document).ready(function(){
        $("button").click(function(){
            alert("all set")
        })
    })
</script> --}}
</html>