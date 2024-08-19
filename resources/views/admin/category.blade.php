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
              <form action="{{url('add_category')}}" method="post">
                @csrf
                <div>
                    <input type="text" name="category" id="name" class="form-control" placeholder="Name">
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
  <!-- Content Header (Page header) -->
  <section class="content-header">					
    <div class="container-fluid my-2">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Categories</h1>
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
          {{-- <div class="card-tools">
            <div class="input-group input-group" style="width: 250px;">
              <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
    
              <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
                </button>
              </div>
              </div>
          </div> --}}
        </div>
        <div class="card-body table-responsive p-0">								
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th width="100">Category Name</th>
                <th width="60">Edit</th>
                <th width="60">Delete</th>
              </tr>
            </thead>
            <tbody>
              @foreach ( $data as $data )
              <tr>
                <td>{{$data->category_name}}</td>
                <td>
                  <a href="{{url('edit_category',$data->id)}}">
                    <svg class="filament-link-icon w-4 h-4 mr-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                    </svg>
                  </a>
                </td>
                <td>
                  <a href="{{url('delete_category',$data->id)}}" class="text-danger w-4 h-4 mr-1">
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
  <!-- /.content -->

@endsection

