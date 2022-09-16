<?php
    session_start();
    if (isset($_SESSION['userDetails'])) {
        $userDetails = $_SESSION['userDetails'];
    }else{
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
    <header>
        <nav class=" navbar">
           <a href="index.html"> <img class="logo col-3 col-sm-4 col-lg-4" src="img/shunamiteLogo-removebg-preview.png" width="100%" alt=""></a>
            <input class="searchbarIcon col-5" type="search" value="" autocomplete="off" placeholder= "Keyword here..." name="search">
            <span class="col-2 "><img class="p-logo" src="img/profileLogo.png" alt=""> 
                <ul>
                    <li><a href=""> <?php echo $userDetails['firstName'];?></a> </li>
                    <li><a href="logout.php"> Log Out</a> </li>
                </ul>
            </span>   
            
            <span class="">
                    <p><a href="sellersAcct.php" class="text-decoration-none text-white"> Sellers <br> Account</a></p>
            </span>

            <span class="col-2 span-cart"> <img class="cart-logo" src="img/cartLogo-removebg-preview.png" alt="">
                <ul>
                    <li><a href="">My cart</a> </li>
                    <li class="items_carts"> <a href="">‎₦0.00</a>  </li>
                </ul>
            </span>
        </nav>


    </header>

<section class="row menus">
            <ul>
                <li><a href="">MEN</a>  </li>           
                <li><a href="">WOMEN </a> </li>
                <li><a href="">CLOTHING</a> </li>
                <li><a href="">WATCHES</a> </li>
                <li><a href="">BAGS | BELT | ACCESSORIES</a> </li>
                <li><a href="">SALES</a> </li>
                <li><a href="">BRANDS</a> </li>
                <li><a href="">SELL ON SHOELAYERS</a> </li>

            </ul>
</section>

<section class="sellers-sec p-2">
    WELCOME <?php  echo $userDetails['firstName']; ?> <br>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input class="w-100 mb-2 p-1" type="text" placeholder="name" required> <br>
        <input class="w-100 mb-2 p-1" type="number" placeholder="quantity"> <br>
        <input class="w-100 mb-2 p-1" type="text" placeholder="description"> <br>
        <input class="w-100 mb-2 p-1" type="text" placeholder="price">  <br>
        <input class="w-100 mb-2 p-1" type="file" name="sellers-pics"> <br>
        <button type="submit" name="submit" class="btn btn-dark btn-sm">Upload File</button>
    </form>

</section>
 
<section class="homeProducts">
            <h5> NEW PRODUCT</h5>

            <div class="row products-lists">

                <div class="col-2 card text-center" style="width: 14rem;">
                    <img class="card-img-top" src="img/ALL OUT ROVE2-270x270.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">LACE UP SNEAKERS</h6>
                    <p class="card-text">₦37,500</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>

                <div class=" col-2 card text-center" style="width: 14rem;">
                    <img class="card-img-top" src="img/ALIGN-270x270.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">LACE UP SNEAKERS</h6>
                    <p class="card-text">₦37,500</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>

                <div class=" col-2 card text-center" style="width: 14rem;">
                    <img class="card-img-top" src="img/camberwell shelter-300x300.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">LACE UP SNEAKERS</h6>
                    <p class="card-text">₦37,500</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>

                <div class=" col-2 card text-center" style="width: 14rem;">
                    <img class="card-img-top" src="img/CAPRA BOLT MID GTX-300x300.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">LACE UP SNEAKERS</h6>
                    <p class="card-text">₦37,500</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>
            </div>

            <div class="row products-lists">

                <div class="col-2 card text-center" style="width: 14rem;">
                    <img class="card-img-top" src="img/DECISIVE-300x300.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">LACE UP SNEAKERS</h6>
                    <p class="card-text">₦87,500</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>

                <div class=" col-2 card text-center" style="width: 14rem;">
                    <img class="card-img-top" src="img/DECISIVE4-300x300.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">LACE UP SNEAKERS</h6>
                    <p class="card-text">₦55,500</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>

                <div class=" col-2 card text-center" style="width: 14rem;">
                    <img class="card-img-top" src="img/ELECTROPLATE LEATHER-300x300.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">LACE UP SNEAKERS</h6>
                    <p class="card-text">₦37,500</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>

                <div class=" col-2 card text-center" style="width: 14rem;">
                    <img class="card-img-top" src="img/forest bound-300x300.jpg" alt="Card image cap">
                    <div class="card-body">
                    <h6 class="card-title">LACE UP SNEAKERS</h6>
                    <p class="card-text">₦47,500</p>
                    <a href="#" class="btn btn-primary">Add to cart</a>
                    </div>
                </div>

            </div>
</section>

<footer class="foot row">

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
    </footer>
</body>
</html>