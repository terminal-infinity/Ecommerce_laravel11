@include('home.css')
@include('home.header')
<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Cart</h1>
					<ol class="breadcrumb">
						<li><a href="{{url('/')}}">Home</a></li>
						<li class="active">cart</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="page-wrapper">
  <div class="cart shopping">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="block">
            <div class="product-list">
              <form action="{{url('comfirm_order')}}" method="Post">
                @csrf
                <table class="table">
                  <thead>
                    <tr>
                      <th class="">Item Name</th>
                      <th class="">Item Price</th>
                      <th class="">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
              
                    $value=0;
              
                    ?>
                    @foreach ($cart as $cart)
                    <tr class="">
                      <td class="">
                        <div class="product-info">
                          <img width="80" src="/products/{{$cart->product->image}}" alt="" />
                          <a href="{{url('mycart')}}">{{$cart->product->title}}</a>
                        </div>
                      </td>
                      <td class="">${{$cart->product->price}}</td>
                      <td class="">
                        <a class="product-remove" href="{{url('remove_cart',$cart->id)}}">Remove</a>
                      </td>
                    </tr>

                    <?php
              
                    $value=$value + $cart->product->price;
              
                    ?>
                    @endforeach
                  </tbody>
                </table>
                <br>
                <div class="m-4 p-2">
                  <h3>Total Value of Cart is: ${{$value}}</h3>
                </div>
                <br>
                <div class="m-4">
                  <input class="btn btn-main" type="submit" value="Place Order">
                  {{-- <a href="{{url('comfirm_order')}}" class="btn btn-main" >Cash On Delivary</a> --}}
                  <a href="{{ url('/stripe',$value) }}" class="btn btn-main pull-right">Pay On Card</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('home.footer')
