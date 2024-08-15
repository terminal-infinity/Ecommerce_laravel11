@extends('admin.index')

@section('main')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Products</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{url('add_product')}}" class="btn btn-primary">New Product</a>
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
                    <form action="{{url('product_search')}}" method="get">
                        @csrf
                    <div class="input-group input-group" style="width: 250px;">
                        
                            {{-- <input type="search" name="search">
                            <input type="submit" class="btn btn-success" value="Search"> --}}
                          
                        <input type="search" name="search" class="form-control float-right" placeholder="Search">
    
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                   
                      </div>
                    </form>
                </div>
            </div>
            <div class="card-body table-responsive p-0">								
                <table class="table table-hover text-nowrap">
                    <thead>
                        <tr>
                            <th width="100">Title</th>
                            <th width="100">Description</th>
                            <th>Category</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th width="10">Edit</th>
                            <th width="10">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($product as $products)
                        <tr>
                            <td>{{$products->title}}</td>
                            <td>{!!Str::limit($products->description,30)!!}</td>
                            <td>{{$products->category}}</td>
                            <td>{{$products->price}}</td>
                            <td>{{$products->quantity}}</td>
                            <td><img src="products/{{$products->image}}" class="img-thumbnail" width="50" ></td>
                            <td>
                                <a href="#">
                                    <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                                    </svg>
                                </a>
                            </td>
                            <td>
                                <a href="#" class="text-danger w-4 h-4 mr-1">
                                    <svg wire:loading.remove.delay="" wire:target="" class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path	ath fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd"></path>
                                      </svg>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>										
            </div>
            
        </div>
    </div>
    <!-- /.card -->
</section>
@endsection

{{-- <!DOCTYPE html>
<html>
    
  <head> 
    @include('admin.css')
    <style>
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        .table_deg{
            border: 2px solid lightblue;
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
        input[type='search']{
            width: 500px;
            height: 50px;
            margin-left: 50px;
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

          <h1 style="color: white;">Product List</h1>

          <form action="{{url('product_search')}}" method="get">
            @csrf
            <input type="search" name="search">
            <input type="submit" class="btn btn-success" value="Search">
          </form>

          <div>
          <div class="div_deg">
            <table class="table_deg">
                <tr>
                    <th>Product Title</th>
                    <th>Description</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                @foreach ($product as $products)
                <tr>
                    <td>{{$products->title}}</td>
                    <td>{!!Str::limit($products->description,30)!!}</td>
                    <td>{{$products->category}}</td>
                    <td>{{$products->price}}</td>
                    <td>{{$products->quantity}}</td>
                    <td>
                        <img height="120" width="120" src="products/{{$products->image}}">
                    </td>
                    <td>
                        <a class="btn btn-success" href="{{url('update_product',$products->id)}}">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-danger" onclick="confirmation(event)" href="{{url('delete_product',$products->id)}}">Delete</a>
                    </td>
                    
                </tr>
                @endforeach
                
            </table>
            
          </div>
          </div>

          <div class="div_deg">
          {{$product->links()}}
          </div>
          
          </div> 
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html> --}}