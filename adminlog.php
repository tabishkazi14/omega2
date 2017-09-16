<?php
        require_once('connect.php');
        session_start(); 
        if (isset($_SESSION['admin']))
        {
            header('Refresh:2 url=admin.php');
        }

        else
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
                
                <li><a role="presentation" href="admin.php">Orders</a></li> 
                <li><a role="presentation" href="update.php">Update</a></li>
            </ul>
            </div>
        </div>
    </nav>
    <!-- --------------------------------------NAVBAR ENDS------------------------------------------ -->
    


        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">Admin Sign in</h3>
                        </div>
                        <div class="panel-body">
                        
                            <form role="form" action="adminlog.php" method="post">
                                <div class="form-group">
                                    <input type="text" name="adminid" class="form-control input-sm" placeholder="Admin id" required="">
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


<?php
        }

if(isset($_POST['adminid']) AND isset($_POST['password']))
{
    $id=$_POST['adminid'];
    $pass=$_POST['password'];

    $sql= "SELECT id from admin WHERE id='$id' AND password='$pass'";
    $result= $conn->query($sql);
    if($result->num_rows >0)
    {
        $_SESSION['admin']=$id;
        echo "Your page is being Redirected..Please wait";
        header('Refresh:2 url=admin.php');

    }
    else{
        echo "incorrect id or password";
    }

}
?>

</body>
</html>

