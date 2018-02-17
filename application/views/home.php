<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title> Welcome to my blog</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/css/bootstrap.min.css" rel="stylesheet">

  </head>
 
   <body>

   <nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
     
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="<?php echo base_url();?>"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home <span class="sr-only">(current)</span></a></li>
        <li><a href="<?php echo base_url();?>homeController/about.html">About Us</a></li>
        <li><a href="<?php echo base_url();?>homeController/registration.html">Registration</a></li>
        <li><a href="<?php echo base_url();?>homeController/login.html">Login</a></li>
        
      </ul>
     
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    
    <div class="container">
      <!-- Example row of columns -->
      <br> <br> <br> <br>
     <div class="alert alert-success">
            <h4> Show All Product </h4>
        </div>
      
          <div style="">
            <div class="row">
              
                    <?php
                    
                    foreach($home_product_info as $value){ 
                        
                        ?>
               
                <div class="col-md-3"> 
                    <img src="<?php echo base_url();?><?php echo $value->image_path;?>"height="300px" width="200px" class="img-thumbnail"alt="Product Image Info"> <br>
                      Title:<?php echo $value->title;?><br>
                      Description:<?php echo $value->description;?><br>
                      Price:<?php echo $value->price;?> <br>
                      Name:<?php echo $value->name;?> <br>
                      Email:<?php echo $value->email;?> 
                </div>
                      <?php } ?>      
         
            </div>
         </div>
     
      <hr>

      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>resource/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/js/bootstrap.min.js"></script>
  </body>
</html>