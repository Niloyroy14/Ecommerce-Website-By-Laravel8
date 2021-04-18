 <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="profile-image"> <img src="" alt="Admin image"/> <span class="online-status online"></span> </div>
              <div class="profile-name">
                <p class="name">Richard V.Welsh</p>
                <p class="designation">Manager</p>
                <div class="badge badge-teal mx-auto mt-3">Online</div>
              </div>
            </div>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{route('admin.index')}}"><img class="menu-icon" src="/images/menu_icons/01.png" alt="menu icon"><span class="menu-title">Dashboard</span></a></li>

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title"> Products</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.product')}}">Manage Products</a></li>
                
              </ul>
            </div>

             <div class="collapse" id="general-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.product.create')}}">Create Products</a></li>
                
              </ul>
            </div>
          </li>



           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#Orders-pages" aria-expanded="false" aria-controls="Orders-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title"> Orders</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="Orders-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.order')}}">Manage Orders</a></li>  
              </ul>
            </div>
          </li>



           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#category-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title"> Category</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="category-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.category')}}">Manage Category</a></li>
                
              </ul>
            </div>

             <div class="collapse" id="category-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.category.create')}}">Create Category</a></li>
                
              </ul>
            </div>
          </li>


           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#brand-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Brand</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="brand-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.brand')}}">Manage Brand</a></li>
                
              </ul>
            </div>

             <div class="collapse" id="brand-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.brand.create')}}">Create Brand</a></li>
                
              </ul>
            </div>
          </li>



          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#division-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Division</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="division-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.division')}}">Manage Division</a></li>
                
              </ul>
            </div>

             <div class="collapse" id="division-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.division.create')}}">Create Division</a></li>
                
              </ul>
            </div>
          </li>
          

          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#district-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">District</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="district-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.district')}}">Manage District</a></li>
                
              </ul>
            </div>

             <div class="collapse" id="district-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.district.create')}}">Create District</a></li>
                
              </ul>
            </div>
          </li>


           <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#slider-pages" aria-expanded="false" aria-controls="general-pages"> <img class="menu-icon" src="/images/menu_icons/08.png" alt="menu icon"> <span class="menu-title">Slider</span><i class="menu-arrow"></i></a>

            <div class="collapse" id="slider-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.slider')}}">Manage Slider</a></li>
              </ul>
            </div>

              <div class="collapse" id="slider-pages">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('admin.slider.create')}}">Create Slider</a></li>
                
              </ul>
            </div>

          </li>



          <li class="nav-item">
            <a class="nav-link" href="#logout-pages">           
              <form class="form-inline" action="{{route('admin.logout')}}"" method="post">
                @csrf

                <input type="submit" value="Logout Now" class="btn btn-danger">
                

              </form>

            </a>
            
          </li>
          
          
          


        </ul>
      </nav>
   
      <!-- partial -->
