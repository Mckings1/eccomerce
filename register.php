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
                    <li><a href="#">Login/Register</a> </li>
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
            <h3 class="text-center text-white mb-3">Kindly fill the registration form below</h3>

            <span class="loginBtn text-center">
                <p class="text-white">Already have an account? <button class="btn-light p-1 w-25 rounded"><a href="login.php" class="text-decoration-none text-black"> Login here</a> </button></p>
            </span> 
               <form action="bckendRegister.php" method="POST">
                
                    <label class="text-white">First Name</label>
                    <input class="p-1 mb-3 w-100 rounded " type="text" placeholder="enter your First Name" name="firstName" width="100px" required> <br>
                        
                    <label class="text-white">Last Name</label>
                    <input class="p-1 mb-3 w-100 rounded" type="text" placeholder="enter your Last Name" name="lastName" width="100px" required><br>
                    
                    <label class="text-white mb-3">Gender</label>
                    <input class="p-1 mb-3 w-100 rounded " type="text" name="gender" placeholder="male or female" required> <br>
                    
                    <label class="text-white">Phone Number</label>
                    <input class="p-1 mb-3 w-100 rounded" type="number" placeholder="enter your Phone Number" name="phoneNumber"width="100px" required><br>

                    <label class="text-white">Email</label> 
                    <input class="p-1 mb-3  w-100 rounded" type="text" placeholder="enter your Email" name="email" width="100px" required> <br>
                    
                    <label class="text-white">Password</label>
                    <input class="p-1 mb-3 w-100 rounded" type="password" placeholder="enter your Password" name="password" width="100px" required><br>
                    <button class="p-1 rounded btn-light w-25 mb-2" name="submit" type="submit" value="submit" >submit</button> 

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