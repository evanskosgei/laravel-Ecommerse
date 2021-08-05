<DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    </head>
<body>
<section>
<div class="container">
<div class="row">
<div class="col-md-8">
    <img src="{{asset('image')}}/{{$product->itemImage}}" style="max-height:60%; width:40%;border:1px light-grey">
    <p style="color:black"><i>Country:</i> <b>{{$product->country}}</b></p>
    <p style="color:black"><i>Category:</i><b>{{$product->category}}</b></p>
    <p style="color:black"><i>Item Balance:</i><b>{{$product->balance}}</b></p>
    <p style="color:black"><i>sell price:</i><b>{{$product->sellPrice}}</b></p>
<form action="/add_to_cart" method="POST">
    @csrf
	<input type="hidden" name="product_id" value="  $cart->id">
	<button style="background-color:orange;"><i class="fa fa-shopping-cart"></i>Add to cart</button>
</form>
</div>
</div>
</div>
<section>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
<html>
