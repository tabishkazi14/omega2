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
            color: #999;
            padding: 1rem;
        }
        
        .about-container{
            background-color: rgba(180,180,180 ,0.8);
            width: 100%;
            
            margin-top: -20px;
            padding: 10px;
            border: 1px solid #3488ef;
            border-radius: 5px;
            
        }
        
        .contact{
            background-color: #262626;
            color: aliceblue;
            padding: 10px;
            margin-bottom: 10px;
            height: 200px;
        }
        .contact-left{
            width: 50%;
            float: left;
            
        }
        .contact-right{
            width: 50%;
            float: left;
            
        }   
        .about-box{
            width: 80%;
            margin: 0px 10% 20px 10%;
        }
        
    </style>
</head>



<body>
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
                <li class="active"><a role="presentation" href="about.php">About</a></li>
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
                <li><a role="presentation" href="login.php">Login</a></li>
                <?php
                    }
                ?>
            </ul>
            </div>
        </div>
    </nav>
    <!-- --------------------------------------NAVBAR ENDS------------------------------------------ -->
    <div class="about-box text-center">
    <div class="panel panel-primary">
        <div class="panel-heading  text-center"><h class="panel-title ">About  -      OMEGA couriers</h></div>
    
        <div class="panel-body">
            <div class=" text-center">
                <h3>Omega<small class="text-warning">couriers</small></h3>
                <p>Smarter way to get your Couriers and Parcels Moving.</p>
            </div>
        </div>
    </div>
    <div class="about-container">
        <p>Ever wondered how convenient it would have been if you could send across priceless treasures to your loved ones from the comforts of your home!</p>

        <p>We are pleased to introduce you to Omegacouriers.com - India's leading online courier booking portal which is conceptualized in providing express courier delivery just at the click of a button!!!</p>

        <p>Seems like a dream come true right!</p>

        <p>We render our expertise in imparting Rapid, Cost effective, Reliable and Time-definite delivery of parcels across different locations all over India.</p>

        <p>At Omegacouriers.com we strive to achieve the highest level of Customer Satisfaction possible. Our cutting edge technologies, highly reliable logistics and state of the art customer service enables us to provide the fastest and the most reliable door to door transit times in the industry.</p>
    </div>
    </div>
    <div class="contact">
        <h3 class="text-center">CONTACT US</h3>
        <div class="contact-left">
            <h4>HEAD OFFICE</h4>
            <p>B-wing, Sagar tech plaza,</p>
            <p>SakiNaka, Mumbai</p>
            <p>Maharashtra 400072</p>
        </div>
        <div class="contact-right">
            <h4>Email:</h4>
            <p>contact@omegacouriers.com</p>
            <h4>Phone:</h4>
            <p>022-2006-6342</p>
        </div>
    </div>

<div class="footer text-center">
        <p>2015 © Omega Couriers. All rights reserved.</p>
    
</div>

</body>
</html>
