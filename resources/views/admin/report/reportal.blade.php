  @extends('admin.layout.layout')
  @section ('admin_content')




   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Reportal </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Reportal</li>
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
               <!--  <h3>All Distric  
                   <a class="btn btn-success float-right btn-sm" href="{{route('hospital.add')}}"><i class="fa fa-plus-circle"></i>Add Distric</a>
                </h3> -->
              </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Reportal  Name</th>
                    <th>Reportal Email</th>
                    <th>Reportal Phone</th>
                    <th>Reportal Post Code</th>
                    <th>Reportal By</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($reportal as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->reporter_name}}</td>
                    <td>{{$row->reporter_email}}</td>
                    <td>{{$row->reporter_phone}}</td>
                    <td>{{$row->reporter_post_code}}</td>
                    <td>{{$row->reporter_by}}</td>
                   
                
                    <td>
                      <a href="" class="btn btn-info">View</a>
                      
                    </td>
                  </tr>
                  @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                     <th>ID</th>
                    <th>Reportal  Name</th>
                    <th>Reportal Email</th>
                    <th>Reportal Phone</th>
                    <th>Reportal Post Code</th>
                    <th>Reportal By</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
                  </div>  
                </div>
                <!-- /.card-body -->

           
            </div>
    
          </div>
        </div>


    
    </section>




    <!-- Main content -->
    </div>
  



@endsection