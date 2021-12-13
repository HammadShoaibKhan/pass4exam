

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('admin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Certs Idea</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.vendors') }}" class="nav-link {{ request()->routeIs('admin.vendors', 'admin.vendor.create', 'admin.vendor.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Vendors
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.certifications') }}" class="nav-link {{ request()->routeIs('admin.certifications', 'admin.certification.create', 'admin.certification.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Certifications
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.exams') }}" class="nav-link {{ request()->routeIs('admin.exams', 'admin.exam.create', 'admin.exam.edit') ? 'active' : '' }}">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Exams
              </p>
            </a>
          </li>
          <li class="nav-item">
              <a href="{{ route('admin.users') }}" class="nav-link {{ request()->routeIs('admin.users', 'admin.user.create', 'admin.user.edit') ? 'active' : '' }}">
                  <i class="nav-icon fas fa-users"></i>
                  <p>
                      Users
                  </p>
              </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.orders') }}" class="nav-link {{ request()->routeIs('admin.orders', 'admin.order.view', 'admin.order.change-status') ? 'active' : '' }}">
                <i class="nav-icon fas fa-cart-arrow-down"></i> 
                <p>
                    Orders
                </p>
            </a>
        </li>
        <li class="nav-item">
          <a href="{{ route('admin.testimonials') }}" class="nav-link {{ request()->routeIs('admin.testimonials', 'admin.testimonial.view', 'admin.testimonial.delete', 'admin.testimonial.change-status') ? 'active' : '' }}">
            <i class="nav-icon fas fa-comment-dots"></i>
              <p>
                  Testimonials
              </p>
          </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.contents') }}" class="nav-link {{ request()->routeIs('admin.contents', 'admin.content.create', 'admin.content.edit') ? 'active' : '' }}">
          <i class="nav-icon fas fa-comment"></i>
            <p>
              Content Manager
            </p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('admin.testimonials') }}" class="nav-link {{ request()->routeIs('admin.testimonials', 'admin.testimonial.view', 'admin.testimonial.delete', 'admin.testimonial.change-status') ? 'active' : '' }}">
          <i class="nav-icon fas fa-scroll"></i>
            <p>
                Blogs
            </p>
        </a>
    </li>
  </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
