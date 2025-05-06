@extends('layouts.admin.index')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="row">
    <div class="col-lg-12 mb-4 order-0">
      <div class="card">
        <div class="d-flex align-items-end row">
          <div class="col-sm-7">
            <div class="card-body">
              <h5 class="card-title text-primary">Welcome {{ Auth::user()->name }}! 🎉</h5>
              <p class="mb-4">
                Thank you for logging in. Keep track of your platform's performance below.
              </p>
            </div>
          </div>
          <div class="col-sm-5 text-center text-sm-left">
            <div class="card-body pb-0 px-0 px-md-4">
              <img src="{{ asset('assets/img/illustrations/man-with-laptop.png')}}" height="140" alt="Welcome User" data-app-dark-img="illustrations/man-with-laptop-dark.png" data-app-light-img="illustrations/man-with-laptop-light.png">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Order Statistics -->
    <div class="col-lg-12">
      <div class="card h-100">
        <div class="card-header d-flex align-items-center justify-content-between pb-0">
          <div class="card-title mb-0">
            <h5 class="m-0 me-2">Incidents Data Analytics</h5>
          </div>


          
    <!--/ Order Statistics -->
  </div>
  <!-- Footer -->
  <footer class="content-footer footer bg-footer-theme">
    <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
      <div class="mb-2 mb-md-0">©
        <script>document.write(new Date().getFullYear());</script> IDAS
        <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder"></a>
      </div>
      <div class="col-md navbar-nav-right d-flex align-items-center" id="navbar-collapse">
         <marquee>
          <h1 class="align-items-center ms-auto" style="font-size: 20px;">
            <b>Incident Data Access System | Bontoc Southern Leyte</b>
          </h1>
         </marquee>
      </div>
      <div class="d-none d-lg-inline-block">
        <!-- <img src="../assets/img/img/logo.jpg" alt="logo" width="20" height="20"> -->
        <span class="brand-text demo menu-text"></span>
      </div>  
    </div>
  </footer>
  <!-- / Footer -->
</div>
@endsection