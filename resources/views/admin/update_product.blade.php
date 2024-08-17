@extends('admin.index')

@section('main')
<section class="content-header">					
    <div class="container-fluid my-2">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create Product</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a href="{{url('view_product')}}" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
</section>
<!-- Main content -->
<section class="content">
    <form action="{{url('edit_product',$data->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
    <!-- Default box -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-3">
                    <div class="card-body">								
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="title">Title</label>
                                    <input type="text" name="title" id="title" class="form-control" value="{{$data->title}}">	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote" placeholder="Description" required>{{$data->description}}</textarea>
                                </div>
                            </div>                                            
                        </div>
                    </div>	                                                                      
                </div>
                
                <div class="card">
                    <div class="card-body">	
                        <h2 class="h4  mb-3">Product category</h2>
                        <div class="mb-3 col-md-6">
                            <label for="category">Category</label>
                            
                            <select name="category" id="category" class="form-control" >
                                <option value="{{$data->category}}">{{$data->category}}</option>
                                @foreach ($category as $category)
                                <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div> 
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Pricing</h2>								
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 col-md-6">
                                    <label for="price">Price</label>
                                    <input type="text" name="price" id="price" class="form-control" value="{{$data->price}}">	
                                </div>
                            </div>                                           
                        </div>
                    </div>	                                                          
                </div>
                <div class="card mb-3 ">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Quantity</h2>								
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3 col-md-6">
                                    <label for="price">Quantity</label>
                                    <input type="number" name="qty" id="price" class="form-control" value="{{$data->quantity}}">	
                                </div>
                            </div>                                           
                        </div>
                    </div>	                                                          
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Current Image</h2>
                        <img width="50" src="/products/{{$data->image}}">
                    </div>	                                        
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">New Image</h2>	
                        <input type="file" name="image" >
                    </div>	                                        
                </div>
            </div>
        </div>
        
        <div class="pb-5 pt-3">
            <button class="btn btn-primary">Create</button>
            <a href="{{url('view_product')}}" class="btn btn-outline-dark ml-3">Cancel</a>
        </div>
    </div>
    </form>
    <!-- /.card -->
</section>
@endsection

{{-- <!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style type="text/css">
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 60px;
        }
        h1{
            color: white;
        }
        label{
            display: inline-block;
            width: 200px;
            font-size: 18px!important;
            color: white!important;
        }
        input[type='text']{
            width: 400px;
            height: 50px;
        }
        textarea{
            width: 450px;
            height: 80px;
        }
        .input_deg{
            padding: 15px;
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
          
          <h1>Update Product</h1>

          <div class="div_deg">
            <form action="{{url('edit_product',$data->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input_deg">
                    <label>Product Title</label>
                    <input type="text" name="title" value="{{$data->title}}">
                </div>
                <div class="input_deg">
                    <label>Description</label>
                    <textarea name="description">{{$data->description}}</textarea>
                </div>
                <div class="input_deg">
                    <label>Price</label>
                    <input type="text" name="price" value="{{$data->price}}">
                </div>
                <div class="input_deg">
                    <label>Quantity</label>
                    <input type="number" name="qty" value="{{$data->quantity}}">
                </div>
                <div class="input_deg">
                    <label>Product Category</label>
                    <select name="category" >
                        <option value="{{$data->category}}">{{$data->category}}</option>
                        @foreach ($category as $category)

                        <option value="{{$category->category_name}}">{{$category->category_name}}
                        </option>

                        @endforeach
                    </select>
                </div>
                <div class="input_deg">
                    <label>Current Image</label>
                    <img width="150" src="/products/{{$data->image}}">
                </div>
                <div class="input_deg">
                    <label>New Image</label>
                    <input type="file" name="image" >
                </div>
                <div class="input_deg">
                    <input class="btn btn-success" type="submit" value="Update Product" >
                </div>
                
            </form>
          </div>

          </div> 
      </div>
    </div>
    <!-- JavaScript files-->
    @include('admin.js')
  </body>
</html> --}}