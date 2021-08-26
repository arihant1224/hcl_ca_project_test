<?php
session_start();

// connect to the database
include("db.php");

$email = $_SESSION['email'];
$user_query = "SELECT * FROM users WHERE email = '$email'";
$user_result = mysqli_query($conn, $user_query);
$user = mysqli_fetch_assoc($user_result);

if (isset($_SESSION['email'])){ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dcf-responsive-table-5.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">
    <style type="text/css">
html {
  font-family: sans-serif;
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.text-center {
  text-align: center;
}

.color-white {
  color: #fff;
}

.box-container {
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  padding: 35px 15px;
  width: 100%;
}

@media screen and (min-width:1380px) {
  .box-container {
    flex-direction: row
  }
}

.box-item {
  position: relative;
  -webkit-backface-visibility: hidden;
  width: 415px;
  margin-bottom: 35px;
  max-width: 100%;
}

.flip-box {
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
  -webkit-transform-style: preserve-3d;
  perspective: 1000px;
  -webkit-perspective: 1000px;
}

.flip-box-front,
.flip-box-back {
  background-size: cover;
  background-position: center;
  border-radius: 8px;
  min-height: 475px;
  -ms-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
  transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
  -webkit-transition: transform 0.7s cubic-bezier(.4,.2,.2,1);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-box-front {
  -ms-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-front {
  -ms-transform: rotateY(-180deg);
  -webkit-transform: rotateY(-180deg);
  transform: rotateY(-180deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box-back {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  
  -ms-transform: rotateY(180deg);
  -webkit-transform: rotateY(180deg);
  transform: rotateY(180deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box:hover .flip-box-back {
  -ms-transform: rotateY(0deg);
  -webkit-transform: rotateY(0deg);
  transform: rotateY(0deg);
  -webkit-transform-style: preserve-3d;
  -ms-transform-style: preserve-3d;
  transform-style: preserve-3d;
}

.flip-box .inner {
  position: absolute;
  left: 0;
  width: 100%;
  padding: 60px;
  outline: 1px solid transparent;
  -webkit-perspective: inherit;
  perspective: inherit;
  z-index: 2;
  
  transform: translateY(-50%) translateZ(60px) scale(.94);
  -webkit-transform: translateY(-50%) translateZ(60px) scale(.94);
  -ms-transform: translateY(-50%) translateZ(60px) scale(.94);
  top: 50%;
}

.flip-box-header {
  font-size: 34px;
 
}

.flip-box p {
  font-size: 20px;
  line-height: 1.5em;
}

.flip-box-img {
  margin-top: 25px;
}

.flip-box-button {
  background-color: transparent;
  border: 2px solid #fff;
  border-radius: 2px;
  color: #fff;
  cursor: pointer;
  font-size: 20px;
  font-weight: bold;
  margin-top: 25px;
  padding: 15px 20px;
  text-transform: uppercase;
}

.userheader {
    margin-top: 50px;
    text-align: center;
    color: white;
}


    </style>

</head>
<body style="background-image: linear-gradient(to right top, #d1f2e6, #c9f5dc, #c8f6ce, #ccf6bc, #d7f5a9, #d9f3a1, #dbf19a, #deef92, #d4ee95, #caed98, #c0ec9c, #b7eba0);">
   
    <div class="d-flex align-items-end flex-column">
        <h6 class="me-4 mt-2">
            <?php include("nav.php"); ?>
        </h6>
    </div>

    <h1 class="userheader">
            Hello, <?php echo($user['username']); ?>
    </h1>
    
   <div class="box-container">
    <div class="box-item">
    <div class="flip-box">
      <div class="flip-box-front text-center" style="background-image: url('./images/logo4.jpg');">
        <div class="inner color-white">
          <h3 class="flip-box-header">Your fan wallet</h3>
          <p>Please check your wallet balance </p>
          <img src="https://s25.postimg.cc/65hsttv9b/cta-arrow.png" alt="" class="flip-box-img">
        </div>
      </div>
      <div class="flip-box-back text-center" style="background-image: url('./images/logo4.jpg');">
        <div class="inner color-white">
          <h3 class="flip-box-header">Your balance</h3>
          <p>Total UC : <?php echo($user['total_uc']); ?></p>
          <p>Spent UC : <?php echo($user['spent_uc']); ?></p>
         <a class="flip-box-button" href="plans.php" type="button" class="btn btn-primary mt-4">Purchase UC</a>
        </div>
      </div>
    </div>
    </div>
</div>
</body>
</html>
<?php }else {
    header('location: home.php');
} ?>