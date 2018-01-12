<?php
    session_start();
    if (isset($_SESSION['username'])) {
        header("./index.html");
   }
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/login.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/login_script.js"></script>
</head>
<body background-image="https://giphy.com/gifs/VxbP9tLeKzazm/html5">
<!-- Button to open the modal login form -->
<h1 align="center">Recommend Movie for You!</h2>
<div class = "main_container">
  <div class = "button_container">
<span class="left">
<button class = "button1" onclick="document.getElementById('id01').style.display='block'">Login</button>
</span>
</div>
<div class = "button_container">
<span class="middle">
<button class = "button1" onclick="document.getElementById('id02').style.display='block'">Sign up</button>
</span>
</div>
<div class = "button_container">
<span class="right">
<button class = "button1" onclick="location.href='user_input.php'">Login as one-time user</button>
</span>
</div>
</div>
<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" 
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate">
    <div class="container">
      <label><b>Username</b></label>
      <input type="text" id="myusername" placeholder="Enter Username" name="myusername" required>

      <label><b>Password</b></label>
      <input id="mypassword" type="password" placeholder="Enter Password" name="mypassword" required>  

      <div id="message"></div>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button id = "login_submit" type="submit" class = "loginbtn">Login</button>
      </div>
    </div>
  </form>
</div>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form id = "sign_up_form" class="modal-content animate">
    <div class="container">
      <label><b>Username</b></label>
      <input id = "s_username" type="text" placeholder="Enter username" name="s_username" required>

      <label><b>Password</b></label>
      <input id = "s_password_1" type="password" placeholder="Enter Password" name="s_password_1" required>

      <label><b>Repeat Password</b></label>
      <input id = "s_password_2" type="password" placeholder="Repeat Password" name="s_password_2" required>

      <label><b>Email</b></label>
      <input id = "s_email" type="text" placeholder="email" name="s_email" required>
      <p>By creating an account you agree to our <a href="./terms.txt">Terms & Privacy</a>.</p>
      <div id="message_2"></div>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="cancelbtn">Cancel</button>
        <button id = "signup_button" type="submit" class="signupbtn">Sign Up</button>
      </div>
    </div>
  </form>
</div>
<div style="position: relative;background-color: blue; width: 100%; height:3%;">    

    <div style="position: absolute; bottom: 0px; background-color: Transparent;">
    <p>Source code for this website can be found here <a href="https://github.com/jmyu1994/frontend-for-a-movie-recommendation-system">here</a>.</p>
    </div>
</div>
</body>
</html>