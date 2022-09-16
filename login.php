<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <header>
        <nav class="navbar">
           <a href="index.html"> <img class="logo col-3 col-sm-4 col-lg-4" src="img/shunamiteLogo-removebg-preview.png" width="100%" alt=""></a>
            <input class="searchbarIcon col-5" type="search" value="" autocomplete="off" placeholder= "Keyword here..." name="search">
            <span class="col-2 "><img class="p-logo" src="img/profileLogo.png" alt=""> 
                <ul>
                    <li><a href="">My Account</a> </li>
                    <li><a href="register.php">Login/Register</a> </li>
                </ul>
            </span>         
            <span class="col-2 span-cart"> <img class="cart-logo" src="img/cartLogo-removebg-preview.png" alt="">
                <ul>
                    <li><a href="">My cart</a> </li>
                    <li class="items_carts"> <a href="">‎₦0.00</a>  </li>
                </ul>
            </span>
        </nav>


    </header>

<section class="registerBckgrd">
        <div class="col-3"></div>

        <div class="register">
                <?php
                        session_start();
                        require "dbcrend.php";
                        if (isset($_POST['submit'])) {
                        $email = $_POST['email'];
                        $password = $_POST['password'];
                                        $query = "SELECT * FROM users WHERE email = '$email'";
                                        $queryDb = $connectDb->query($query);
                        if ($queryDb->num_rows > 0) {
                           $userDetails = $queryDb->fetch_assoc();
                        //    print_r($userDetails);
                           $pass = $userDetails['password'];
                           $verify = password_verify($password, $pass);
                                echo $verify;
                           if ($verify) {
                                $_SESSION["userDetails"] = $userDetails;
                                header("Location: dashboard.php");
                           } else {
                                echo "<div class='alert alert-danger text-center'>Incorrect Password.</div>";
                           }
                        } else {
                            echo "<div class='alert alert-danger text-center'>Invalid Login Details.</div>";
                        }
                    }

                ?>
            <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
                <h3 class="text-center mb-3 text-white">Welcome!!!</h3>

                <span class="loginBtn text-center">
                    <p class="text-white">Doesn't have an account yet? <button class="btn-light p-1 w-25 rounded"><a href="register.php" class="text-decoration-none text-black"> Sign up</a> </button></p>
                </span>
                    
                
                <label class="text-white">Email</label> 
                <input class="p-1 mb-2  w-100 rounded" type="text"name='email' placeholder="enter your Email" width="100px" required> <br><br>
                
                <label class="text-white">Password</label>
                <input class="p-1 mb-3 w-100 rounded" type="password" name='password'placeholder="enter your Password" width="100px"> <br>
                            
                <!-- <button class="p-1 rounded btn-light w-25 mb-2" name="login" type="login" value="login"> Log In</button> -->
                <input class="btn btn-light w-25" name="submit" type="submit" value="Submit">    
            </form>
        </div>

        <div class="col-3"></div>
        
    </section>

     <footer class="foot row">

        <!-- <div class="col-2"></div> -->

        <div class="col-4 secdiv1">
            <h4><u> OUR CONTACT</u></h4>
            <ul>
                <li>Shunamite.ng</li>
                <li>15 Alko street, wakajaye Iyana church</li>             
                <li>Phone: 08107087430</li>
                <li> Email: sales@shunamite.ng</li>
            </ul>
        </div>
        <div class="col-4 secdiv2">
            <h4><u> OUR COMPANY</u></h4>
            <ul>
                <li>Shipping and Returns</li>
                <li>About us</li>             
                <li>Contact us</li>
                <li> Sitemap</li>
            </ul>
        </div>
        <div class="col-4 secdiv3">
            <h4><u> YOUR ACCOUNT</u></h4>
            <ul>
                <li>Personal info</li>
                <li>Orders</li>             
                <li>Credit slips</li>
                <li> Addresses</li>
                
                
                
            </ul>
        </div>
        <!-- <div class="col-2"></div> -->

    </footer>



</body>
</html>