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
    <form action="{{url('upload_product')}}" method="POST" enctype="multipart/form-data">
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
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Title" required>	
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label for="description">Description</label>
                                    <textarea name="description" id="description" cols="30" rows="10" class="summernote" placeholder="Description" required></textarea>
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
                                    <input type="text" name="price" id="price" class="form-control" placeholder="Price">	
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
                                    <input type="number" name="qty" id="price" class="form-control" placeholder="Quantity">	
                                </div>
                            </div>                                           
                        </div>
                    </div>	                                                          
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h2 class="h4 mb-3">Media</h2>	
                        <input type="file" name="image" >
                        {{-- <div name="image" id="image" class="dropzone dz-clickable">
                            <div class="dz-message needsclick">    
                                <input type="file" name="image" >
                                <br>Drop files here or click to upload.<br><br>                                            
                            </div>
                        </div> --}}
                    </div>	                                        
                </div>
            </div>
            {{-- <div class="col-md-4"> 
                <div class="card">
                    <div class="card-body">	
                        <h2 class="h4  mb-3">Product category</h2>
                        <div class="mb-3">
                            <label for="category">Category</label>
                            <select name="category" id="category" class="form-control">
                                <option value="">Electronics</option>
                                <option value="">Clothes</option>
                                <option value="">Furniture</option>
                            </select>
                        </div>
                    </div>
                </div>                               
            </div> --}}
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


