@extends('admin.index')

@section('main')

<section class="content-header">					
  <div class="container-fluid my-2">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Create Category</h1>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<section class="content">
  <!-- Default box -->
  <div class="container-fluid">
    <div class="card">
      <div class="card-body">								
        <div class="row">
          <div class="col-md-12">
            <div>
              <label for="name">Category Name</label>
              <form action="{{url('update_category',$data->id)}}" method="post">
                @csrf
                <div>
                    <input type="text" name="category" id="name" class="form-control" placeholder="Name" value="{{$data->category_name}}">
                </div>
              <div class="pt-3">
                <input class="btn btn-primary" type="submit" value="Add Category">
                {{-- <button class="btn btn-primary">Create</button> --}}
              </div>
              </form>
              {{-- <input type="text" name="name" id="name" class="form-control" placeholder="Name"> --}}	
            </div>
          </div>
        </div>
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

    <style type="text/css">
        input[type='text']{
            width: 400px;
            height: 50px;
        }
        .div_deg{
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 30px;
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
          
          <h1 style="color: white;">Update Category</h1>
          <div class="div_deg">
          <form action="{{url('update_category',$data->id)}}" method="post">
            @csrf
            <div>
                <input type="text" name="category" value="{{$data->category_name}}">
            
                <input class="btn btn-primary" type="submit" value="Update Category">
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