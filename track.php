<?php require_once('connect.php'); ?>
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
            position: absolute;
            right: 0;
            bottom: 0;
            left: 0;
            background-color: #262626;
            width: 100%;
            margin-top: 10px;
            color: #999;
            padding: 1rem;
        
        }
        
        .track{
            font-size: 1.5em;
            
        }
        thead{
            background-color: #262626;
            color: #999;
            width: 100%;
        }
        
        table{
            margin-top: 20px;
        }
        td{
            background-color: #ffffff;
            font-size: 1.2em;
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
                <li><a role="presentation" href="index.php">Home</a></li>
                <li class="active"><a role="presentation" href="track.php">Track</a></li> 
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
    
<br><br><br>
<div class="track text-center">
    <form action="track.php" method="post">
        <font  size=5 color="#e07b23">Track Your Order:</font><br>
        <input type="text" name="order_no" placeholder="Order no.">
        <br>
        <input type="submit" class="btn btn-primary btn-lg" style="margin-top:5px;" value="Track">
        
    </form> 
</div>
<?php

    if(isset($_POST['order_no']))
    {
        $order_no=$_POST['order_no'];

        $sql = "SELECT order_no FROM orders WHERE order_no = '$order_no'";
        $sql1 = "SELECT book_date FROM orders WHERE order_no = '$order_no'";
        $sql2 = "SELECT origin FROM orders WHERE order_no = '$order_no'";
        $sql3 = "SELECT destination FROM orders WHERE order_no = '$order_no'";
        $sql4 = "SELECT reciever_name FROM orders WHERE order_no = '$order_no'";
        $sql5 = "SELECT status FROM orders WHERE order_no = '$order_no'";
        $result=$conn->query($sql);
        $book_date=$conn->query($sql1);
        $origin=$conn->query($sql2);
        $dest=$conn->query($sql3);
        $recn=$conn->query($sql4);
        $status=$conn->query($sql5);
        if ($result->num_rows > 0) {
            $order = $result->fetch_assoc();
            $bookdate = $book_date->fetch_assoc();
            $from = $origin->fetch_assoc();
            $to = $dest->fetch_assoc();
            $reciever = $recn->fetch_assoc();
            $statuss = $status->fetch_assoc();
        }
        else{
            ?>
            <div class="container text-center" style="width: 20%;"> 
                 <div class="alert alert-danger card" role="alert">
                    Invalid Order no.
                </div>
            </div><?php
        }
    }
    
?>

<div>

    <div class="track-details">
        <table class="table">
            <thead>
                <tr>
                    <th>Order no.</th>
                    <th>Booking date</th>
                    <th>Origin</th>
                    <th>Destination</th>
                    <th>Receivers name</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    
                    <td><?php echo $order['order_no'];  ?></td>
                    <td><?php echo $bookdate['book_date'];  ?></td>
                    <td><?php echo $from['origin'];  ?></td>
                    <td><?php echo $to['destination'];  ?></td>
                    <td><?php echo $reciever['reciever_name'];  ?></td>
                    <td><?php echo $statuss['status'];  ?></td>
                </tr>
            </tbody>
        </table>
    </div>
</div> 
    


    


<div class="footer text-center">
        <p>2015 © Omega Couriers. All rights reserved.</p>
    
</div>
</body>
</html>
