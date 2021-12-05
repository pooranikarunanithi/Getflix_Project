
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="settings.css">
</head>
<body>
<div class="topnav" id="myTopnav">
<nav class="navbar navbar-expand p-0">
        <div class="container-fluid kRed fontWide text-light">
            <ul class="navbar-nav justify-content-between mx-5 py-3 navDesk">
                <li class="nav-item"> <a href="slideshow.php" class="nav-link kRed text-light navLink"> <img src="./images/logo-small.jpg" alt="" width="80" height="60"> </a></li>
              
            </ul>
    </div>
</nav><br>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-5 mx-auto">
                <div class="card">
                    <div class="card-header text-center bg-danger">
                        <h2>Settings</h2>
                        <p>You can modify your settings here </p>
                    </div>
                    <div class="card-body">
                    
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                     <div class="form-group">
                      <label for ="Privacy Statements" ><a href="privacystatements.php"> Privacy Statements</a> </label><br> <br>
                      <label for ="Plans And Pricing" ><a href="PlansAndPricing.php"> Plans And Pricing</a> </label><br><br>
                      <label for ="Plans And Pricing" ><a href="billing.php"> Billng methods</a> </label><br><br>
                             
            </div>    
            <div class="form-group">
                <label>Video Quality</label><br>
                <br>
                <input type="radio" id="html" name="fav_language" value="HTML">
                <label for="html">High</label><br><br>
                <input type="radio" id="css" name="fav_language" value="CSS">
                <label for="css">Standard</label><br><br>
                <button class="button1" onclick="location.href=''">submit</button>
                  
             </div> 
               
               
        </form>
    </div>
</body>
</html>