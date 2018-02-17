<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/admin_panel/css/bootstrap.min.css" rel="stylesheet">

<div class="container">
    <br> <br>
    <div class="col-md-12">
        <div class="alert alert-info">
             Login 
        </div>
    </div>
    <div class="col-md-4">
        
    </div>
    <div class="col-md-4">
     <div class="">
         <form class="form-signin" method="post" action="<?php echo  base_url();?>login_controller/Login_info.html">
             <h2 class="form-signin-heading"> Please Sign In </h2>
             <label for="exampleInputEmail" class="sr-only">Email</label>
             <input type="email" class="form-control" name='email'id="exampleInputEmail1" placeholder="email">
             <label for="exampleInputPassword" class="sr-only">Password</label>
             <input type="password" class="form-control" name='password' id="exampleInputPassword1" placeholder="password">
             <div class="checkbox">
                 <label> 
                     <input type="checkbox" value="m emember me" > Remember Me
                 </label>
                 <button type="submit" class="btn btn-lg btn btn-info btn-block"> sign in </button>
             </div>
           </form>
     </div>
    </div>
    <div class="col-md-4">
        
    </div>
</div>
   
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>resource/admin_panel/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/admin_panel/js/bootstrap.min.js"></script>
  </body>
</html>