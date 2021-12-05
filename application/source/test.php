<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="test.css">
    <title>Getflix - Home</title>
    <link rel="icon" href="./images/movie-theater.png" type="image/png" />
</head>
<body>

<nav class="container-fluid navbar navbar-expand p-0">
        <div class="container-fluid kRed fontWide text-light">
            <ul class="navbar-nav justify-content-between mx-5 py-3 navDesk">
            <li class="nav-item"> <a href="slideshow.php" class="nav-link kRed text-light navLink"> <img src="./images/logo-small.jpg" alt="" width="80" height="60"> </a></li>   
            <button class="button2" onclick="location.href='logout.php'">logout</button>
            <form  id="form">
            <input type="text" placeholder="Search" id="search" class="search">
            </form>
            </ul>
            <label id="lbl">
           <?php    
        if (!empty(@$_GET['loggedinuser']))
         {   
         echo "Welcome ".@$_GET['loggedinuser'];
         }
         ?>
         </label>
    </div>
   </div>
</nav><br>

           
        <div id="tags"></div>
        <div id="myNav" class="overlay">
        <!-- Button to close the overlay navigation -->
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

        <!-- Overlay content -->
        <div class="overlay-content" id="overlay-content"></div>

        <a href="javascript:void(0)" class="arrow left-arrow" id="left-arrow">&#8656;</a> 

        <a href="javascript:void(0)" class="arrow right-arrow" id="right-arrow" >&#8658;</a>

      </div>
    <main id="main"></main>
    <div class="pagination">
        <div class="page" id="prev">Previous Page</div>
        <div class="current" id="current">1</div>
        <div class="page" id="next">Next Page</div>

    </div>

    <script src="./test.js"></script>
</body>
</html>