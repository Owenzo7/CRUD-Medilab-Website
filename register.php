<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Easiest Way to Add Input Masks to Your Forms</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>



<!-- Header Starts -->





<!-- Header ends -->
<!-- 
    Register form starts
 -->
    <div class="registration-form create-account">
        
        <form action="regprocess.php" method="post">
            <div class="form-icon">
                <span><i class="icon icon-user"></i></span>
            </div>
            <div class="form-group">
                <input type="text" name="username" class="form-control item" id="username" placeholder="Username">
            </div>
            <div class="form-group">
                <input type="password" name = "password" class="form-control item" id="password" placeholder="Password">
            </div>


            <div class="form-group">
                  
                    <input type="password" name="conpassword" class="form-control item" id="conpassword" placeholder="Confirm Password" required="" >
                  </div>

        
        
            <div class="form-group">
                <label>Select your role</label>
                <select name="role">

                <option value="">Select Your Role</option>
                <option value ="Admin">Admin</option>
                <option value = "User">User</option>
                </select>
            </div>

            <div class="form-group">
                <button type="submit" name = "submit" class="btn btn-block bg-primary">Create Account</button>
            </div>


            <span><p>Already have an account?</p> <a href="login.php"><p>Click here</p></a></span>
        </form>

        <!-- Register form ends. -->
        <div class="social-media">
            <h5>Sign up with social media</h5>
            <div class="social-icons">
                <a href="#"><i class="icon-social-facebook" title="Facebook"></i></a>
                <a href="#"><i class="icon-social-google" title="Google"></i></a>
                <a href="#"><i class="icon-social-twitter" title="Twitter"></i></a>
            </div>
        </div>
    </div>
    
    <script src="assets/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
