<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
      <div class="app-brand demo" style=" padding: 70px;">
        <div class="logo">
          <img style="border-radius: 500px; margin-top: 30px;" src="../../../../../assets/img/img/logo.jpg" width="100" height="100" alt="">
            <b><p style="font-size: 25px; color: blue;">IDASystem</p></b>
        </div>
        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
          <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
      </div>
      <div class="menu-inner-shadow"></div>
        <ul class="menu-inner py-1">
          <!-- Dashboard -->
          <li class="menu-item active">
            <a href="{{ route('dashboard') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Dashboard</div>
            </a>
          </li>
          <li class="menu-item active">
            <a href="{{ route('manageuser.index') }}" class="menu-link">
              <i class="menu-icon tf-icons bx bx-home-circle"></i>
              <div data-i18n="Analytics">Manage Users</div>
            </a>
          </li>
          
          
          
        </aside>
<!-- / Menu -->
