<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register & Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="loginregister.css">
</head>
<body>
    <div class="container" id="signup" style="display:none;">
      <h1 class="form-title">Sign Up</h1>
      <form method="post" action="register.php" id="registerForm">
        <div class="input-group">
           <i class="fas fa-user"></i>
           <input type="text" name="fName" id="fName" placeholder="First Name" required>
           
        </div>
        <div class="input-group">
            <i class="fas fa-user"></i>
            <input type="text" name="lName" id="lName" placeholder="Last Name" required>
            
        </div>
        <div class="input-group">
            <i class="fas fa-envelope"></i>
            <input type="email" name="email" id="email" placeholder="Email" required>
            
        </div>
        <div class="input-group">
            <i class="fas fa-lock"></i>
            <input type="password" name="password" id="password" placeholder="Password" required>
            
        </div>
        <br>
       <input type="submit" class="btn" value="Sign Up" name="signUp">
      </form>
      <br>
        <p class="or">
          ----------or----------
        </p>
        <div class="gfb">
         <img src="images/goggle.png" alt="Google">
         <img src="images/facebook.jfif" alt="Facebook">
        </div>
      <div class="links">
        <p>Already Have Account ?</p>
        <button id="signInButton">Sign In</button>
      </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
          <div class="input-group">
              <i class="fas fa-envelope"></i>
              <input type="email" name="email" id="email" placeholder="Email" required>
              
          </div>
          <div class="input-group">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" id="password" placeholder="Password" required>
              
          </div><br>
          <p class="recover">
            <a href="#">Recover Password?</a>
          </p><br>
         <input type="submit" class="btn" value="Sign In" name="signIn">
        </form>
        <br>
        <p class="or">
          ----------or----------
        </p>
        <div class="gfb">
         <img src="images/goggle.png" alt="Google">
         <img src="images/facebook.jfif" alt="Facebook">
        </div>
        <div class="links">
          <p>Don't have account yet?</p>
          <button id="signUpButton">Sign Up</button>
        </div>
      </div>
      <script src="login.js"></script>
      <script>
          document.getElementById('registerForm').addEventListener('submit', function(event) {
            var firstNameInput = document.getElementById('fName');
            var lastNameInput = document.getElementById('lName');

            // Regular expression to check if the input contains only letters
            var lettersRegex = /^[a-zA-Z]+$/;

            // Check if the first name contains only letters
            if (!lettersRegex.test(firstNameInput.value)) {
                alert('First name should contain only letters');
                event.preventDefault(); // Prevent form submission
            }

            // Check if the last name contains only letters
            if (!lettersRegex.test(lastNameInput.value)) {
                alert('Last name should contain only letters');
                event.preventDefault(); // Prevent form submission
            }
            
          });
      </script>
</body>
</html>
