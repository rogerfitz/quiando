<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Find Food With Friends</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Le styles -->
    <link href="bootstrap-1/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 40px;
        padding-bottom: 40px;
        background-color: #f5f5f5;
      }

	.sidebar-nav {
        padding: 9px 0;
      }
      .event {
        margin-top: 10px;
        margin-left: 5px;
        margin-right: 5px;
        padding-bottom: 0px;
        background-color: white;
        border-color: silver;
        border-width: 1px;
        border-radius: 4px;
        border-style: solid;
      }
      .event-img {
        padding: 2px;
        margin: 5px;
        border-color: silver;
        border-width: 1px;
        border-radius: 2px;
        border-style: solid;
        border
        background-color: 0;
      }
      
	.form-signin {
        max-width: 300px;
        padding: 19px 29px 29px;
        margin: 0 auto 20px;
        background-color: #fff;
        border: 1px solid #e5e5e5;
        -webkit-border-radius: 5px;
           -moz-border-radius: 5px;
                border-radius: 5px;
        -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
           -moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
                box-shadow: 0 1px 2px rgba(0,0,0,.05);
      }
      .form-signin .form-signin-heading,
      .form-signin .checkbox {
        margin-bottom: 10px;
      }
      .form-signin input[type="text"],
      .form-signin input[type="password"] {
        font-size: 16px;
        height: auto;
        margin-bottom: 15px;
        padding: 7px 9px;
      }

    </style>
    <link href="bootstrap-1/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="../assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="../assets/ico/favicon.png">
  </head>

  <body>
    <td colspan="2">
  </td>
  </tr>
    <div class="container">
     <form class="form-signin" action="members.php" method="POST">
        <h2 class="form-signin-heading">Please sign in</h2>
       <input type="text" class="input-block-level" placeholder="Email address" name="email" /></br>
        <input type="password" class="input-block-level" placeholder="Password" name="password" /></br>
        <label class="checkbox">
          <input type="checkbox" value="remember-me"> Remember me
        </label>

        <button class="btn btn-large btn-primary" type="submit">Sign in</button>
        <a class="btn btn-large btn-inverse" href="register.html">Register</a>
      </form>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap-1/js/bootstrap.min.js"></script>

  </body>
</html>
