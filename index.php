 <!DOCTYPE html>
 <html>

 <head>
     <?php include 'funcions.php' ?>
     <title>Html Document</title>
     <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="css/styles.css">
     
     <?php 
        $check = connect_db('user_data_base');
     ?>
     
 </head>

 <body class="container">
     <ul>
         <li><a href="index.php">Home</a></li>
         <li><a href="testing.php">News</a></li>
         <li><a href="#">Contact</a></li>
         <li><a href="#">About</a></li>
     </ul>
     <img src="P1000486-2.jpg">
     <h1 id="loginpagetitle">Product CRM System</h1>
     <hr>
     <div id="loginPanel">
         <h3>Log in</h3>
         <form method="post">
             <div class="form-group">
                 <label for="exampleInputEmail1">Email address</label>
                 <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
             </div>
             <div class="form-group">
                 <label for="exampleInputPassword1">Password</label>
                 <input type="password" name="password" class="form-control" id="exampleInputPassword1">
             </div>
             <button type="submit" name="button1" class="btn btn-primary">Log-in</button>
         </form>
     </div>
     <hr>
     <div>
         <?php
            $email = $conn->query("SELECT email FROM users");
        
            foreach ($email as $row){
            echo $row['email'];
            
            }
         ?>
     </div>
 </body>

 </html>
