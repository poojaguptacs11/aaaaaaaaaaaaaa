<?php include('header.php'); ?>

    <!-- Page Content -->
    <div class="container">
      <div class="row">
        
        <div class="col-lg-3"></div>
        <div class="col-lg-6" id="login_form">
          <h1 class="text-center">Login</h1>
          <?php
          include('class/user.php');
        if(isset($_POST['login']))
        {
          $uname=trim($_POST['email']);
          $password=trim($_POST['password']);
          $selectRes=$obj->userLogin($uname,$password);
          if($selectRes>0)
          {
            header('Location:home.php');
          }
          else
          {
            ?>
            <h4>Invalid Email or password</h4>
            <?php
          }
        }
        ?>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div class="form-group">
            <label for="inputEmail">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="inputPassword">Password</label>
            <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
        </div>
        <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
        </div>
       <center> <button type="submit" class="btn btn-primary " name="login">Login</button></center>
    </form>
        </div>
      </div>
    </div>

   <?php include('footer.php'); ?>
