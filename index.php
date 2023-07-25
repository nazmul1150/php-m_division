<?php include('hader-footer/header.php'); ?>
<?php include('hader-footer/navigation.php'); ?>
<?php include('hader-footer/slider.php'); ?>

<?php include('dbconect.php'); ?>

<!--contant-->
<section class="contant">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-1"></div>
      <!--first part-->
          <div class="col-md-7">

            <div class="row"><!--1st row-->
              <div class="col-lg-5 col-md-5 col-sm-5 p-orjoton">
                   <?php

                    $count=1;

                    //$qur = 'Select * from p-saba ORDER BY id desc;';
                    $qur = "SELECT `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `p-saba`";
                    $result = mysqli_query($conn,$qur);

                    while ($data=mysqli_fetch_assoc($result)) {
           
                      ?>
                <h4><?php echo $data["title"]; ?></h4>
                  <div class="row">
                    <div class="col-md-6 col-lg-5 pi-orjoton">
                      <img src="img/contant-img/<?php echo $data["img"]; ?>">
                    </div>
                    <div class="col-md-6 col-lg-7 pt-orjoton">
                      <li><a href="dorsoniothan.php"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant1"]; ?></a></li>
                      <li><a href="https://play.google.com/store/apps/details?id=com.tappware.bts&hl=en/"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant2"]; ?></a></li>
                      <li><a href="hotal-abason.php"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant3"]; ?></a></li>
                      <li><a href="http://103.56.208.205/reservation/"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant4"]; ?></a></li>
                       <?php $count++;}?>
                    </div>
                  </div>
              </div>


              <div class="col-lg-5 col-md-5 col-sm-5 p-orjoton">
                <?php

                    $count=1;

                    //$qur = 'Select * from p-saba ORDER BY id desc;';
                    $qur = "SELECT `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `p-&-j`";
                    $result = mysqli_query($conn,$qur);

                    while ($data=mysqli_fetch_assoc($result)) {
           
                      ?>
                <h4><?php echo $data["title"]; ?></h4>
                  <div class="row">
                    <div class="col-md-6 col-lg-5 pi-orjoton">
                      <img src="img/contant-img/<?php echo $data["img"]; ?>">
                    </div>
                    <div class="col-md-6 col-lg-7 pt-orjoton">
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant1"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant2"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant3"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant4"]; ?></a></li>
                       <?php $count++;}?>
                    </div>
                  </div>
              </div>

            </div><!--1st row End-->


             <div class="row"><!--2nd row-->
              <div class="col-lg-5 col-md-5 col-sm-5 p-orjoton">
                <?php

                    $count=1;

                    //$qur = 'Select * from p-saba ORDER BY id desc;';
                    $qur = "SELECT `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `n-&-s`";
                    $result = mysqli_query($conn,$qur);

                    while ($data=mysqli_fetch_assoc($result)) {
           
                      ?>
                <h4><?php echo $data["title"]; ?></h4>
                  <div class="row">
                    <div class="col-md-6 col-lg-5 pi-orjoton">
                      <img src="img/contant-img/<?php echo $data["img"]; ?>">
                    </div>
                    <div class="col-md-6 col-lg-7 pt-orjoton">
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant1"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant2"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant3"]; ?></a></li>
                      <li><a href="http://www.mymensinghrange.police.gov.bd/staff/"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant4"]; ?></a></li>
                       <?php $count++;}?>
                    </div>
                  </div>
              </div>


              <div class="col-lg-5 col-md-5 col-sm-5 p-orjoton">
                <?php

                    $count=1;

                    //$qur = 'Select * from p-saba ORDER BY id desc;';
                    $qur = "SELECT `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `p-&-w`";
                    $result = mysqli_query($conn,$qur);

                    while ($data=mysqli_fetch_assoc($result)) {
           
                      ?>
                <h4><?php echo $data["title"]; ?></h4>
                  <div class="row">
                    <div class="col-md-5 col-lg-5 pi-orjoton">
                      <img src="img/contant-img/<?php echo $data["img"]; ?>">
                    </div>
                    <div class="col-md-7 col-lg-7 pt-orjoton">
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant1"]; ?></a></li>
                      <li><a href="jogajogp.php"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant2"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant3"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant4"]; ?></a></li>
                      <?php $count++;}?>
                    </div>
                  </div>
              </div>

            </div><!--2nd row End-->


            <div class="row"><!--3rd row-->
              <div class="col-lg-5 col-md-5 col-sm-5 p-orjoton">
                <?php

                    $count=1;

                    //$qur = 'Select * from p-saba ORDER BY id desc;';
                    $qur = "SELECT `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `bumi`";
                    $result = mysqli_query($conn,$qur);

                    while ($data=mysqli_fetch_assoc($result)) {
           
                      ?>
                <h4><?php echo $data["title"]; ?></h4>
                  <div class="row">
                    <div class="col-md-6 col-lg-5 pi-orjoton">
                      <img src="img/contant-img/<?php echo $data["img"]; ?>">
                    </div>
                    <div class="col-md-6 col-lg-7 pt-orjoton">
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant1"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant2"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant3"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant4"]; ?></a></li>
                      <?php $count++;}?>
                    </div>
                  </div>
              </div>


              <div class="col-lg-5 col-md-5 col-sm-5 p-orjoton">
                <?php

                    $count=1;

                    //$qur = 'Select * from p-saba ORDER BY id desc;';
                    $qur = "SELECT `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `manobsompod`";
                    $result = mysqli_query($conn,$qur);

                    while ($data=mysqli_fetch_assoc($result)) {
           
                      ?>
                <h4><?php echo $data["title"]; ?></h4>
                  <div class="row">
                    <div class="col-md-6 col-lg-5 pi-orjoton">
                      <img src="img/contant-img/<?php echo $data["img"]; ?>">
                    </div>
                    <div class="col-md-6 col-lg-7 pt-orjoton">
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant1"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant2"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant3"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant4"]; ?></a></li>
                       <?php $count++;}?>
                    </div>
                  </div>
              </div>

            </div><!--3rd row End-->


            <div class="row"><!--4rt row-->
              <div class="col-lg-5 col-md-5 col-sm-5 p-orjoton">
                <?php

                    $count=1;

                    //$qur = 'Select * from p-saba ORDER BY id desc;';
                    $qur = "SELECT `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `education`";
                    $result = mysqli_query($conn,$qur);

                    while ($data=mysqli_fetch_assoc($result)) {
           
                      ?>
                <h4><?php echo $data["title"]; ?></h4>
                  <div class="row">
                    <div class="col-md-5 col-lg-5 pi-orjoton">
                      <img src="img/contant-img/<?php echo $data["img"]; ?>">
                    </div>
                    <div class="col-md-7 col-lg-7 pt-orjoton">
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant1"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant2"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant3"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant4"]; ?></a></li>
                      <?php $count++;}?>
                    </div>
                  </div>
              </div>


              <div class="col-lg-5 col-md-5 col-sm-5 p-orjoton">
                <?php

                    $count=1;

                    //$qur = 'Select * from p-saba ORDER BY id desc;';
                    $qur = "SELECT `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `health`";
                    $result = mysqli_query($conn,$qur);

                    while ($data=mysqli_fetch_assoc($result)) {
           
                      ?>
                <h4><?php echo $data["title"]; ?></h4>
                  <div class="row">
                    <div class="col-md-4 pi-orjoton">
                      <img src="img/contant-img/<?php echo $data["img"]; ?>">
                    </div>
                    <div class="col-md-8 pt-orjoton">
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant1"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant2"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant3"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant4"]; ?></a></li>
                      <?php $count++;}?>
                    </div>
                  </div>
              </div>

            </div><!--4rt row End-->


            <div class="row"><!--5t row-->
              <div class="col-lg-5 col-md-5 col-sm-5 col-xl-5 p-orjoton">
                <?php

                    $count=1;

                    //$qur = 'Select * from p-saba ORDER BY id desc;';
                    $qur = "SELECT `title`, `img`, `contant1`, `contant2`, `contant3`, `contant4` FROM `agreculture`";
                    $result = mysqli_query($conn,$qur);

                    while ($data=mysqli_fetch_assoc($result)) {
           
                      ?>
                  <h4><?php echo $data["title"]; ?></h4>
                  <div class="row">
                    <div class="col-md-6 col-lg-5 pi-orjoton">
                      <img src="img/contant-img/<?php echo $data["img"]; ?>">
                    </div>
                    <div class="col-md-6 col-lg-7 pt-orjoton">
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant1"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant2"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant3"]; ?></a></li>
                      <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> <?php echo $data["contant4"]; ?></a></li>
                      <?php $count++;}?>
                    </div>
                  </div>
              </div>


            </div><!--5t row End-->


          </div>
          <!--End first part-->
		  
		  <!--slidebar 2nd padt-->
     <?php include('sidebar2nd-part.php'); ?>
     <!--End slidebar 2nd padt-->

    </div>
  </div>
</section>
<!--End contant-->

<?php include('hader-footer/footer.php');
mysqli_close($conn); ?>