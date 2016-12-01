<?php

session_start();

if(isset($_POST['emailaddress'])){

  
  $xml = simplexml_load_file("users.xml");

  $emailaddress = @trim($_POST["emailaddress"]);
  $password = @trim($_POST["password"]);
  foreach($xml->user as $user){
    // md5 the password
    // if both the password and email is correct
    if($user->email == $emailaddress && $user->password == md5($password)){
      $_SESSION['username']=$emailaddress;
       header("Location: secure.php");
      // exit loop
      exit();
    }
  }
}
?>
<!DOCTYPE html>
<html lang = "en">
<head>
    <meta charset="utf-8">
    <meta http-equiv = "X-UA-Compatible" content = "IE=edge">
    <meta name="viewpoint" content="width=device-width, intial-scale=1">

    <title> Login Form! </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link href="form.css" rel="stylesheet">
</head>
<body>
    <!-- container -->
  
    <div class="container">

<h2> <strong> Welcome to LearnByQuiz </strong></h2>
    
       
    

        <!-- add a jumotron -->
            <div class="jumbotron">
               <!-- <h2 id="1"> Please Login ! </h2>-->
              <h3 class="text-center">
                Please Login
              </h3>
                <hr>
                <br/>
                <form method="post" action="#" name="submit">
                    <div class="form-group">
                        <!-- input email -->
                        <label for="email"> Email Address: </label>
                        <input type="emailaddress" name = "emailaddress" class="form-control" id="emailaddress" >
                        <br/>
                        <!-- password-->
                        <label for="password"> Password: </label>
                        <input type="password" class="form-control" id = "password" name="password">
                        <!--submit-->
                        <br/>
                        <button type="loginform" class="btn btn-lg center-block" name="submit" id="submit"> Login! </button>
                    </div>
                </form>
                <br/>
              <hr>
                 <footer>
                    <p> A web app project made by : Jordan | Emma | Christopher | Keith </p>
                </footer>
            </div>
       
    </div>
  <script type="text/javascript">
      alert("Please login to continue");
  </script>
       
</body>
</html>