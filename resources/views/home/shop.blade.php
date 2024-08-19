@include('home.css')
@include('home.header')

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Shop</h1>
					<ol class="breadcrumb">
						<li><a href="index.html">Home</a></li>
						<li class="active">shop</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="products section bg-gray">
	<div class="container">
		<div class="row">
      @foreach ($product as $products)
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="products/{{$products->image}}" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
                  <a href="{{url('product_details',$products->id)}}" data-toggle="modal"><i class="tf-ion-ios-search-strong"></i></a>
									{{-- <span data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span> --}}
                
								</li>
								<li>
									<a href="{{url('add_cart',$products->id)}}"><i class="tf-ion-android-cart"></i></a>
								</li>
							</ul>
            </div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">{{$products->title}}</a></h4>
						<p class="price">${{$products->price}}</p>
					</div>
				</div>
			</div>
      @endforeach

		</div>
	</div>
</section>

@include('home.footer')