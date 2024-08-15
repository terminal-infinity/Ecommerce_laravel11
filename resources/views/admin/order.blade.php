<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        table{
            border: 2px solid lightblue;
            text-align: center;
        }
        th{
            background-color: lightseagreen;
            color: white;
            font-size: 19px;
            font-weight: bold;
            padding: 15px;
        }
        td{
            border: 2px solid lightblue;
            text-align: center;
            color: white;
        }
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
    </style>
  </head>
  <body>
  @include('admin.header')
  @include('admin.sidebar')
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
          <h1 style="color: white;">Customer Orders</h1>
          <div class="div_deg">
          <table>
            <tr>
                <th>Customer Name</th>
                <th>Address</th>
                <th>Phone</th>
                <th>Product Title</th>
                <th>Price</th>
                <th>Image</th>
                <th>Status</th>
                <th>Change Status</th>
            </tr>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->rec_address}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->product->title}}</td>
                <td>{{$data->product->price}}</td>
                <td>
                    <img width="100" src="products/{{$data->product->image}}" alt="">
                </td>
                <td>
                    @if ($data->status == 'in progress')
                    <span style="color:red">{{$data->status}}</span>

                    @else
                    <span>{{$data->status}}</span>
                    
                    @endif
                </td>
                <td>
                <a class="btn btn-primary" href="{{url('on_the_way',$data->id)}}">On The Way</a>
                <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>
                </td>
            </tr>
            @endforeach
            
          </table>
          </div>
          

          </div> 
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html>