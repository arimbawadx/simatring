<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('lte/dist/img/' . auth()->user()->profil) }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p></p>
          <p>{{auth()->user()->nama_panggilan}}</p>
          <!-- Status -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>

      <!-- search form (Optional) -->
      <!-- <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form> -->
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu" data-widget="tree">
        <!-- Optionally, you can add icons to the links -->
        <li class="header"></li>
        <li class="header"></li>
        <li><a href="/admin/"><i class="fa fa-tachometer-alt"></i> <span> Dashboard</span></a></li>
        <li><a href="/admin/data-menu"><i class="fa fa-book-open"></i> <span> Data Menu</span></a></li>
        <li><a href="/admin/data-customer"><i class="fa fa-users"></i> <span> Data Customer</span></a></li>
        <li><a href="/admin/data-penjualan"><i class="fa fa-shopping-cart"></i> <span> Data Penjualan</span></a></li>
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>