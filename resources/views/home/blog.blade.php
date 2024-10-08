@include('home.css')
@include('home.header')

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Blog</h1>
					<ol class="breadcrumb">
						<li><a href="{{ url('/') }}">Home</a></li>
						<li class="active">blog</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
        		<div class="post">
	                <div class="post-media post-thumb">
		                 <a href="">
			                   <img src="{{ asset('assets/images/blog/blog-post-1.jpg') }}" alt="">
		                </a>
	                </div>
	                <h2 class="post-title"><a href="blog-single.html">How To Wear Bright Shoes</a></h2>
	                <div class="post-meta">
		                <ul>
			                <li>
				                <i class="tf-ion-ios-calendar"></i> 20, MAR 2017
			                </li>
			                <li>
				                <i class="tf-ion-android-person"></i> POSTED BY ADMIN
			                </li>
			                <li>
				                <a href="#!"><i class="tf-ion-ios-pricetags"></i> LIFESTYLE</a>,<a href="#!"> TRAVEL</a>, <a href="#!">FASHION</a>
			                </li>
			                <li>
				                <a href="#!"><i class="tf-ion-chatbubbles"></i> 4 COMMENTS</a>
			                </li>
		                </ul>
	                </div>
	                <div class="post-content">
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere. </p>
		                    <a href="" class="btn btn-main">Continue Reading</a>
	                </div>

                </div>
<div class="post">
	<div class="post-media post-thumb">
		<a href="blog-single.html">
			<img src="{{ asset('assets/images/blog/blog-post-2.jpg') }}" alt="">
		</a>
	</div>
	<h2 class="post-title"><a href="blog-single.html">Two Ways To Wear Straight Shoes</a></h2>
	<div class="post-meta">
		<ul>
			<li>
				<i class="tf-ion-ios-calendar"></i> 20, MAR 2017
			</li>
			<li>
				<i class="tf-ion-android-person"></i> POSTED BY ADMIN
			</li>
			<li>
				<a href="#!"><i class="tf-ion-ios-pricetags"></i> LIFESTYLE</a>,<a href="#!"> TRAVEL</a>, <a href="#!">FASHION</a>
			</li>
			<li>
				<a href="#!"><i class="tf-ion-chatbubbles"></i> 4 COMMENTS</a>
			</li>
		</ul>
	</div>
	<div class="post-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
		<a href="blog-single.html" class="btn btn-main">Continue Reading</a>
	</div>
</div>
<div class="post">
	<div class="post-media post-thumb">
		<a href="blog-single.html">
			<img src="{{ asset('assets/images/blog/blog-post-3.jpg') }}" alt="">
		</a>
	</div>
	<h2 class="post-title"><a href="blog-single.html">Making A Denim Statement</a></h2>
	<div class="post-meta">
		<ul>
			<li>
				<i class="tf-ion-ios-calendar"></i> 20, MAR 2017
			</li>
			<li>
				<i class="tf-ion-android-person"></i> POSTED BY ADMIN
			</li>
			<li>
				<a href="#!"><i class="tf-ion-ios-pricetags"></i> LIFESTYLE</a>,<a href="#!"> TRAVEL</a>, <a href="#!">FASHION</a>
			</li>
			<li>
				<a href="#!"><i class="tf-ion-chatbubbles"></i> 4 COMMENTS</a>
			</li>
		</ul>
	</div>
	<div class="post-content">
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit vitae placeat ad architecto nostrum asperiores vel aperiam, veniam eum nulla. Maxime cum magnam, adipisci architecto quibusdam cumque veniam fugiat quae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Odio vitae ab doloremque accusamus sit, eos dolorum officiis a perspiciatis aliquid. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod, facere</p>
		<a href="blog-single.html" class="btn btn-main">Continue Reading</a>
	</div>
</div>

<div class="text-center">
	<ul class="pagination post-pagination">
		<li><a href="#!">Prev</a>
		</li>
		<li class="active"><a href="#!">1</a>
		</li>
		<li><a href="#!">2</a>
		</li>
		<li><a href="#!">3</a>
		</li>
		<li><a href="#!">4</a>
		</li>
		<li><a href="#!">5</a>
		</li>
		<li><a href="#!">Next</a>
		</li>
	</ul>
</div>
      		</div>
		</div>
	</div>
</div>

@include('home.footer')