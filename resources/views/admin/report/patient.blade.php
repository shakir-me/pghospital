  @extends('admin.layout.layout')
  @section ('admin_content')




   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Patient</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Patient</li>
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
               
              </div>

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Patient  Name</th>
                    <!-- <th>Patient Email</th> -->
                    <th>Patient Phone</th>
                    <th>Patient Post Code</th>
                    <th>Patient By</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    @foreach($patient as $row)
                  <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row->first_name}}-{{$row->last_name}}</td>
                    <td>{{$row->phone_number}}</td>
                    <td>{{$row->post_code}}</td>
                    <td>{{$row->type}}</td>
                  
                    
                     
                    <td>
                      <a href="" class="btn btn-info">view</a>
                      
                    </td>
                  </tr>
                  @endforeach
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Patient  Name</th>
               <!--      <th>Patient Email</th> -->
                    <th>Patient Phone</th>
                    <th>Patient Post Code</th>
                    <th>Patient By</th>
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