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
       <br> <br> <br> 
<div class="container">
        
   
       <div class="col-md-4">
           <div class="alert alert-success">
           <h4>Welcome  <?php echo  $this->session->userdata('first_name'); ?>
               <?php echo  $this->session->userdata('middle_name'); ?>
               <?php echo $this->session->userdata('last_name'); ?>
            </h4>
          </div>  
      </div>
        
       <div class="col-md-4">
       </div>
    
    <div class="col-md-4">
       <div class="alert alert-info">    
          User Type: <?php echo $this->session->userdata('type'); ?>
       </div>  
    </div>
    <br> <br>
    <h4> Total User:<?php echo count($user_info);?> </h4>
        <div class="">
           
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
        </div>
           
          <div class="col-md-12">
           
              <table border='1' class="table table-hover" style="background-color:yellowgreen">
              
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> User Type </th>
                            <th> User Status </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    
                    <?php
                    
                    foreach($user_info as $value){ 
                        
                        ?>
                    <tbody>
                        
                     <td> <?php echo $value->first_name;?> <?php echo $value->middle_name;?>  <?php echo $value->last_name;?> </td>
                     <td> <?php echo $value->email;?> </td>
                     <td> <?php echo $value->type;?></td>
                     <td> 
                     <?php 
                     if($value->status==1){ ?>
                         <div class="alert alert-success">
                             <strong> Active </strong>
                         </div>
                    <?php
                      }elseif($value->status==0){?>
                         
                     <div class="alert alert-danger">
                             <strong> Inactive </strong>
                         </div>      
                    <?php  } ?>
                     
                     </td>
                     <td> <a href="<?php echo base_url();?>super_admin_controller/edit_info/<?php echo $value->regi_id;?>"> Edit </a> </td>
                     
                      
                    </tbody>
                    <?php } ?>      
             </table>
              <br>
              <h3> Delete User Post </h3>
              <hr>
              
              <table border='1' class="table table-hover" style="background-color:yellowgreen">
              
                    <thead>
                        <tr>
                            <th> Name </th>
                            <th> Email </th>
                            <th> Title </th>
                            <th> Description </th>
                            <th> Price </th>
                            <th> Image </th>
                            <th> Action </th>
                        </tr>
                    </thead>
                    
                    <?php
                    
                    foreach($product_info as $value){ 
                        
                        ?>
                    <tbody>
                        
                     <td> <?php echo $value->name;?> </td>
                     <td> <?php echo $value->email;?> </td>
                     <td> <?php echo $value->title;?> </td>
                     <td> <?php echo $value->description;?></td>
                     <td> <?php echo $value->price;?> </td>
                     <td> <img src="<?php echo base_url();?><?php echo $value->image_path;?>" height="90px" width="150px" class="img-thumbnail"> </td>
                     <td> <a href="<?php echo base_url();?>super_admin_controller/Delete_info/<?php echo $value->product_id;?>">Delete </a> </td>
                     
                      
                    </tbody>
                    <?php } ?>      
             </table>
         </div>
         
       
 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>resource/admin_panel/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>resource/admin_panel/js/bootstrap.min.js"></script>
  </body>
</html>