<!DOCTYPE html>
<html>
<head>
	<title>form</title>
</head>
<body bgcolor="yellow">
	<table>   
		<center>
      <div>
      <form name="myform" action="<?php echo base_url();?>form/save" method="post" ></div>
         <div> Firstname:<input type="text" name="firstname" value="" id="firstname"><br>     </div>
           <div>Lastname:<input type="text" name="lastname" value="" id="lastname"><br>     </div>
          <div>Password:<input type="password" name="password" value="" id="password"><b>    </div>
          <div>Address:<input type="text" name="address" value="" id="address"><br></div>
        <div>Gender:<input type="radio" name="gender" value="male" id="gender">Male
                  <input type="radio" name="gender" value="male" id="gender">Female</div>
                    <div>
                      <input type="submit" name="submit" value="submit">
                    </div>

             </form>
            </div>
        </center>
    </table>
</body>
</html>

