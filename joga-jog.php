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

              <div class="container">
                <div class="col-md-10">
                    <div class="form-area">  
                        <form role="form">
                        <br style="clear:both">
                                    <h3 style="margin-bottom: 25px; text-align: center;">Contact Form</h3>
                            <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Name" required>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="email" name="email" placeholder="Email" required>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile Number" required>
                          </div>
                          <div class="form-group">
                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                          </div>
                                    <div class="form-group">
                                    <textarea class="form-control" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                                        <span class="help-block"><p id="characterLeft" class="help-block ">You have reached the limit</p></span>                    
                                    </div>
                            
                        <button type="button" id="submit" name="submit" class="btn btn-primary pull-right">Submit Form</button>
                        </form>
                    </div>
                </div>
                </div>
<script type="text/javascript">
  $(document).ready(function(){ 
    $('#characterLeft').text('140 characters left');
    $('#message').keydown(function () {
        var max = 140;
        var len = $(this).val().length;
        if (len >= max) {
            $('#characterLeft').text('You have reached the limit');
            $('#characterLeft').addClass('red');
            $('#btnSubmit').addClass('disabled');            
        } 
        else {
            var ch = max - len;
            $('#characterLeft').text(ch + ' characters left');
            $('#btnSubmit').removeClass('disabled');
            $('#characterLeft').removeClass('red');            
        }
    });    
});
</script>
		      </div>
          <!--End first part-->
		  
	 <!--slidebar 2nd padt-->
     <?php include('sidebar2nd-part.php'); ?>
     <!--End slidebar 2nd padt-->
    </div>
  </div>
</section>
<!--End contant-->

<?php include('hader-footer/footer.php'); ?>