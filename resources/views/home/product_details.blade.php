@include('home.css')
@include('home.header')

<section class="single-product">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<ol class="breadcrumb">
					<li><a href="{{url('/')}}">Home</a></li>
					<li><a href="shop.html">Shop</a></li>
					<li class="active">Product Details</li>
				</ol>
			</div>
		</div>
		<div class="row mt-20">
			<div class="col-md-5">
				<div class="single-product-slider">
					<div id='carousel-custom' class='carousel slide' data-ride='carousel'>
						<div class='carousel-outer'>
							<!-- me art lab slider -->
							<div class='carousel-inner '>
								<div class='item active'>
									<img src='/products/{{$data->image}}' alt='' data-zoom-image="/products/{{$data->image}}" />
								</div>
							</div>

						</div>
						
					</div>
				</div>
			</div>
			<div class="col-md-7">
				<div class="single-product-details">
					<h2>{{$data->title}}</h2>
					<p class="product-price">${{$data->price}}</p>
					
					<p class="product-description mt-20">{!! $data->description !!}</p>
					<div class="product-size">
						<span>Size:</span>
						<select class="form-control">
							<option>S</option>
							<option>M</option>
							<option>L</option>
							<option>XL</option>
						</select>
					</div>
					<div class="product-quantity">
						<span>Quantity:</span>
						<h6>{{$data->quantity}}</h6>
					</div>
          <div class="product-quantity">
						<span>Categories:</span>
						<h6>{{$data->category}}</h6>
					</div>
					{{-- <div class="product-category"> 
						<span>Categories: {{$data->category}}</span>
					</div> --}}
					<a href="{{url('add_cart',$data->id)}}" class="btn btn-main mt-20">Add To Cart</a>
				</div>
			</div>
		</div>
	</div>
</section>
@include('home.footer')

