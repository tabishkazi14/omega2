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
            <li class="active"><a role="presentation" href="#"><?php echo $name; ?></a>
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

<br><br>
<div class="text-center">
    <font  size=6 color="#ccc">Your Orders</font><br>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th>Order no.</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Booking date</th>
                <th>Receivers name</th>
                <th>Cost<th>
                <th>Status</th>
            </tr>
        </thead>
        <?php 
            
            $email= $_SESSION['email'];            
            $sql = "SELECT order_no, origin, destination, book_date, reciever_name, cost, status FROM orders WHERE email='$email'";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
                
                $order = $row['order_no'];
                $orig = $row['origin'];
                $dest = $row['destination'];
                $bookdate = $row['book_date'];
                $reciever_name = $row['reciever_name'];
                $cost = $row['cost'];
                $status = $row['status'];
                
                ?>

                <tbody>
                    <tr>
                        
                        <td><?php echo $order;  ?></td>
                        <td><?php echo $orig;  ?></td>
                        <td><?php echo $dest;  ?></td>
                        <td><?php echo $bookdate;  ?></td>
                        <td><?php echo $reciever_name;  ?></td>
                        <td><?php echo $cost;  ?></td>
                        <td><?php echo $status; ?></td>
                        <td></td>
                    </tr>
                </tbody>
                <?php
            }

        ?>
    </table>
</div>

</body>
</html>