<?php

$conn = mysqli_connect('localhost','root','','m_division');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
  <!--headersection-->
    <section class="headersection">

<!--logo-->
     <div class="container">
       <div class="row l-g">
           <div class="col-md-2 col-sm-2 col-12 lo-go">
            <a><img src="img/logo.png" class="img-responsive"></a>
           </div>
             <div class="col-md-4 col-sm-10 col-12 h-tag">
              <a><h4>স্বাগতম ময়মনসিংহ বিভাগ</h4></a>
             </div>
         <div class="col-md-5 col-sm-8 col-8">
                 <form id="search_form" onsubmit="return false;">
                <div class="input-group">
                  <input type="text" class="input-ol form-control" name="query" placeholder="Search now... " />
                  <span class="input-group-btn" onclick="return searchcontent()">
                    <button class="btn btn-outline-primary btn-primary rounded" type="button" aria-label="Search">
                      <i class="fa fa-search" aria-hidden="true"></i> 
                     </button>
                   </span>
                </div>
              </form>
         </div>
          <div class="col-md-1 col-sm-4 col-4 lo-gin">
          <a href="login.php">Login</a>
         </div>
       </div>
     </div>
    </section>

    <!--navigation-->

    <section class="na-vs">
      <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.php">প্রথম পাতা <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="divison-porichiti.php">বিভাগ পরিচিতি</a>
            </li>

            <!--sub manu-->
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                জেলা ও উপজেলা
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"  href="mymensingh.php">ময়মনসিংহ  জেলা </a>
                  <ul class="dropdown-menu">
                        <a class="dropdown-item" href="moymonshing-sodor-upojala.php">ময়মনসিংহ সদর উপজেলা</a>
                        <a class="dropdown-item" href="fulbaria-upojala.php">ফুলবাড়ীয়া উপজেলা</a>
                        <a class="dropdown-item" href="trishal-upojala.php">ত্রিশাল উপজেলা</a>
              					<a class="dropdown-item" href="vluka-upojala.php">ভালুকা উপজেলা</a>
              					<a class="dropdown-item" href="muktagasa-upojala.php">মুক্তাগাছা উপজেলা</a>
                        <a class="dropdown-item" href="dobaura-upojala.php">ধোবাউড়া উপজেলা</a>
                        <a class="dropdown-item" href="fulpur-upojala.php">ফুলপুর উপজেলা</a>
                        <a class="dropdown-item" href="fulpur-upojala.php">হালুয়াঘাট উপজেলা</a>
                        <a class="dropdown-item" href="fulpur-upojala.php">গৌরীপুর উপজেলা</a>
                        <a class="dropdown-item" href="fulpur-upojala.php">গফরগাঁও উপজেলা</a>
                        <a class="dropdown-item" href="fulpur-upojala.php">ঈশ্বরগঞ্জ উপজেলা</a>
                        <a class="dropdown-item" href="fulpur-upojala.php">নান্দাইল উপজেলা</a>
                        <a class="dropdown-item" href="fulpur-upojala.php">তারাকান্দা উপজেলা</a>
                  </ul>
                </li>
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"  href="sherpur.php">শেরপুর  জেলা </a>
                  <ul class="dropdown-menu">
                      <a class="dropdown-item" href="fulpur-upojala.php">শেরপুর সদর উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">নালিতাবাড়ী উপজেলা</a>
            					<a class="dropdown-item" href="fulpur-upojala.php">শ্রীবরদী উপজেলা</a>
            					<a class="dropdown-item" href="fulpur-upojala.php">নকলা উপজেলা</a>
            					<a class="dropdown-item" href="fulpur-upojala.php">ঝিনাইগাতী উপজেলা</a>
                  </ul>
                </li>
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"  href="jamalpur.php">জামালপুর  জেলা </a>
                  <ul class="dropdown-menu">
                      <a class="dropdown-item" href="fulpur-upojala.php">জামালপুর সদর উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">মেলান্দহ উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">ইসলামপুর উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">দেওয়ানগঞ্জ উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">সরিষাবাড়ী উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">মাদারগঞ্জ উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">বকশীগঞ্জ উপজেলা</a>
            					
                  </ul>
                </li>
                <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle"  href="natrokona.php">নেত্রকোণা  জেলা </a>
                  <ul class="dropdown-menu">
                      <a class="dropdown-item" href="fulpur-upojala.php">নেত্রকোণা সদর উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">বারহাট্টা উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">দুর্গাপুর উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">কেন্দুয়া উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">আটপাড়া উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">মদন উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">খালিয়াজুরী উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">কলমাকান্দা উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">মোহনগঞ্জ উপজেলা</a>
                      <a class="dropdown-item" href="fulpur-upojala.php">পূর্বধলা উপজেলা</a>
                  </ul>
                </li>
              </ul>
           </li>

           <!--End sub manu-->
            <li class="nav-item">
              <a class="nav-link" href="etihas-oitijjo.php">ইতিহাস ও ঐতিহ্য</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="vinodon.php">বিনোদন</a>
            </li>
          </ul>
        </div>
    </nav>
  </div>
</section>
<!--End navigation-->

<?php mysqli_close($conn); ?>