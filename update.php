<?php
session_start(); 
if(isset($_SESSION['admin']))
{
?>
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
<body>
	<nav class="navbar navbar-inverse">
        
        <div class="container">
        	<div class="navbar-header"> 
        		<a class="navbar-brand" style="font-size:24px;" href="index.php">OMEGA<span class="text-warning" style="font-size:0.8em;"> courier</span></a>
        	</div>
        	<div class="menu">
                <ul class="nav navbar-nav pull-right">
    				<li><a role="presentation" href="admin.php">orders</a></li>
    				<li class="active"><a role="presentation" href="update.php">Update</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div>
        <font  size=6 color="#ccc">Update an Order:</font><br>
    </div>
    <div class="container">
        <form class="form-horizontal" action="update.php" method="post">
            <div class="form-group">
                <label class="control-label col-sm-2" for="order" style="color: #ccc;">Order no:</label>
                <div class="col-sm-2">
                    <input class="form-control" type="text"  name="order">
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-sm-2" for="status" style="color: #ccc;">Status:</label>
                <div class="col-sm-2">
                    <input class="form-control" type="text"  name="status">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary btn-sm" value="update">
                </div>
            </div>

        </form>
    </div>

    <?php

        session_start();
        require_once('connect.php');

        if(isset($_POST['order']) AND isset($_POST['status']))
        {
            $order= $_POST['order'];
            $status= $_POST['status'];
        
            $sql = "UPDATE orders SET status='$status' WHERE order_no = '$order'";

            if($conn->query($sql)===TRUE)
            {
                echo "Updated Successfully";
                $sql = "select * from orders where order_no = $order";
                $result=$conn->query($sql);
                $row = $result->fetch_assoc();

                $order = $row['order_no'];
                $orig = $row['origin'];
                $dest = $row['destination'];
                $bookdate = $row['book_date'];
                $reciever_name = $row['reciever_name'];
                $cost = $row['cost'];
                $email = $row['email'];
                $status = $row['status'];


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
                        <th>Cost</th>
                        <th>Email</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        
                        <td><?php echo $order;  ?></td>
                        <td><?php echo $bookdate;  ?></td>
                        <td><?php echo $orig;  ?></td>
                        <td><?php echo $dest;  ?></td>
                        <td><?php echo $reciever_name;  ?></td>
                        <td><?php echo $cost;  ?></td>
                        <td><?php echo $email;  ?></td>
                        <td><?php echo $status;  ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div> 
      <?php
        }
        else{
            echo "Your page is being Redirected..Please wait";
            header('Refresh:2 url=adminlog.php');
        }
        ?>

</body>
</html>