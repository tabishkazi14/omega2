<!DOCTYPE html>
<html>
<head>
    <title>Omega Couriers</title>
    <link rel="icon" type="img/png" href="img/icon.png">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
	<style type="text/css">
		
		body{
			background-image: url("img/bg.jpg");
			background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            background-attachment: fixed;
            
		}
		 body:before {
                content:"";
                display:block;
                position:fixed;
                width:100%;
                height:100%;
                left:0;
                top:0;
                z-index:-1;
                background-color: rgba(45, 45, 45, 0.6);
        }
        
        li{float: left;}
        
     
        
        .footer{
            position: static;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #262626;
            width: 100%;
            margin-top: 10px;
            padding: 1rem;
            color: #999;
        }
        .centered-form{
            margin-top: 60px;
        }

        .centered-form .panel{
            background: rgba(245, 245, 245, 0.6);
            box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
        }
        
}
     
            
       
       
        
        

    </style>
</head>
<body>
    <?php require_once('adduser.php');
    session_start(); ?>
	 <!-- --------------------------------------navbar------------------------------------------ -->
    <nav class="navbar navbar-inverse">
        
        <div class="container">
            <div class="navbar-header"> 
                <a class="navbar-brand" style="font-size:24px;" href="index.php">OMEGA<span class="text-warning" style="font-size:0.8em;"> courier</span></a>
            </div>
            <div class="menu">
            <ul class="nav navbar-nav pull-right">
                <li><a role="presentation" href="index.php">Home</a></li>
                <li><a role="presentation" href="track.php">Track</a></li> 
                <li><a role="presentation" href="about.php">About</a></li>
                <?php
                    session_start();
                    require_once('connect.php');
                    if(isset($_SESSION['email']))
                    {   
                        $name=$_SESSION['first_name'];

                ?>
                <li><a role="presentation" href="#"><?php echo $name; ?></a>
                <div class="menuac">
                    <ul>
                        <li style="display: block;"><a href="account.php">Your Orders</a></li>
                        <!--<li style="display: block;"><button class="btn btn-primary btn-sm btn-block" onclick="">Sign out</button></li> -->
                        <li style="display: block;"><a class="button btn btn-primary btn-sm btn-block" href="logout.php">Sign out</a></li>
                    </ul>
                </div>

                </li>
                <?php 
                    }
                    else
                    {
                        
                ?>  
                <li class="active"><a role="presentation" href="login.php">Login</a></li>
                <?php
                    }
                ?>
            </ul>
            </div>
        </div>
    </nav>
    <!-- --------------------------------------NAVBAR ENDS------------------------------------------ -->
    
    <?php 
        if (isset($_SESSION['email']))
        {
        
                ?>
                <div class="container text-center" style="width: 40%;"> 
                        <div class="alert alert-danger card" role="alert">
                                you are already logged in
                        </div>
                </div>
                <?php
                    $user=$_POST['first_name'];
                    echo "$user";
                ?>
                
                <?php
                exit();
          
        }
    ?>
      <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-primary">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Sign in</h3>
			    </div>
                    <div class="panel-body">
                        
                    <form role="form" action="login.php" method="post">
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required="">
                        </div>

                        
                        <div class="form-group">
                            <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required="">
                        </div>
                         
                        

                        <input type="submit" value="Sign in" class="btn btn-primary btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
    <!--Register Panel Starts-->
    <div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-primary">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Sign up for Omega Couriers</h3>
			    </div>
                    <div class="panel-body">
                    <form role="form" action="login.php" method="post">
                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                     <input type="text" name="first_name" id="first_name" class="form-control input-sm" placeholder="First Name" required="">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" class="form-control input-sm" placeholder="Last Name">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" class="form-control input-sm" placeholder="Phone no." required="">
                        </div>
                            
                        <div class="form-group">
                            <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address" required="">
                        </div>

                        <div class="row">
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password" required="">
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6">
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-sm" placeholder="Confirm Password" required="">
                                </div>
                            </div>
                            
                        </div>

                        <input type="submit" value="Register" class="btn btn-primary btn-block">

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    
<div class="footer text-center">
    <p>2015 &copy Omega Couriers. All rights reserved.</p>

</div>
 
</body>
</html>