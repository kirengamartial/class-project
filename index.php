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
           <h1>cushy-mart</h1>

<!-- The form -->
<form class="example" action="#">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
        <ul class="main-nav">
           
            <li> <a href="#">Cart</a></li>
            <li> <a href="#">name</a></li>
            <div class="navbutton ">
                <a href="#" class="cssd">Admin</a>

                <div class="dropdown als">
                    <div class="navbutton">
                        <a href="#" class="gh">users</a>
                    </div>
                    <div class="navbutton">
                        <a href="#" class="gh">Products</a>
                    </div>
                    <div class="navbutton als">
                        <a href="#" class="gh">orders
                        </a>
                    </div>
                </div>
            </div>
            <li> <a href="#">sign in</a></li>
        </ul>
        </div>
        </nav>
  </header>
  <section>
    <h1 class="era">sign in</h1>
  <form action="login.php" class="login" method="post">
    <?php if(isset($_GET['error'])){ ?>
      <p class="error"><?php echo $_GET['error']; ?></p>
     <?php } ?> 
        <div>
            <label for="name" class="apy">Name</label>
        </div>
        <div>
            <input type="name" name="name" id="name" placeholder="Enter name" class="apx">
        </div>
        <div>
            <label for="password" class="apy">Password</label>
        </div>
        <div>
            <input type="password" name="password" id="password" placeholder="Enter password" class="apx">
        </div>

        <input type="submit" value="SIGN IN" class="signin">
        <p>New customer?<a href="signup.php">Register</a></p>
  </form>
  </section>
</body>
</html>

