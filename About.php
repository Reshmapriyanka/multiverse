	<?php 
  session_start(); 
  
  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.php" class="logo"> <i class="fas fa-graduation-cap"></i> Multiverse </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="home.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="#">courses +</a>
                <ul>
                    <li><a href="course-1.php">course 01</a></li>
                    <li><a href="course-2.php">course 02</a></li>
                    <li><a href="course-3.php">course 03</a></li>
                </ul>
            </li>
            <li><a href="#">pages +</a>
                <ul>
                    <li><a href="teachers.php">teachers</a></li>
                    <li><a href="blog.php">blogs</a></li>
                </ul>
            </li>
            <li><a href="contact.php">contact</a></li>
            <li><a href="home.php?logout='1'" >logout</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<section class="heading">
    <h3>about us</h3>
    <p> <a href="home.php">home >></a> about </p>
</section>

<!-- about section starts  -->

<section class="about">

    <div class="image">
        <img src="images/about-img.png" alt="">
    </div>

    <div class="content">
        <h3>I will stay with you until you pass your exam.</h3>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id ducimus at maiores repellat aut debitis aliquam esse, quisquam nobis laborum velit voluptate excepturi obcaecati dignissimos omnis. Fugiat hic quod nobis?</p>
        <a href="course-1.php" class="btn">learn more</a>
    </div>

</section>
