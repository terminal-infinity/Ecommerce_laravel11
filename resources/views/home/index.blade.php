<!DOCTYPE html>
<html lang="en">
  <head>
    @include('home.css')
  </head>

<body id="body">
    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->
    <!-- slider section -->

    @include('home.slider')

  <!-- end hero area -->

  <!-- shop section -->
  @include('home.product')
  
  <!-- end shop section -->

  <!-- contact section -->
  <section class="call-to-action bg-gray section">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="title">
            <h2>SUBSCRIBE TO NEWSLETTER</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, <br> facilis numquam impedit ut sequi. Minus facilis vitae excepturi sit laboriosam.</p>
          </div>
          <div class="col-lg-6 col-md-offset-3">
              <div class="input-group subscription-form">
                <input type="text" class="form-control" placeholder="Enter Your Email Address">
                <span class="input-group-btn">
                  <button class="btn btn-main" type="button">Subscribe Now!</button>
                </span>
              </div><!-- /input-group -->
          </div><!-- /.col-lg-6 -->
  
        </div>
      </div> 		<!-- End row -->
    </div>   	<!-- End container -->
  </section>   <!-- End section -->
  
  <section class="section instagram-feed">
    <div class="container">
      <div class="row">
        <div class="title">
          <h2>View us on instagram</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="instagram-slider" id="instafeed" data-accessToken="IGQVJYeUk4YWNIY1h4OWZANeS1wRHZARdjJ5QmdueXN2RFR6NF9iYUtfcGp1NmpxZA3RTbnU1MXpDNVBHTzZAMOFlxcGlkVHBKdjhqSnUybERhNWdQSE5hVmtXT013MEhOQVJJRGJBRURn"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->

  <!-- info section -->

  @include('home.footer')

</body>

</html>