   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-laugh-wink"></i>
  </div>
  <div class="sidebar-brand-text mx-3">EventsWave <sup>Admin</sup></div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<i class="bi bi-shield-lock"></i>
<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Users Management
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link" href="register.php">
    <i class="fas fa-user-secret"></i>
    <span>Admins Section</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="club.php">
  <i class="fas fa-flag"></i>
    <span>Clubs Section</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="user.php">
  <i class="fas fa-users"></i>
    <span>Users Section</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="events.php">
  <i class="fa fa-calendar"></i>
    <span>Special Events</span></a>
</li>


<!--<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Components</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Components:</h6>
      <a class="collapse-item" href="buttons.html">Buttons</a>
      <a class="collapse-item" href="cards.html">Cards</a>
    </div>
  </div>
</li>

<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
    <i class="fas fa-fw fa-wrench"></i>
    <span>Utilities</span>
  </a>
  <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Custom Utilities:</h6>
      <a class="collapse-item" href="utilities-color.html">Colors</a>
      <a class="collapse-item" href="utilities-border.html">Borders</a>
      <a class="collapse-item" href="utilities-animation.html">Animations</a>
      <a class="collapse-item" href="utilities-other.html">Other</a>
    </div>
  </div>
</li>-->

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Navigation
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-folder"></i>
    <span>Quick Links</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Sites</h6>
      <a class="collapse-item" href="https://edu.sltc.ac.lk/teal">SLTC</a>
      <a class="collapse-item" href="https://eventswave-sltc.eastus.cloudapp.azure.com/">EventsWave Platform</a>
      <div class="collapse-divider"></div>
    </div>
  </div>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Permissions
</div>

<li class="nav-item">
  <a class="nav-link" href="logout.php">
  <i class="fas fa-sign-out-alt"></i>
    <span>Log Out</span></a>
</li>

<!-- Nav Item - Charts
<li class="nav-item">
  <a class="nav-link" href="charts.html">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Charts</span></a>
</li>


<li class="nav-item">
  <a class="nav-link" href="tables.html">
    <i class="fas fa-fw fa-table"></i>
    <span>Tables</span></a>
</li>-->

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

          <img src="assets/images/login_request/small_logo.png" height="50%" width="auto">

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
                <?php echo $_SESSION['admin_registerName']; ?>
                  
                </span>
                <img class="img-profile rounded-circle" src="img/profile.jpg">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="register.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profiles
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>

          </form>


        </div>
      </div>
    </div>
  </div>