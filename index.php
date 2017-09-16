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
        
        .how{
            width: 100%;
            height: auto;
            margin-top: 50px;
            color: #e07b23;
            padding: 0%;
            
        }
        
        .how-head{
            background-color: #262626;
        }
        .desc{
           
            background-color: rgba(38,38,38,0.6);
            border: 2px solid black;
            border-radius: 10px;
            color: #999;
            width: 60%;
        }
        
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
        .desc p{
            color: aliceblue;
            padding: 5px;
        }
        .prohibited{
            background-color: rgba(38,38,38,0.6);
            border: 2px solid black;
            border-radius: 10px;
            width: 60%;
            color: aliceblue;
        }
        .pro-head{
            color: #e07b23;
            background-color: #262626;
        }
        
    </style>
</head>
<body>
	<nav class="navbar navbar-inverse">
        
        <div class="container">
        	<div class="navbar-header"> 
        		<a class="navbar-brand" style="font-size:24px;" href="index.php">OMEGA<span class="text-warning" style="font-size:0.8em;"> courier</span></a>
        	</div>
        	<div class="menu">
            <ul class="nav navbar-nav pull-right">
				<li class="active"><a role="presentation" href="index.php">Home</a></li>
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
				<li><a role="presentation" href="login.php">Login</a></li>
				<?php
    				}
    			?>
            </ul>
            </div>
        </div>
    </nav>
    			

    <div class="container text-center">
        
    	<div class="row">
    		<form class="form-horizontal" action="omega.php" method="post">
	    		<div class="col-md-4" style="background-color: rgba(245,245,245,0.4); padding-top: 10px; border-radius: 4px; margin-left: 150px;">
	    			
			        <div class="form-group">
			        	<label class="control-label col-sm-4" for="pstate">Pickup State:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" id="pstate" name="pstate">
			        	</div>
			        </div>
			        
			        <div class="form-group">
			        	<label class="control-label col-sm-4" for="pcity">Pickup City:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" id="pcity" name="pcity">
			        	</div>
			        	
			        </div>
			        <div class="form-group">
			        	<label class="control-label col-sm-4">Pickup Pincode:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" name="ppincode">
			        	</div>
			        </div>
	    		</div>


	    		<div class="col-md-4" style="background-color:rgba(245,245,245,0.4); padding-top: 10px; margin-left: 20px; border-radius: 4px;">
	    			<div class="form-group">
			        	<label class="control-label col-sm-4" for="dstate">Delivery State:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" id="dstate" name="dstate">
			        	</div>
			        </div>
			        
			        <div class="form-group">
			        	<label class="control-label col-sm-4" for="dcity">Delivery City:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" id="dcity" name="dcity">
			        	</div>
			        	
			        </div>
			        <div class="form-group">
			        	<label class="control-label col-sm-4">Delivery Pincode:</label>
			        	<div class="col-sm-8">
			        		<input class="form-control" type="text" name="dpincode">
			        	</div>
			        </div>
	    		</div>
                
                
	    		<div class="col-md-7"  style="background-color:rgba(245,245,245,0.4); padding-top: 10px; margin-top: 2px; margin-left:200px;  border-radius: 4px;">
	    		    <div class="form-group">
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="type">Type:</label>
                                <div class="radio col-sm-5">
                                    <label>
                                            <input class="" type="radio" name="type">Document

                                    </label>
                                </div>
                        
                                <label class="control-label col-sm-4" for="type"></label>
                                <div class="radio col-sm-5">
                                    <label>
                                            <input class="" type="radio" name="type">Parcel&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </label>
                                </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-4" for="weight">Weight:</label>
                                <div class="col-sm-5">
                                    <input class="form-control" type="text" name="weight" placeholder="in grams">
                                </div>
                        </div>
                        
                            
                                
	    			
	    		 </div>
                     <div>
                        <input type="submit" class="btn btn-primary btn-lg btn-block" style="margin-top:5px;" value="Get Quote">
                    </div>
    		  </form>
    	      </div>
              <!--
              <div class="col-md-5">
                  <br><br><br><br><br>
                 
                        
                        <span style="font-size: 2.8em; color:#e07b23" class=""><span class="glyphicon glyphicon-earphone" aria-hidden=true style="color:black;"></span>
                            1800-000-000</span>
                    
              </div>  -->

        

        </div>
    </div>
    
    <div class="how">
        <div class="text-center how-head">
            <h1>How It Works?</h1>
        </div>
        <div  class="text-center desc container">
            <h3>BOOK COURIERS ONLINE</h3>
            <p>Get an instant courier delivery quote, at best price.</p>
            <h3>WE MAKE IT SIMPLE TO SHIP</h3>
            <p>Get free door pick up from anywhere in INDIA.</p>
            <h3>FAST DELIVERY AND ONLINE TRACKING SERVICE</h3>
            <p>Get fast delivery and track your order anytime online.</p>
        </div>
    </div>
        <div class="pro-head text-center"><h1>Prohibited/Restricted Items</h1></div>    
        <div class="prohibited text-center container">

            <ul>Alcohol</ul>
            <ul>Ammunation</ul>
            <ul>Animal/Birds</ul>
            <ul>Batteries</ul>
            <ul>Gold</ul>
            <ul>Hazardous Chemicals</ul>
            <ul>liquid</ul>
            <ul>Money</ul>
        </div>

    <div class="footer text-center">
        <p>2015 © Omega Couriers. All rights reserved.</p>
        <span><a href="procument.php">Procument</a></span>
    </div>
            
    
    
    
    
    
        
  

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</body>

</html>