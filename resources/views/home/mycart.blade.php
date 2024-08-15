<!DOCTYPE html>
<html>

<head>
  @include('home.css')

  <style>
    .div_deg{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 60px;
    }
    table{
        border: 2px solid black;
        text-align: center;
        width: 800px;
    }
    th{
        border: 2px solid black;
        text-align: center;
        color: white;
        font: 20px;
        font-weight: bold;
        background-color: gray;
    }
    td{
        border: 1.5px solid black;
        text-align: center;
        color: black;
    }
    .cart_value{
        text-align: center;
        margin-bottom: 70px;
        padding: 18px;
    }
    .order_deg{
      padding-right: 100px;
      margin-top: -50px;
    }
    label{
      display: inline-block;
      width: 150px;
      font-weight: 600 ;
    }
    .div_gap{
      padding: 20px;
    }
    .input_deg{
      width: 300px;
      height: 50px;
    }
    .head_deg{
      text-align: center;
      padding: 30px;
      font-size: 60px;
    }
  </style>
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')

    <h1 class="head_deg">Cart Products</h1>

    <div class="div_deg">

    <div class="order_deg">
      <form action="{{url('comfirm_order')}}" method="Post">
        @csrf

        <div class="div_gap">
          <label>Receiver Name</label>
          
          <input class="input_deg" type="text" name="name" value="{{Auth::user()->name}}">
        </div>
        <div class="div_gap">
          <label>Receiver Address</label>
          
          <textarea class="input_deg" name="address">{{Auth::user()->address}}</textarea>
        </div>
        <div class="div_gap">
          <label>Receiver Phone</label>
          
          <input class="input_deg" type="text" name="phone" value="{{Auth::user()->phone}}">
        </div>
        <div class="div_gap">
          <input class="btn btn-primary" type="submit" value="Place Order">
        </div>
      </form>
    </div>

        <table>
            <tr>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Remove</th>
            </tr>

            <?php
              
              $value=0;
              
            ?>

            @foreach ($cart as $cart)
            <tr>
                <td>{{$cart->product->title}}</td>
                <td>{{$cart->product->price}}</td>
                <td>
                    <img width="100" src="/products/{{$cart->product->image}}" alt="">
                </td>
                <td>
                <a class="btn btn-danger" href="{{url('remove_cart',$cart->id)}}">Remove</a>
                </td>
            </tr>

            <?php
              
              $value=$value + $cart->product->price;
              
            ?>

            @endforeach
            
        </table>
    </div>

    <div class="cart_value">
        <h3>Total Value of Cart is: ${{$value}}</h3>
    </div>

  </div>
  
 

  @include('home.footer')


</body>

</html>