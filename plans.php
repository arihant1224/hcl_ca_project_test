<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pricing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="d-flex align-items-end flex-column">
        <h6 class="me-4 mt-2">
            <?php if (isset($_SESSION['email'])){ ?>
                <a href="home.php" class="me-2">Home</a>
                |
                <a href="userProfile.php" class="ms-2 me-2">Profile</a>
                |
                <a href="shop.php" class="ms-2 me-2">Shop</a>                
                |
                <a href="home.php?logout='1" class="ms-2">Logout</a>
            <?php }else { ?>
                <a href="home.php" class="me-2">Home</a>
                |
                <a href="shop.php" class="ms-2 me-2">Shop</a>
                |
                <a href="login.php" class="ms-2">Login</a>
            <?php } ?>
        </h6>
    </div>
    <div class="d-flex align-items-center flex-column">
        <h1 class="mb-5">Purchase UC</h1>
    </div>
    <div class="d-flex justify-content-between">
        <div class="plan-card d-flex align-items-center flex-column me-auto ms-auto">
            <img src="images/uc-1.jpeg" class="plan-card-img mb-2" />
            <span class="uc-count mb-2">60 UC</span>
            <?php if (isset($_SESSION['email'])){ ?>
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#modal-1" class="btn btn-warning buy-btn">$2.31</a>
            <?php }else { ?>
                <a href="login.php" type="button" class="btn btn-warning buy-btn-2">Login to Buy</a>
            <?php } ?>
        </div>
        <div class="plan-card d-flex align-items-center flex-column me-auto ms-auto">
            <img src="images/uc-1.jpeg" class="plan-card-img mb-2" />
            <span class="uc-count mb-2">400 UC</span>
            <?php if (isset($_SESSION['email'])){ ?>
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#modal-2" class="btn btn-warning buy-btn">$6.47</a>
            <?php }else { ?>
                <a href="login.php" type="button" class="btn btn-warning buy-btn-2">Login to Buy</a>
            <?php } ?>
        </div>
        <div class="plan-card d-flex align-items-center flex-column me-auto ms-auto">
            <img src="images/uc-3.jpeg" class="plan-card-img mb-2" />
            <span class="uc-count mb-2">1,500 UC</span>
            <?php if (isset($_SESSION['email'])){ ?>
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#modal-3" class="btn btn-warning buy-btn">$25.66</a>
            <?php }else { ?>
                <a href="login.php" type="button" class="btn btn-warning buy-btn-2">Login to Buy</a>
            <?php } ?>
        </div>
        <div class="plan-card d-flex align-items-center flex-column me-auto ms-auto">
            <img src="images/uc-3.jpeg" class="plan-card-img mb-2" />
            <span class="uc-count mb-2">6,000 UC</span>
            <?php if (isset($_SESSION['email'])){ ?>
                <a href="#" type="button" data-bs-toggle="modal" data-bs-target="#modal-4" class="btn btn-warning buy-btn">$99.99</a>
            <?php }else { ?>
                <a href="login.php" type="button" class="btn btn-warning buy-btn-2">Login to Buy</a>
            <?php } ?>
        </div>
    </div>
    
    <!-- Modal-1 -->
    <div class="modal fade" id="modal-1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Price Breakup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table cellpadding="10px">
                        <tr>
                            <td>You will get:</td>
                            <td>60 UC</td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td>$2.31</td>
                        </tr>
                    </table>
                    <div style="text-align: center; margin-top: 10px;">
                        <a href="payment.php?card=1" type="button" class="btn btn-warning">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal-2 -->
    <div class="modal fade" id="modal-2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Price Breakup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table cellpadding="10px">
                        <tr>
                            <td>You will get:</td>
                            <td>400 UC</td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td>$6.47</td>
                        </tr>
                    </table>
                    <div style="text-align: center; margin-top: 10px;">
                        <a href="payment.php?card=2" type="button" class="btn btn-warning">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal-3 -->
    <div class="modal fade" id="modal-3" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Price Breakup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table cellpadding="10px">
                        <tr>
                            <td>You will get:</td>
                            <td>1,500 UC</td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td>$25.66</td>
                        </tr>
                    </table>
                    <div style="text-align: center; margin-top: 10px;">
                        <a href="payment.php?card=3" type="button" class="btn btn-warning">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal-4 -->
    <div class="modal fade" id="modal-4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Price Breakup</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table cellpadding="10px">
                        <tr>
                            <td>You will get:</td>
                            <td>6,000 UC</td>
                        </tr>
                        <tr>
                            <td>Price:</td>
                            <td>$99.99</td>
                        </tr>
                    </table>
                    <div style="text-align: center; margin-top: 10px;">
                        <a href="payment.php?card=4" type="button" class="btn btn-warning">Pay Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</body>
</html>