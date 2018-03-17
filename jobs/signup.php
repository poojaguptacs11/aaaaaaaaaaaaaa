<?php include('header.php'); ?>
    <!-- Page Content -->
    <div class="container">
      <div class="row">

        <div class="col-md-8" id="reg_form">
          <h1 class="text-center">Sign Up</h1>
          <form action="signup_user.php" method="post">
            <div class="form-group">
                <label for="Username">Username</label>
                <input class="form-control" placeholder="Enter your name" name="username" >
            </div>
            <div class="form-group">
                <label for="Password">Password</label>
                <input class="form-control" placeholder="Enter your password" name="password" >
            </div>
            <div class="form-group">
                <label for="E-mail">E-mail</label>
                <input class="form-control" placeholder="Enter your email" name="email" >
            </div>
            <div class="form-group">
                <label for="Mobile-No">Mobile-No</label>
                <input class="form-control" placeholder="Enter your number" name="mob_no" >
            </div>
            <button type="submit" name="usignup" class=" btn btn-success">Submit</button>
            <button type="reset" class=" btn btn-success">Reset</button>
        </form>
      
        </div>
      </div>
    </div>
<?php include('footer.php'); ?>