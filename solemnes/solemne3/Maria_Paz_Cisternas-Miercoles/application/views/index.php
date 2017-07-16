<?php session_start();
include_once "config\database.php"?>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
    
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js">
    <style type="text/css">
    @import "bourbon";

body {
	background: url("http://i1.17173cdn.com/9ih5jd/YWxqaGBf/forum/files/2014/04/22/224249hzmhszu1w459ss4z.jpg");
    background-size: cover;
}

.wrapper {	
	margin-top: 80px;
  margin-bottom: 80px;
}

.form-signin {
  max-width: 380px;
  padding: 15px 35px 45px;
  margin: 0 auto;
  background-color: rgba(0,0,0,0.3);
  border: 1px solid rgba(0,0,0,0.1);  

  .form-signin-heading,
	.checkbox {
	  margin-bottom: 30px;
	}

	.checkbox {
	  font-weight: normal;
	}

	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

	input[type="text"] {
	  margin-bottom: -1px;
	  border-bottom-left-radius: 0;
	  border-bottom-right-radius: 0;
	}

	input[type="password"] {
	  margin-bottom: 20px;
	  border-top-left-radius: 0;
	  border-top-right-radius: 0;
	}
}

    </style>
</head>
<body>

  <div class="wrapper">
    <form method="post" class="form-signin">       
      <h2 class="form-signin-heading">Inicio</h2>
      <input type="text" class="form-control" name="username" placeholder="Email Address" required="" autofocus="" />
      <input type="password" class="form-control" name="password" placeholder="Password" required=""/>      
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Recordar
      </label>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>   
    </form>
  </div>

</body>
</html>
