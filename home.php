<?php 
session_start();

// Logout
if (isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body style="background-image: linear-gradient(to right top, #d1f2e6, #c9f5dc, #c8f6ce, #ccf6bc, #d7f5a9, #d9f3a1, #dbf19a, #deef92, #d4ee95, #caed98, #c0ec9c, #b7eba0);>
    <div class="d-flex align-items-end flex-column">
        <h6 class="me-4 mt-2">
            <?php include("nav.php"); ?>
        </h6>
    </div>
    <div class="container">
    <div id="carousel" class="carousel slide" data-ride="carousel" data-interval="3500">
        <div class="carousel-inner">
            <div class="carousel-test"></div>

            <div class="carousel-item active">
                <img class="d-block w-100" src="images/ausStadium.jpg" alt="">
                <div class="carousel-overlay">
                    <div class="carousel-caption d-none d-md-block" >
                        <h2 class="py-2 text-left">Welcome</h2>
                        <p class="text-left" style="margin-bottom: 150px;">Hi There , Welcome to Fan enagement 2.0 . This is a fan website which is developed by a group of cricket enthusiasts . You can test your knowledge about your favorite player and earn some points if you are right about it . You can also buy you favorite merchandise. What are you waiting for ? Sign up now !  </p>
                        <p style="text-align: right !important;">Read More...</p>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="images/ausStadium.jpg" alt="">
                <div class="carousel-overlay">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="py-2 text-left">How It Works</h2>
                        <p class="text-left" style="margin-bottom: 250px;">You can play Cricket trivia to UC, you could also purchase UC directly from our store , redeem these UC to get exciting offeres of official merchandise </p>
                        <a href="plans.php" type="button" class="btn btn-primary">See Pricing</a>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="d-block w-100" src="images/ausStadium.jpg" alt="">
                <div class="carousel-overlay">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="py-2 text-left">About Us</h2>
                        <p class="text-left">Lorem ipsum dolor amet cornhole venmo knausgaard locavore listicle cray cloud bread poutine beard flannel irony flexitarian skateboard food truck. Pork belly enamel pin gluten-free blue bottle readymade jianbing thundercats prism, DIY mlkshk single-origin coffee jean shorts sustainable lo-fi. Before they sold out freegan subway tile migas, pug pabst PBRB. Succulents asymmetrical dreamcatcher cronut, kogi poke keytar humblebrag. Flannel fanny pack DIY iceland everyday carry. PBRB chicharrones pitchfork microdosing, raclette direct trade scenester swag artisan messenger bag air plant. Kogi polaroid mumblecore cardigan beard humblebrag poke neutra tilde slow-carb snackwave art party.</p>
                        <p style="text-align: right !important;">Read More...</p>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">
                <img class="d-block w-100" src="images/ausStadium.jpg" alt="">
                <div class="carousel-overlay">
                    <div class="carousel-caption d-none d-md-block">
                        <h2 class="py-2 text-left">Testimonials</h2>
                        <p class="text-left">Lorem ipsum dolor amet cornhole venmo knausgaard locavore listicle cray cloud bread poutine beard flannel irony flexitarian skateboard food truck. Pork belly enamel pin gluten-free blue bottle readymade jianbing thundercats prism, DIY mlkshk single-origin coffee jean shorts sustainable lo-fi. Before they sold out freegan subway tile migas, pug pabst PBRB. Succulents asymmetrical dreamcatcher cronut, kogi poke keytar humblebrag. Flannel fanny pack DIY iceland everyday carry. PBRB chicharrones pitchfork microdosing, raclette direct trade scenester swag artisan messenger bag air plant. Kogi polaroid mumblecore cardigan beard humblebrag poke neutra tilde slow-carb snackwave art party.</p>
                        <p style="text-align: right !important;">Read More...</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-panel">
            <ol class="carousel-indicators">
                <li data-target="#carousel" data-slide-to="0" class="active"></li>
                <li data-target="#carousel" data-slide-to="1"></li>
                <li data-target="#carousel" data-slide-to="2"></li>
                <li data-target="#carousel" data-slide-to="3"></li>
            </ol>

            <a class="carousel-control-prev align-items-end" href="#carousel" role="button" data-slide="prev">
                <span class="mb-4"><i class="fa fa-angle-left fa-3x"></i></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next align-items-end" href="#carousel" role="button" data-slide="next">
                <span class="mb-4"><i class="fa fa-angle-right fa-3x"></i></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>
    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>