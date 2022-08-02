<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style.css">
             <!-- Load icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet" type="text/css">
  <title>Document</title>
</head>
<body>
  <header>
    <nav>
        <div class="row">
           <h1><a href="#">cushy-mart</a></h1>

<!-- The form -->
<form class="example" action="#">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
        <ul class="main-nav">
           
            <li> <a href="#">Cart</a></li>
            <li> <a href="index.php">sign in</a></li>
        </ul>
        </div>
        </nav>
  </header>
  <section>
    <h1 class="era">sign up</h1>
  <form action="signup.php" class="login">
  
    
    <div> 
        <label for="username" class="apy">Name</label>
      </div>
    
      <div>
        <input type="text" name="username" class="apx" placeholder="Enter name" >
       </div>

       <div> 
       <label for="email" class="apy">Email address</label>
      </div>
        <div>
             
            <input type="email" name="email" id="email" placeholder="Enter email" class="apx" >
        </div>

        <div> 
        <label for="password_1" class="apy">Password</label>
      </div>

        <div>
            
            <input type="password" name="password_1" placeholder="Enter password" class="apx">
        </div>

        <div> 
        <label for="password_2" class="apy">Confirm Password</label>
      </div>
      
        <div>
          
            <input type="password" name="password_2" placeholder="confirm password" class="apx">
        </div>

        <!-- <input type="submit" value="REGISTER" class="signin"> -->
        <button type="submit" name="register" class="signin">REGISTER</button>
        <p>Have an account?<a href="index.php">Login</a></p>
  </form>
  </section>
 
</body>
</html>