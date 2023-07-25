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
        <a href="home-slider-img.php" type="button" class="btn btn-success">Showing Data</a>
      <a href="home-slider-img-datainsert.php" type="button" class="btn btn-info">Data Inseart</a>

          <div class="row">
            <div class="col-sm-1"></div>
            <div class="col-sm-8 col-xs-12">
          <div class="for-s">
            <form method="post" action="home-slider-img-datainsert.php" enctype="multipart/form-data">
              <table>
                <tr>
                  <td>Home page Slider images :</td>
                  <td><input type="file" name="image" required></td>
                </tr>
                <tr>
                  <td><input type="submit" name="submit" value="submit"></td>   
                </tr>
              </table>
            </form>
              </div>
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


<?php include('admin-hader-and-footer/admin-footer.php'); ?>

<?php

if (isset($_POST['submit'])) {

  $file_name=$_FILES['image']['name'];
  $file_tmp_name=$_FILES['image']['tmp_name'];

  move_uploaded_file($file_tmp_name,"../data1/images/".$file_name);

  $qur="INSERT INTO `home_slider` (`img`) VALUES ('$file_name')";

  $run=mysqli_query($conn,$qur);
  if($run===TRUE){
  ?>

  <script>
    alert('data creat successful.');
    window.open('home-slider-img.php','_self');
  </script>

  <?php
}
else{
  echo "Error :".$qur."</br>".mysqli_error($conn);
}
}
mysqli_close($conn);
?>