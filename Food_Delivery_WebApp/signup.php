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
    <link rel="stylesheet" href="signup.css">
    <title>Create New Acoount</title>
</head>
<body>
    <div class="signup_form">
        <form action="" method="post">
            <div class="form_header">
                <h2>Sign Up</h2>
                <p>Fill This Form</p>
            </div>
            <div class="form_group">
                <label>Username</label>
                <input type="text" class="form_control" name="user_name" placeholder="Enter username" autocomplete="off" required>
            </div>
            <div class="form_group">
                <label>Password</label>
                <input type="password" class="form_control" name="user_pass" placeholder="Password" autocomplete="off" required>
            </div>
            <div class="form_group">
                <label>Email address</label>
                <input type="email" class="form_control" name="user_email" placeholder="Enter Your email" autocomplete="off" required>
            </div>
            <div class="form_group">
                <label>Country</label>
                <select class="form_control" name="user_country" required>

                    <option disabled="">Select a country</option>
                    <option>India</option>
                    <option>Usa</option>
                    <option>Israel</option>
                    <option>UAE</option>
                    <option>Russia</option>
                    <option>France</option>
                    <option>Germany</option>
                    
                </select>
            </div>
         <div class="form_group"> 
             <label>Gender</label>
             <select class="form_control" name="user_gender" required>
             <option disabled="">Select your Gender </option>
             <option>Male</option>
             <option>Female</option>
             <option>Others</option>
             </select>
          </div>
          <div class="form_control">
                <label  class="checkbox"> <input type="checkbox" required> I Accept The <a href="#">Term of Use</a> &amp;<a href="#">Privacy Policy</a></label>
          </div>
            <div class="from_group">
                <button type="submit" class="btn btn-primary btn-block btn-secondary" name="sign_up">Sign up</button>
            </div>
            <?php include("signup_user.php"); ?>
         </form>
        <div class="text_center small" style="color: #ffffff; ">Already Have an Account? <a href="signin.php">Sign in now</a></div>
    </div>
</body>
</html>