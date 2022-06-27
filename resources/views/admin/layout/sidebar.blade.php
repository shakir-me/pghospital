 @php
    $id=Auth::user()->id;
    $editData =App\Models\User::find($id);
    @endphp

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{url('dashboard')}}" class="brand-link">
      <img src="{{asset('admin/user/'.$editData->image) }}" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">{{$editData['name']}}</span>
    </a>


    <div class="sidebar">
      

      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="{{url('dashboard')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Dashboard
                <i class="fas fa-angle-left right"></i>
               
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Setting 
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('user/profile')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Profile</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="{{url('change/password')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Update Password</p>
                </a>
              </li>
            </ul>
          </li>


<li class="nav-item">
  <a href="#" class="nav-link">
    <i class="nav-icon fas fa-copy"></i>
    <p>
     Medicine Managemant 
      <i class="fas fa-angle-left right"></i>
    
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{url('medicine/all')}}" class="nav-link">
        <i class="far fa-circle nav-icon"></i>
        <p>Medicines</p>
      </a>
    </li>

     

       
  

  </ul>
</li>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Catalog Managemant 
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('division/all')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Divisions</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="{{url('distric/all')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Distric</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="{{url('hospital/all')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Hospital</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="{{url('department/all')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>departments</p>
                </a>
              </li>
            
          
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Report Managemant 
                <i class="fas fa-angle-left right"></i>
              
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('reporter/report')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Reportal Report</p>
                </a>
              </li>

                <li class="nav-item">
                <a href="{{url('patient/report')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Patient Report</p>
                </a>
              </li>

              

            
            
          
            </ul>
          </li>
        



          </li>
          
       
      
         
       
           <li class="nav-item">
            <a href="{{url('logout')}}" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Logout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>