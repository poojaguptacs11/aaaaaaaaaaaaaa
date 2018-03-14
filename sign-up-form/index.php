<?php session_start()?>
<!DOCTYPE html>
<html lang="en" >

<head>
  <meta charset="UTF-8">
  <title>Listing ICO</title>
  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
  <link rel="stylesheet" href="css/style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
      setTimeout(function() {
    $('#hiden').fadeOut('fast');
}, 6000);
});

</script> 
  
</head>

<body>


  
<div class="container">
  <form action="ajax.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <h4>Account</h4>
      <div id="hiden" style="color: green; text-align: center;"><?php echo @$_REQUEST['msg'];?></div>
     
      <div class="input-group input-group-icon"><label>Email</label>
        <input type="email" name="email" />
        
      </div>
      <div class="input-group input-group-icon"><label>Password</label>
        <input type="password" name="password" />
        
      </div>
      <div class="input-group input-group-icon"><label >ICO doc</label>
        <input type="file" name="image" />
        
      </div>
       
     
      <div class="input-group input-group-icon"><label >Contract Address</label>
        <input type="text"  name="address"/>
        
      </div>
       <div class="input-group input-group-icon">
       <label > Logo </label>
        <input type="file"  name="logo"/>
        
      </div>
      <div class="input-group input-group-icon">
      <label > Company Name </label>
        <input type="text"   name="company_name"/>
        
      </div>
      <div class="input-group input-group-icon">
      <label > Description </label>
        <input type="text"  name="description" />
        
      </div>
       <div class="input-group input-group-icon">
       <label > Whitepaper</label>
        <input type="file" name="whitepaper" />
        
      </div>
    </div>
    <div class="row">
      <div class="col-half">
        <h4>Social links</h4>
        <div class="input-group input-group-icon">
        <label > Twitter link</label>
        <input type="url"  name="twitter"/>        
        </div>
        <div class="input-group input-group-icon">
        <label > Facebook link</label>
        <input type="url"   name="facebook"/>        
        </div>
       
      </div>
      <div class="col-half">
        <h4>.</h4>
        
        <div class="input-group input-group-icon">
        <label > Linkedin link</label>
        <input type="url"  name="linkedin"/>        
        </div>
        <div class="input-group input-group-icon">
        <label > Google+ link</label>
        <input type="url"  name="google"/>        
        </div>
      </div>
    </div>
     <div class="row">
      <h4>Other</h4>
       <div class="input-group input-group-icon">
        <label>Website Url</label>
          <input type="url"  name="website"/>  
        </div>
        <div class="input-group input-group-icon">
        <label>Video Url</label>
          <input type="url"  name="video"/>  
        </div>
        <div class="input-group input-group-icon">
        <label>Team</label>
          <input type="text"  name="team"/>  
        </div>
        <div class="input-group input-group-icon">
        <label>Milestones</label>
          <input type="text"  name="milestones"/>  
        </div>      
      </div>
    
    <div class="row">
      <h4>Terms and Conditions</h4>
      <div class="input-group">
        <input type="checkbox" id="terms"/>
        <label for="terms">I accept the terms and conditions for signing up to this service, and hereby confirm I have read the privacy policy.</label>
      </div>
    </div>

<button type="submit" name="submit"  class="input-group" value="Submit">Submit</button>
  </form>

</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="js/index.js"></script>



</body>

</html>