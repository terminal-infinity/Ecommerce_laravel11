@include('home.css')
@include('home.header')

</section>
<section class="user-dashboard page-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="dashboard-wrapper user-dashboard">
					<div class="table-responsive">
						<table class="table">
							<thead>
								<tr>
									<th>Product Title</th>
                  <th>Price</th>
                  <th>Delivary Status</th>
                  <th>Image</th>
								</tr>
							</thead>
							<tbody>
                @foreach($order as $order)
                <tr>
                    <td>{{$order->product->title}}</td>
                    <td>
                      <img width="50" src="products/{{$order->product->image}}" alt="">
                    </td>
                    <td>{{$order->product->price}}</td>
                    <td>
                        @if ($order->status == 'in progress')
                        <span style="color:red">{{$order->status}}</span>
                        @else
                        <span class="label label-primary">{{$order->status}}</span>
                        @endif
                    </td>
                    
                </tr>
            @endforeach
								
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@include('home.footer')

