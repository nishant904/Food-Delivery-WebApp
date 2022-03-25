<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts,googleapis.com/css?family=Roboto|Courgette|Pacifico:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="signin.css">
    <title>Login to your account</title>
</head>
<body>
    <div class="signin_form" >
        <form action="" method="post">
            <div class="form_header">
                <h2>Please Sign In</h2>
                <p>Login To Proceed</p>
            </div>
            <div class="form_group" >
                <label>Email</label><br>
                <input type="email" class="form_control" name="email" placeholder="someone@gmail.com" autocomplete="off" required >
            </div>
            <div class="form_group">
                <label>Password</label><br>
                <input type="password" class="form_control" name="pass" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
            
            <div class="from_group">
                <button type="submit" class="btn btn-primary btn-block btn-lg" name="sign_in">Sign in</button>

            </div>
            <?php include("signin_user.php"); ?>        

        </form>
        <div class="text_center small" style="color: #ffffff; ">Don't have an account? <a href="signup.php">Create now</a></div>
    </div>
</body>
</html>
