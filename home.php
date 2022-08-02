<?php
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])){

?>


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
            <li> <a href="#"><?php echo $_SESSION['name']; ?></a></li>
            <div class="navbutton ">
                <a href="#" class="cssd">Admin</a>

                <div class="dropdown als">
                    <div class="navbutton">
                        <a href="product.html" class="gh">users</a>
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
            <li> <a href="logout.php">sign out</a></li>
        </ul>
        </div>
        </nav>
  </header>
  <section>
    <h1 class="era">Latest products</h1>
    <table>
        <tr>
          <td><img src="airpods.jpg" alt="airpods"  style="display:block;" width=" 100%px" height="100%"> 
        <div class="sub"><p>Airpods Wireless Bluetooth Headphones</p></div>
        <div class="sub"> 1 reviews</div>
        <div class="sub sab"> 929.00 RWF</div>
        </td>
          <td><img src="alexa.jpg" alt="airpods" style="display:block;" width="100%" height="100%" >
            <div class="sub"><p>Amazon Echo Dot 3rd Genration </p></div>
            <div class="sub"> 1 reviews</div>
            <div class="sub sab">599.99 RWF</div>
        </td>
          <td><img src="camera.jpg" alt="airpods" style="display:block;" width="100%" height=100%">
            <div class="sub"><p> Cannon Eos 80D DSRL Camera</p></div>
            <div class="sub"> 2 reviews</div>
            <div class="sub sab"> 399.99 RWF</div>
        </td>
          
        </tr>
        <tr>
          <td><img src="mouse.jpg" alt="airpods" style="display:block;" width="100%" height=100%">
            <div class="sub"><p>Logistics G-Series Gaming Mouse</p></div>
            <div class="sub"> 5 reviews</div>
            <div class="sub sab"> 929.00 RWF</div>
        </td>
          <td><img src="phone.jpg" alt="airpods" style="display:block;" width="100%" height=100%">
            <div class="sub"><p>iphone 11 pro 256GB Memory</p></div>
            <div class="sub"> 3 reviews</div>
            <div class="sub sab"> 88.99 RWF</div>
        </td>
          <td><img src="playstation.jpg" alt="airpods" style="display:block;" width="100%" height=100%">
            <div class="sub"><p>Sony Playstation 4 Pro White Version</p></div>
            <div class="sub"> 1 reviews</div>
            <div class="sub sab">29.99 RWF</div>
        </td>
        </tr>
      </table>
      <!-- <div class="cards">
        <div class="card1">
            <a href="#"></a>
    </div>
    <div class="card2">
        <a href="#"></a>
        </div>

        <div class="card3">
                <a href="#"> </a>   
        </div>
</div> -->
  </section>
</body>
</html>

<?php
}else {
    header("Location: index.php");
    exit(); 
}
?>