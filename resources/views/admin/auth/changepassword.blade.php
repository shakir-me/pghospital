 
  @extends('admin.layout.layout')
  @section ('admin_content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Setting</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Manage Setting</li>
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
       <form action="{{route('update.password')}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">

                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="text"   class="form-control" value="{{$adminDetails['email']}}" readonly="">
                    </div>

                 
                   <div class="form-group col-md-6">
                      <label for="current_password">Current  Password</label>
                      <input type="password"  name="current_password" id="current_password"  class="form-control" placeholder="Current Password">
                        <span id="check_password"></span>
                    </div>


                     <div class="form-group col-md-6">
                      <label for="new_password">New  Password</label>
                      <input type="password"  name="new_password" id="new_password"  class="form-control" placeholder="New Password" required="">
                    </div>

                      <div class="form-group col-md-6">
                      <label for="confirm_password">Confirm  Password</label>
                      <input type="password"  name="confirm_password" id="confirm_password"  class="form-control" placeholder="Confirm Password" required="">
                    </div>
                     </div>


                    <div class="form-group col-md-6">
                      <button type="submit" class="btn btn-primary">Updated</button>
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
        <script type="text/javascript">
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $('#one')
                  .attr('src', e.target.result)
                  .width(80)
                  .height(80);
          };
          reader.readAsDataURL(input.files[0]);
      }
   }
</script>


@endsection