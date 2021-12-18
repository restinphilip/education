<?php
    session_start();

    function OpenCon()
    {
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $db = "smartedu";
        $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
        return $conn;
    }
    
    function CloseCon($conn)
    {
        $conn -> close();
    }
    
    if(isset($_POST['loginSubmit']))
    {
        $email = $_POST['loginEmail'];
        $password = $_POST['loginPassword'];
        $password = md5($password);

        $conn = OpenCon();
        $query = "SELECT * FROM suuser WHERE email='".$email."' AND password='".$password."'";
        echo $query;
        $result = mysqli_query($conn,$query);
        if($result)
        {
            $result = mysqli_fetch_array($result);
            $_SESSION['suuser'] = $result['id'];
            echo '
                <script>
                    location.href="dashboard.php";
                </script>
            ';
        }
    }


?>
<!doctype html>
<html lang="en">
  <head>
  	<title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
						<form action="" class="login-form" method="post">
		      		<div class="form-group">
		      			<input type="email" class="form-control rounded-left" placeholder="Username" name="loginEmail" required>
		      		</div>
	            <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="loginPassword" required>
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5" style="width:100%;" name="loginSubmit">Get Started</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>

