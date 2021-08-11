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
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/dcf-responsive-table-5.css">
</head>
<body>
    <div class="d-flex align-items-end flex-column">
        <h6 class="me-4 mt-2">
            <a href="home.php" class="me-2">Home</a>
            |
            <a href="userProfile.php" class="ms-2 me-2">Profile</a>
            |
            <a href="shop.php" class="ms-2 me-2">Shop</a>                
            |
            <a href="home.php?logout='1" class="ms-2">Logout</a>
        </h6>
    </div>
    <div class="d-flex align-items-center flex-column">
        <h1 class="mb-3">
            Hello, <?php echo($user['username']); ?>
        </h1>
        <h4 class="mb-3">Wallet Info:</h4>
        <table class="dcf-table dcf-table-responsive dcf-table-bordered dcf-w-100%" style="border: 2px solid black">
	        <tbody>
		        <tr>
			        <th class="dcf-txt-center" style="font-size: 18px;" scope="row">Total UC :</th>
			        <td class="dcf-txt-center" style="font-size: 18px;"><?php echo($user['total_uc']); ?></td>
		        </tr>
		        <tr>
			        <th class="dcf-txt-center" style="font-size: 18px;" scope="row">Spent UC :</th>
			        <td class="dcf-txt-center" style="font-size: 18px;"><?php echo($user['spent_uc']); ?></td>
		        </tr>
	        </tbody>
        </table>
        <a href="plans.php" type="button" class="btn btn-primary mt-4">Purchase UC</a>
    </div>
</body>
</html>
<?php }else {
    header('location: home.php');
} ?>