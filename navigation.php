<?php
  session_start();
?>
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->


<?php
            if(isset($_SESSION['login_user']))
            {?>
<section class="header">

<a href="home.php" class="logo">travel.</a>

<nav class="navbar">
   <a href="home.php">home</a>
   <a href="about.php">about</a>
   <a href="package.php">package</a>

     
      <a href="book.php">book</a>
      <a href="logout.php">logout</a>
   </nav>
   
            </section>
              <?php
            }
            else
            {   ?>
            <section class="header">

<a href="home.php" class="logo">travel.</a>

<nav class="navbar">
   <a href="home.php">home</a>
   <a href="about.php">about</a>
   <a href="package.php">package</a>
     
     <a href="text.php">Login</a>
  </nav>

            </section>
                <?php
            }
          ?>
          </body>