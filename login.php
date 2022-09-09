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
                    <li><a href="register.html">Login/Register</a> </li>
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

            <form action="">
                <h3 class="text-center mb-3 text-white">Welcome!!!</h3>

                <span class="loginBtn text-center">
                    <p class="text-white">Doesn't have an account yet? <button class="btn-light p-1 w-25 rounded"><a href="register.php" class="text-decoration-none text-black"> Sign up</a> </button></p>
                </span>
                    
                
                <p class="text-white">Email</p> 
                <input class="p-1 mb-2  w-100 rounded" type="text" placeholder="enter your Email" width="100px"> <br>
                
                <p class="text-white">Password</p>
                <input class="p-1 mb-3 w-100 rounded" type="password" placeholder="enter your Password" width="100px"> <br>
                            
                <button class="p-1 rounded btn-light w-25 mb-2">Log in</button> 
                
                
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