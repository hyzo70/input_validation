<?php 
    include("connection.php");
    include("login.php");
    ?>
    
<html>
    <head>
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="index.css">
        <style>/* index.css */

/* Basic styles */
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f4f4f4;
}
  
  /* Login form container */
  #form {
    width: 80%;
  margin: 0 auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
  }
  
  /* Login form heading */
  h1 {
    text-align: center;
    margin-top: 20px;
  }
  
  /* Labels */
  label {
    display: block;
    margin-bottom: 5px;
  }
  
  /* Input fields */
  input[type="email"],
  input[type="password"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 2px dashed #ccc; /* Change the border style and width */
    border-radius: 3px;
    box-sizing: border-box;
  }
  
  /* Submit button */
  input[type="submit"] {
    background-color: #007bff;
    border-color: #007bff;
    color: #fff;
    padding: 8px 16px;
    border-radius: 4px;
    cursor: pointer;
    width: 100%; /* Make submit button full width */
  }
  
  /* Submit button hover effect */
  input[type="submit"]:hover {
    background-color: #0069d9;
    border-color: #0062cc;
  }
  </style>
    </head>
    <body>
        
        <div id="form">
            <h1>Login Form</h1>
            <form name="form" action="login.php" onsubmit="isvalid()" method="POST" autocomplete="off">
                <label>Email: </label>
                <input type="email" id="email" name="email" pattern="^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$" required></br></br>
                <label>Password: </label>
                <input type="password" id="password" name="password" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$" required></br></br>
                <input type="submit" id="btn" value="Login" name="validate">
            </form>
        </div>
        <script src="index.js"></script>
    </body>
</html>