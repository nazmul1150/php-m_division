
<?php

$conn = mysqli_connect('localhost','root','','m_division');

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
<!--slider-->
<section class="slider">
    <!-- Start WOWSlider.com BODY section -->
    <div id="wowslider-container1">
    <div class="ws_images"><ul>
        <li><a href="#" target="_self"><img src="data1/images/01.jpg" alt="01" title="" id="wows1_0"/></a></li>
        <li><img src="data1/images/03.jpg" alt="03" title="" id="wows1_1"/></li>
        <li><a href="http://wowslider.com"><img src="data1/images/04.jpg" alt="slider" title="" id="wows1_2"/></a></li>
        <li><img src="data1/images/02.jpg" alt="02" title="" id="wows1_3"/></li>
        <li><img src="data1/images/05.jpg" alt="05" title="" id="wows1_4"/></li>
      </ul></div>
      <div class="ws_bullets"><div>
        <a href="#" title="01"><span><img src="data1/tooltips/01.jpg" alt="01"/>1</span></a>
        <a href="#" title="02"><span><img src="data1/tooltips/03.jpg" alt="02"/>2</span></a>
        <a href="#" title="03"><span><img src="data1/tooltips/04.jpg" alt="03"/>3</span></a>
        <a href="#" title="04"><span><img src="data1/tooltips/02.jpg" alt="04"/>4</span></a>
        <a href="#" title="04"><span><img src="data1/tooltips/05.jpg" alt="04"/>5</span></a>
      </div>
    </div>
    <div class="ws_script" style="position:absolute;left:-99%">
      <a href="http://wowslider.com">wow slider</a> by WOWSlider.com v8.7</div>
    <div class="ws_shadow"></div>
    </div>  
    <script type="text/javascript" src="engine1/wowslider.js"></script>
    <script type="text/javascript" src="engine1/script.js"></script>
    <!-- End WOWSlider.com BODY section -->
</section>
<!--End slider-->
<?php mysqli_close($conn); ?>