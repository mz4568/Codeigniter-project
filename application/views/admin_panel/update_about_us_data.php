<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Welcome</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>resource/admin_panel/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
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
          <li class="active"><a href=""><span class="glyphicon glyphicon-home" aria-hidden="true"></span>&nbsp;Home <span class="sr-only">(current)</span></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Setting <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>admin_controller/set_about_us.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Set About Us</a></li>
            <li><a href="<?php echo base_url();?>admin_controller/set_home_content.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;Set Home Content</a></li>
            
            
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span> View <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="<?php echo base_url();?>admin_controller/view_about_us.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;View About Us</a></li>
            <li><a href="<?php echo base_url();?>admin_controller/view_home_content.html"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;View Home Content</a></li>
            
          </ul>
        </li>
        <li ><a href="admin_controller/view_profile"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span>&nbsp;View Profile </a></li>
        <li ><a href="<?php echo base_url();?>admin_controller/logout.html"><span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>&nbsp;LogOut</a></li>
      </ul>
      
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <br> <br> <br> <br>
    <div class="container">
        
        <div class="alert alert-success">
             <h4>Update About Us </h4>
        </div>
            
        <h3> 
            <font color="green">
                <?php 
                $msg=$this->session->userdata('message');
                 if(isset($msg)) {
                     echo  $msg; 
                     $this->session->unset_userdata('message');
                 }  
                        
                        
                ?>
            </font>
            </h3>
            
      
   
    
  <form class="form-horizontal"method="post" action="<?php echo base_url();?>admin_controller/admin_update_about_us.html">
  <div class="form-group">
    <label class="col-sm-2 control-label">Title</label>
    <div class="col-sm-10">
        <input type="text" class="form-control" name="title" value="<?php echo $edit_data->title;?>">
        <input type="hidden" class="form-control" name="about_us_id" value="<?php echo $edit_data->about_us_id;?>">
    </div>
  </div>
  <div class="form-group">
    <label  class="col-sm-2 control-label">Content</label>
    <div class="col-sm-10">
        <textarea class="form-control"required="" name="content"> <?php echo $edit_data->content;?></textarea>
    </div>
  </div>
  
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-success">Publish</button>
    </div>
  </div>
 </form>
 </div>       
    
    <br> <br>
    <div class="container">
     
      <footer>
        <p>&copy; 2016 Company, Inc.</p>
      </footer>
    </div> <!-- /container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>resource/admin_panel/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/admin_panel/js/bootstrap.min.js"></script>
  </body>
</html>