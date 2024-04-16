<?php
session_start();

    include('connection.php');
    if (isset($_POST['validate'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

         $res = $conn->prepare("SELECT * FROM users WHERE email = ?");
         $res->bind_param("s", $email);
         $res->execute();
         $result = $res->get_result();

         if($result->num_rows == 1){
            $user = $result->fetch_assoc();
         if(md5($password) != $user['password']){
            $_SESSION['email'] = $email;
            header("Location: form.php");
            exit; 
         }  
         else{ 
             echo  '<script>
                         window.location.href = "index.php";
                         alert("Login failed. Invalid username or password!")
                     </script>'; 
         }
        } 
        else{
            echo  '<script>
                         window.location.href = "index.php";
                         alert("Login failed. Invalid username or password!")
                     </script>';
        }
}

     if (isset($_POST['record'])) {
         $email = $_POST['email'];
         $password = $_POST['password'];

         $enc_password = md5($password);
         $conn->query("insert into users values('$email','$enc_password')");
     }
    
    ?>

    