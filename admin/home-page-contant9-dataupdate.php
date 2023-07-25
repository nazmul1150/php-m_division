<?php
include('sequerity.php');
include('admin-hader-and-footer/admin-header.php');
include('../dbconect.php');
 ?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home Page
        <small>Table Title</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
        <li class="active">Here</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content container-fluid">
      <div class="bat-on">
        <a href="home-contant9.php" type="button" class="btn btn-success">Showing Data</a>
      <a href="home-page-contant9-datainsart.php" type="button" class="btn btn-info">Data Inseart</a>
      <a href="home-page-contant9-dataupdate.php" type="button" class="btn btn-warning">Data Update</a>
      <a href="home-page-contant9-dataDelete.php" type="button" class="btn btn-danger">Data Delete</a>

      <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-11">
      <div class="data-update">
        <form action="home-page-contant9-dataupdate.php" method="post">
          <?php

          $count=1;

          //$qur = 'Select * from p-saba ORDER BY id desc;';
          $qur = "SELECT `id`, `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `agreculture`";
          $result = mysqli_query($conn,$qur);

          while ($data=mysqli_fetch_assoc($result)) {
            
            ?>
          <table style="width: 70%;">
            <tr>
              <th style="border:1px solid #000; font-size: 15px; text-align: center;background: #3C8DBC; color: #000; width: 30%;"><?php echo "<h4>count  ". $count."</h4>"; ?></th>
              <th style="border:1px solid #000; font-size: 15px; text-align: center;background: #3C8DBC; color: #000; width: 70%;"><h4>contant</h4></th>
            </tr>

            <tr>
              <td style="width: 30%; border:1px solid #000; font-size: 15px; text-align: center;width: 30%;"><h4>heading</h4></td>
              <td style="width: 70%; border:1px solid #000; font-size: 15px; text-align: center;"><?php echo "<h4>".$data["title"]."</h4>";?></td>
            </tr>
  
            <tr>
               <td style="border:1px solid #000; font-size: 15px; text-align: center;width: 30%;"><h5>images</h5></td>
              <td style="border:1px solid #000; font-size: 15px; text-align: center; width: 70%;"><img src="../img/contant-img/<?php echo $data["img"]; ?>"></td>
            </tr>
    
            <tr>
              <td style="border:1px solid #000; font-size: 15px; text-align: center; width: 30%;"><h5>contant1</h5></td>
              <td style="border:1px solid #000; font-size: 15px; text-align: center;width: 70%;"><?php echo "<p>". $data["contant1"]."</p>"; ?></td>
            </tr>
            <tr>
              <td style="border:1px solid #000; font-size: 15px; text-align: center; width: 30%;"><h5>contant2</h5></td>
              <td style="border:1px solid #000; font-size: 15px; text-align: center;width: 70%;"><?php echo "<p>". $data["contant2"]."</p>"; ?></td>
              
            </tr>
            <tr>
              <td style="border:1px solid #000; font-size: 15px; text-align: center; width: 30%;"><h5>contant3</h5></td>
              <td style="border:1px solid #000; font-size: 15px; text-align: center;width: 70%;"><?php echo "<p>". $data["contant3"]."</p>"; ?></td>
            </tr>
            <tr>
              <td style="border:1px solid #000; font-size: 15px; text-align: center; width: 30%;"><h5>contant4</h5></td>
              <td style="border:1px solid #000; font-size: 15px; text-align: center;width: 70%;"><?php echo "<p>". $data["contant4"]."</p>"; ?></td>
            </tr>
            <tr><td style=" font-size: 15px; text-align: center; width: 30%; padding: 20px;"><a href="home-page-contant9-dataedit.php?id=<?php echo $data["id"]; ?>" type="button" class="btn btn-warning">Data Edit</a></td></tr>
            <?php $count++;}?>
          </table>
        </form>
      </div>
    </div>
  </div>
</div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Create the tabs -->
    <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
      <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
      <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
    </ul>
    <!-- Tab panes -->
    <div class="tab-content">
      <!-- Home tab content -->
      <div class="tab-pane active" id="control-sidebar-home-tab">
        <h3 class="control-sidebar-heading">Recent Activity</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <i class="menu-icon fa fa-birthday-cake bg-red"></i>

              <div class="menu-info">
                <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                <p>Will be 23 on April 24th</p>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

        <h3 class="control-sidebar-heading">Tasks Progress</h3>
        <ul class="control-sidebar-menu">
          <li>
            <a href="javascript:;">
              <h4 class="control-sidebar-subheading">
                Custom Template Design
                <span class="pull-right-container">
                    <span class="label label-danger pull-right">70%</span>
                  </span>
              </h4>

              <div class="progress progress-xxs">
                <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
              </div>
            </a>
          </li>
        </ul>
        <!-- /.control-sidebar-menu -->

      </div>
      <!-- /.tab-pane -->
      <!-- Stats tab content -->
      <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
      <!-- /.tab-pane -->
      <!-- Settings tab content -->
      <div class="tab-pane" id="control-sidebar-settings-tab">
        <form method="post">
          <h3 class="control-sidebar-heading">General Settings</h3>

          <div class="form-group">
            <label class="control-sidebar-subheading">
              Report panel usage
              <input type="checkbox" class="pull-right" checked>
            </label>

            <p>
              Some information about this general settings option
            </p>
          </div>
          <!-- /.form-group -->
        </form>
      </div>
      <!-- /.tab-pane -->
    </div>
  </aside>
  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->




<?php include('admin-hader-and-footer/admin-footer.php'); 
mysqli_close($conn); ?>