<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/92ef305b13.js" crossorigin="anonymous"></script>
</head>

<?php
include 'dbcon.php';

if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con , $_POST['email']);
    $firstName = mysqli_real_escape_string($con , $_POST['firstName']);
    $lastName =mysqli_real_escape_string($con , $_POST['lastName']);
    $address = mysqli_real_escape_string($con , $_POST['address']);

    $insertquery = "insert into registration(email, firstName, lastName, address) VALUES('  $email', '$firstName', '$lastName', '$address')";
    $var=mysqli_query($con, $insertquery);
    if($var){
        ?>
    <script>
        alert("insertion sucess");
    </script>
    
        <?php
    }else{
        ?>
        <script>
            alert("insertion Failed");
        </script>
        
            <?php
    }
    
}

?>

<body>
    <div class="container">
        <div class="inner-container">
            <div class="content">
                <h1>Get Everything You Need<br>
                    For Creating WordPress<br>
                    Websites. </h1>
                <img src="./images/illustration.png" alt="" srcset="">
                <h3>All-in-one Multifunctional Subscribe<br>
                    Service Perfect for Launching All kinds of<br>
                    WordPress Projects!</h3>
            </div>
            <div class="Form">
                <h1>SUBSCRIBE AND GET<br>
                    YOUR BONUS!</h1>
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Email Address" id="">
                    <input type="text" name="firstName" placeholder="First Name">
                    <input type="text" name="lastName" placeholder="Last Name">
                    <input type="text" name="address" placeholder=" Address">
                    <button type="submit" name="submit">STAY UPDATED</button>

                </form>
                <div class="info">
                    <i class="fa-solid fa-lock"></i>
                    <p>Information will never be
                        shared with any third party.</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>