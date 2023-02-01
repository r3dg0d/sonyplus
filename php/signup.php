<!DOCTYPE html>
<html>
  <head>
    <style>
      body {
        background-color: #333;
        color: #00000;
        font-family: sans-serif;
      }

      .form-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding: 50px;
      }

      input[type="text"],
      input[type="email"],
      input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        box-sizing: border-box;
        border: none;
        border-bottom: 2px solid #fff;
        color: #00000;
        font-size: 16px;
      }

      input[type="submit"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        background-color: #fff;
        color: #333;
        font-size: 16px;
        cursor: pointer;
      }
    </style>
  </head>
  <body>
    <div class="form-container">
      <h1>Sign Up for Sony+</h1>
      <form action="signup.php" method="post">
        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="submit" value="Sign Up">
      </form>
    </div>
  </body>
</html>

<?php
  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Save the user data to a file
    $file = fopen('users.txt', 'a');
    fwrite($file, "$name,$email,$password\n");
    fclose($file);

    header('Location: ../index.html');
  }
?>
