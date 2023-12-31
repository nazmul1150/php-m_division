<?php include('hader-footer/header.php'); 

session_start();
if (isset($_SESSION['set'])) {
   echo "<script>window.open('admin/admin-home.php','_self');</script>";
}

?>

<style type="text/css">
    @import url(https://fonts.googleapis.com/css?family=Roboto:300);

.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.form {
    position: relative;
    z-index: 1;
    background: #FFFFFF;
    max-width: 360px;
    margin: 0 auto 100px;
    padding: 0px 56px;
    text-align: center;
    box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    padding-bottom: 65px;
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background: #4CAF50;
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
}
.form button:hover,.form button:active,.form button:focus {
  background: #43A047;
}
.form .message {
    font-size: 29px;
    color: #000;
    font-weight: bold;
    padding-bottom: 5px;
    padding-top: 20px;
}
.form .message a {
  color: #4CAF50;
  text-decoration: none;
}
.form .register-form {
  display: none;
}
.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;
}
.container:before, .container:after {
  content: "";
  display: block;
  clear: both;
}
.container .info {
  margin: 50px auto;
  text-align: center;
}
.container .info h1 {
  margin: 0 0 15px;
  padding: 0;
  font-size: 36px;
  font-weight: 300;
  color: #1a1a1a;
}
.container .info span {
  color: #4d4d4d;
  font-size: 12px;
}
.container .info span a {
  color: #000000;
  text-decoration: none;
}
.container .info span .fa {
  color: #EF3B3A;
}
body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}
@media (min-width: 250px) and (max-width: 450px){
.form {
    margin: 0;
    max-width: 265px;
    text-align: center;
    padding: 0px 19px;
    padding-bottom: 40px;
}
.form .message {
    font-size: 23px;
}
}


</style>
<div class="col-lg-12 col-md-12 col-sm-12 col-12">
<div class="login-page">
  <div class="form">
    <form class="login-form" method="post" action="login.php">

<?php

include('dbconect.php');

if(isset($_POST['submit'])){

  if (empty($_POST['name'])||empty($_POST['password'])) {
    $error1='<p class="text-danger">file is required failed.</p>';
  }
  else{
 
     $name=$_POST['name'];
     $password=md5($_POST['password']);


    $sql="SELECT `id`,`username`, `password` FROM `admin_login` WHERE `username`='$name' AND `password`='$password'";

    $run=mysqli_query($conn,$sql);


    $row =mysqli_num_rows($run);
    if ($row>0) {

   while($data = mysqli_fetch_assoc($run)){
       $id = $data['id'];

    $_SESSION['set'] = $id;
    echo "<script>window.open('admin/admin-home.php','_self');</script>";
   }

    }
    else{

      $error2='<p class="text-danger">invalied username or password</p>';
    }


  }
}

 ?>
      <p class="message">Please login in</p>
      <?php if (isset($error1)) {
        echo $error1;
      } ?>
      <?php if (isset($error2)) {
        echo $error2;
      } ?>
      <input type="text" name="name" placeholder="username"/>
      <input type="password" name="password" placeholder="password"/>
      <button name="submit">login</button>
    </form>
  </div>
</div>
</div>

<script type="text/javascript">
    $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
</script>

</body>
</html>

