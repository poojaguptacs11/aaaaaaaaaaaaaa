      
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
  <form action="lib/login.php" method="POST" enctype="multipart/form-data">
    <div class="row">
      <h2>login</h2>
      <div id="hiden" style="color: green; text-align: center;"><?php echo @$_REQUEST['msg'];?></div>
     
     
     <div class="row">
   
       <div class="input-group input-group-icon">
        <label>Email</label>
        <input type="email" name="email" />
        
        <div class="input-group input-group-icon">
        <label>Password</label>
        <input type="password" name="password" />
        
          
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