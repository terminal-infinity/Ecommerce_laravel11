@extends('admin.index')

@section('main')
<section class="content-header">					
  <div class="container-fluid my-2">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Orders</h1>
      </div>
      <div class="col-sm-6 text-right">
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
  <!-- Default box -->
  <div class="container-fluid">
    <div class="card">
      <div class="card-header">
        <div class="card-tools">
          <div class="input-group input-group" style="width: 250px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
  
            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
              <i class="fas fa-search"></i>
              </button>
            </div>
            </div>
        </div>
      </div>
      <div class="card-body table-responsive p-0">								
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>										
              <th>Customer Name</th>
              <th>Address</th>
              <th>Phone</th>
              <th>Product Title</th>
              <th>Price</th>
              <th>Image</th>
              <th>Payment</th>
              <th>Status</th>
              <th>Change Status</th>
              <th>Print PDF</th>
          </thead>
          <tbody>
            @foreach ($data as $data)
            <tr>
                <td>{{$data->name}}</td>
                <td>{{$data->rec_address}}</td>
                <td>{{$data->phone}}</td>
                <td>{{$data->product->title}}</td>
                <td>{{$data->product->price}}</td>
                <td>
                    <img width="50" src="products/{{$data->product->image}}" alt="">
                </td>
                <td>{{$data->payment_status}}</td>
                <td>
                    @if ($data->status == 'in progress')
                    <span style="color:red">{{$data->status}}</span>
                    @else
                    <span class="badge bg-success">{{$data->status}}</span>
                    @endif
                </td>
                <td>
                <a class="btn btn-primary mb-2" href="{{url('on_the_way',$data->id)}}">On The Way</a> <br>
                <a class="btn btn-success" href="{{url('delivered',$data->id)}}">Delivered</a>
                </td>
                <td>
                  <a class="btn btn-primary" href="{{url('print_pdf',$data->id)}}">PDF</a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>										
      </div>
      {{-- <div class="card-footer clearfix">
        <ul class="pagination pagination m-0 float-right">
          <li class="page-item"><a class="page-link" href="#">«</a></li>
          <li class="page-item"><a class="page-link" href="#">1</a></li>
          <li class="page-item"><a class="page-link" href="#">2</a></li>
          <li class="page-item"><a class="page-link" href="#">3</a></li>
          <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
      </div> --}}
    </div>
  </div>
  <!-- /.card -->
</section>
@endsection

