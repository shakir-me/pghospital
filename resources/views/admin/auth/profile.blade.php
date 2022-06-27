 
  @extends('admin.layout.layout')
  @section ('admin_content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Profile</h1>
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
       <form action="{{route('update.user.profile')}}" method="post" class="forms-sample"  enctype="multipart/form-data">
                    @csrf
                  <div class="form-row">

                    <div class="form-group col-md-6">
                      <label>Name</label>
                      <input type="text" name="name"  class="form-control" value="{{$editData['name']}}">
                    </div>

                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="email" name="email"   class="form-control" value="{{$editData['email']}}">
                    </div>

                    <div class="form-group col-md-6">
                      <label>Mobile</label>
                      <input type="number" name="mobile"  class="form-control" value="{{$editData['mobile']}}">
                    </div>

                    
                    <div class="form-group col-md-6">
                            <label>Image</label>
                          
                             <input type="file" name="image"  class="form-control"  onchange="readURL(this);">

                                <span class="custom-file-control"></span>
                            <img src="#" id="one" >
                            <img id="logo" src="{{asset('admin/user/'.$editData->image) }}" width="50" height="50;" />
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