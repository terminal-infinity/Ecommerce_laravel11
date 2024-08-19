<section class="products section bg-gray">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2>Trendy Products</h2>
			</div>
		</div>
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

