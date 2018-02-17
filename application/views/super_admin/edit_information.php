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
       <br> <br> <br> <br>
  <div class="container">
    <div class="row">
       <div class="col-md-4">
       <form method="post" action="<?php echo base_url();?>super_admin_controller/update_information.html">
            <div class="form-group">
             <label for="exampleInputText">First Name</label>
             <input type="text" class="form-control" name='first_name'id="exampleInputText" value="<?php echo $edit_info->first_name;?>">
             <input type="hidden" class="form-control" name='regi_id'id="exampleInputText" value="<?php echo $edit_info->regi_id;?>">
            </div>
            <div class="form-group">
             <label for="exampleInputText">Middle Name</label>
             <input type="text" class="form-control" name='middle_name' id="exampleInputText" value="<?php echo $edit_info->middle_name;?>">
            </div>
             <div class="form-group">
             <label for="exampleInputText">Last Name</label>
             <input type="text" class="form-control" name='last_name' id="exampleInputText" value="<?php echo $edit_info->last_name;?>">
            </div>
             <div class="form-group">
             <label for="exampleInputEmail1">Email address</label>
             <input type="email" class="form-control" name='email' id="exampleInputEmail1" value="<?php echo $edit_info->email;?>">
            </div>
           <div class="form-group">
              <label for="exampleInputStatus">Status</label>
              <div class="">
              <select class="form-control" name='status' id="exampleInputStatus">
                  <option value="0"> Inactive</option>
                  <option value="1"> Active </option>
              </select>
              </div>
           </div> 
            
            <button type="submit" class="btn btn-success">Update</button>
            
         </form> 
       </div>
    </div>
  </div>    
       <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>resource/admin_panel/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/admin_panel/js/bootstrap.min.js"></script>
  </body>
</html>