<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>PHP Request method</title>
   <style>
      *{
   font-size: 14px;
   font-family: montserrat, Helvetica, sans-serif;
   color: white;
   background-color: rgb(68, 68, 68);
   transition: 0.3s;
}

h1{
   font-size: 24px;
   font-weight: lighter;
   margin-bottom: 40px;
   color: yellow;
}

body{
   padding: 50px;
   display: flex;
   justify-content: center;
   align-items: center;
   flex-direction: column;
   text-align: center;
}

input{
   padding: 8px 12px;
   background-color: rgb(44, 44, 44);
   border: 1px solid rgba(255, 255, 255, 0);
   margin: 10px 0;
   margin-bottom: 40px;
   width: 300px;
}
input:focus-visible{
   outline: none;
   background-color: rgb(0, 0, 0);
}
input:focus{
   outline: none;
   background-color: rgb(0, 0, 0);
}
input:hover{
   background-color: rgb(23, 15, 53);
}

.submit-btn{
   background-color: rgb(255, 153, 0);
   padding: 10px;
   width: 50%;
   cursor: pointer;
}

.submit-btn:hover{
   background-color: rgb(255, 94, 0);
   width: 60%;
}
   </style>
</head>
<body>
   <h1>PHP Request method EXAMPLE</h1>
   <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   <label for="first-name">First Name</label><br>
   <input type="text" placeholder="type your first name here" name="first-name" id="first-name"><br>
   <label for="last-name">Last Name</label><br>
   <input type="text" placeholder="type your last name here" name="last-name" id="last-name"><br>
   <label for="e-id">Email</label><br>
   <input type="email" placeholder="type your Email ID here" name="email" id="e-id"><br>

   <input class="submit-btn" type="submit">
   </form>

   <?php
      if($_SERVER["REQUEST_METHOD"] == "POST"){
         $firstname = $_REQUEST['first-name'];
         if (empty($firstname)) {
            echo "*first name required <br>";
         } else {
            echo "$firstname <br>";
         }
      }
      if($_SERVER["REQUEST_METHOD"] == "POST"){
         $lastname = $_REQUEST['last-name'];
         if (empty($lastname)) {
            echo "*last name required <br>";
         } else {
            echo "$lastname <br>";
         }
      }
      if($_SERVER["REQUEST_METHOD"] == "POST"){
         $email = $_REQUEST['email'];
         if (empty($email)) {
            echo "*email required <br>";
         } else {
            echo "$email <br>";
         }
      }
   ?>
</body>
</html>
