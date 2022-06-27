  @extends('admin.layout.layout')
  @section ('admin_content')


 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Distric</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Distric</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
               <a class="btn btn-success float-right btn-sm" href="{{route('distric.all')}}"><i class="fa fa-plus-circle"></i>All Distric</a>
              </div>
              @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif

                <div class="card-body">
       <form action="{{route('distric.store')}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">
                   
                      <div class="form-group col-md-6">
                        <label>Distric Name</label>
                        <input type="text" name="name"  class="form-control" required="" placeholder="Distric Name">
                      </div>
@php
$division=DB::table('divisions')->where('status',1)->get()
@endphp
                        <div class="form-group col-md-6">
                        <label>Divisioin Name</label>
                        <select class="form-control" name="division_id" required="">
                        	@foreach($division as $row)
                        	<option value="{{$row->id}}">{{$row->name}}</option>
                        	@endforeach
                        
                        </select>
                      </div>


                        <div class="form-group col-md-6">
                        <label>distric Status</label>
                        <select class="form-control" name="status" required="">
                        	<option value="1">distric Public</option>
                        	<option value="0">distric Private</option>
                        </select>
                      </div>
                       </div>

                    


                   

                    <div class="form-group col-md-6">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </div>
                </form>
                  </div>  
                </div>


           
            </div>
    
          </div>
        </div>


    </section>
    </div>



@endsection