<!DOCTYPE html>
<html>
<head>
  @include('home.css')
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    @include('home.header')

    <h1 class="head_deg">Cart Products</h1>
    <div class="card-body table-responsive p-0">								
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>										
              <th>Product Title</th>
              <th>Price</th>
              <th>Delivary Status</th>
              <th>Image</th>
          </thead>
          <tbody>
            @foreach($order as $order)
            <tr>
                <td>{{$order->product->title}}</td>
                <td>{{$order->product->price}}</td>
                <td>
                    @if ($order->status == 'in progress')
                    <span style="color:red">{{$order->status}}</span>
                    @else
                    <span class="badge bg-success">{{$order->status}}</span>
                    @endif
                </td>
                <td>
                    <img width="50" src="products/{{$order->product->image}}" alt="">
                </td>
                
            </tr>
            @endforeach
          </tbody>
        </table>										
      </div>

   </div>
  @include('home.footer')


</body>

</html>