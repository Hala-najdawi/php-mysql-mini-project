<html>
<head>

    <link rel="stylesheet" type="text/css" href="../source/bootstrap-3.3.6-dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="../source/font-awesome-4.5.0/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="../style/slider.css">
    <link rel="stylesheet" type="text/css" href="../style/mystyle.css">
</head>
<body>
<!-- Header -->
<div class="allcontain">
    <div class="header navbar navbar-light bg-light"style="font-size: 20px" >
        <ul class="socialicon">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
        </ul>
        <ul class="givusacall">
            <li>Give us a call : +66666666 </li>
        </ul>
        <ul class="logreg" style="font-size: 20px">
            <li><a href="#">Login </a> </li>
            <li><a href="../components/Registration%20Page.php"><span class="register">Register</span></a></li>


        </ul>
    </div>
            </ul>
        </div>
    </nav>
</div>
<div class="container">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
            <span class="sr-only"> Toggle navigaion</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

    </div>
</div>
<div class="collapse navbar-collapse" id="upmenu">
    <ul class="nav navbar-nav" id="navbarontop">
        <li class="active"><a href="http://localhost/php-mysql-mini-project/index.php">HOME</a> </li>
        <li>
            <a href="http://localhost/php-mysql-mini-project/components/About.php" >About <span class="caret"></span></a>

        </li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEALERS <span class="caret"></span></a>
            <ul class="dropdown-menu dropdowncostume">
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="3">3</a></li>
            </ul>
        </li>
        <li>
            <a href="contact.html">CONTACT</a>

        </li>
        <button><span class="postnewcar">POST NEW CAR</span></button>
    </ul>
</div>
</nav>
</div>
<nav class="navbar navbar-default " style="background-color:#B88E04;width: 70% ;margin-left: 200px">
            <h1>Registration Page</h1>
            <form method="POST"  >
              
                <div class="form-group">
                    <label for="formGroupExampleInput2">Enter Your Email</label>
                    <input type="email"name="email" class="form-control" id="formGroupExampleInput2" placeholder="Another input"require>
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Enter your Password</label>
                    <input type="text"name="password" class="form-control" id="formGroupExampleInput2" placeholder="Another input"require>
                </div>
                <input type="submit" name="loggedin">
            </form>
</nav>
</body>
</html>


<?php
 //include("DataBase.php");
define('DB_SERVER', 'localhost');
 define('DB_USERNAME', 'root');
 define('DB_PASSWORD', 'password');
define('DB_NAME', 'Users');
// /* Attempt to connect to MySQL database */
 $link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
// // Check connection
if(!$link){
    echo "ERROR";
  die("ERROR: Could not connect. " . mysqli_connect_error());

}
 $email = $_POST['email'];
 $pass = $_POST['password'];
 if(isset($_POST['loggedin']))
{
$sql = "SELECT * FROM Users.User WHERE Email='$email' AND pass='$pass'";
if($result = mysqli_query($link, $sql)){
    if(mysqli_num_rows($result) > 0){
     
        while($row = mysqli_fetch_array($result)){
           
        }
        header("Location:http://localhost/php-mysql-mini-project/index.php");
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
}
// Close connection
mysqli_close($link);
?>