<?php

#include('security.php');

session_start();

if(!isset($_SESSION['admin_id']))
{
  header('location: signin.php');

  exit;
}

if($_SESSION['password'] != $_SESSION['user_type'])
{
  header('location: signin.php');

  exit;
}

include('includes/header.php');

include('includes/navbar.php');
?>

<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
    <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
        class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
  </div>

  <!-- Content Row -->
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Registered Admins</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">

                <?php
                require 'dbconfig.php';

                $query = "SELECT Admin_ID FROM admin ORDER BY Admin_ID";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>' . $row . '</h1>';
                ?>


              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-secret fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Total Registered Clubs</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">


                <?php
                require 'dbconfig.php';

                $query = "SELECT USER_ID FROM users WHERE USER_TYPE = 0 ORDER BY USER_ID";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>' . $row . '</h1>';
                ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-flag fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Total Registered Users</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">


                <?php
                require 'dbconfig.php';

                $query = "SELECT USER_ID FROM users WHERE USER_TYPE = 1 ORDER BY USER_ID";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>' . $row . '</h1>';
                ?>

              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-users fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--<div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Tasks</div>
              <div class="row no-gutters align-items-center">
                <div class="col-auto">
                  <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                </div>
                <div class="col">
                  <div class="progress progress-sm mr-2">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>-->

    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">Total Special Events</div>
              <div class="h5 mb-0 font-weight-bold text-gray-800">
              <?php
                require 'dbconfig.php';

                $query = "SELECT Event_ID FROM special_events ORDER BY Event_ID";
                $query_run = mysqli_query($connection, $query);

                $row = mysqli_num_rows($query_run);

                echo '<h1>' . $row . '</h1>';
                ?>
              </div>
            </div>
            <div class="col-auto">
              <i class="fa fa-calendar fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div> 
  </div>

  <!-- Content Row -->








  <?php
  include('includes/scripts.php');
  include('includes/footer.php');
  ?>