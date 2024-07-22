<?php
include 'connect.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="Stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
   
</head>
<body>
    <div class="containor">
        <div class="navigation">
             <nav>
                 <h2 class="logo">Green <span class="logo2">Star</span></h2>
                 <ul>
                     <li><a href="./index.php">Home</a></li>
                     <li><a href="index.php#About-us">About</a></li>
                     <li><a href="index.php#service">Service</a></li>
                     <li><a href="index.php#contact-us">Contact us</a></li>
                 </ul>
                 <div class="box">
                    <div class="cart-count">0</div>
                        <i class="fa fa-shopping-cart" id="cart-icon" aria-hidden="true" style="color: black;"></i>
                    </div>
             </nav>
         </div>
         

         <!-- cart system -->
         <div class="order-cart">
            <div class="cart-title">Cart items</div>
            <div class="cart-content">
                <div class="cart-item">
                    
                </div>
                <!--
                <div class="cart-box">
                    <img src="image/BURGERS/Double Decker Burger.png" class="cart-img" alt="">
                    <div class="detail-box">
                        <div class="cart-food-title">Special Dosai</div>
                        <div class="price-box">
                        <div class="cart-price">RS.42</div>
                        <div class="cart-amt">RS.42</div>
                    </div>
                    <input type="number" value="1" class="cart-quantity">
                    </div>
                    <ion-icon name="trash" class="cart-remove"></ion-icon>
                </div>
            -->

    
                <div class="total">
                    <div class="total-title">Total</div>
                    <div class="total-price">Rs.0</div>
                </div>
                <button class="btn-buy"> <a href="cart.php?id='.$row['Id'].'" style="text-decoration: none; color:#ffffff">Place Order</a></button>
                <ion-icon name="close" id="cart-close"></ion-icon>
            </div>
        </div>

         <!-- cart close-->

         <div class="all-banner">
            <div class="banner-01">
                <div class="ban-bgimg">
                    <img class="bgimg" src="./image/bacground01.jpg" alt="banner-baground">
                    <img class="ch-img" src="./image/ban-img2.png" alt="banner-item">
                    <img class="off50" src="./image/off50.png" alt="off-50%">
                </div>
                <h1 id="logtxt">Green <span>Star</span></h1>
                <div class="ban-txt">
                    <h3 id="b-h3">Super Delicious</h3>
                    <h1 id="b-h1">BURGER</h1>
                    <h3 id="dan-txt">Today's BestDeal</h3>
                  <!--  <button class="btn-01"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp; Order now</button> -->
                </div>         
            </div>
         </div>
    </div>


    
    <div class="contaion-2">
        <div class="said-bar">
            <div class="f-nav">
                <h2>Food Items</h2>
                <ul>
                    <li><a  href="#Chicken">Hot Crispy Chicken</a></li>
                    <li><a  href="#Burgers">BURGERS</a></li>
                    <li><a  href="#Hot-Drumifts">HOT-DRUMIFTS</a></li>
                    <li><a  href="#Snacker">SNACKS</a></li>
                    <li><a  href="#Pizza">PIZZA</a></li>
                    <li><a  href="#Submarine">SUBMARINE</a></li>
                    <li><a  href="#BEVERAGE">BEVERAGE</a></li>
                </ul>
            </div>
        </div> 
        <div class="food-items" >
            <div class="icon2">
                <div class="count2">0</div>
                <ion-icon name="cart-outline" class="cart-i"></ion-icon>
            </div>
            
            <section id="Chicken" class="single-items">
                <h3 class="txtFoodType">Hot Crispy Chicken</h3>
                <div class="products-container">
                    <?php
                    $sql="SELECT * FROM `chicken`";
                    $res=$con->query($sql);
                       if($res->num_rows>0)
                           {
                                while($row=$res->fetch_assoc())
                                       {
                                         echo '
                                         
                                               <div class="food-box">
                                               <from action="{$_SERVER["REQUEST_URI"]}" method="POST">
                                                   <div class="pic">
                                                       <img src="image/chicken/'.$row['pic'].'" class="food-img" alt="">
                                                   </div>
                                               <h2 class="food-title">'.$row['fname'].'</h2>
                                                <span class="food-price">Rs.'.$row['price'].'</span>
                                               <ion-icon name="cart" class="add-cart"> <a href="cart.php?id='.$row['Id'].'"></a></ion-icon>
                                               </form>
                                            </div>
                                            
                                           ';

                                       }
                           }

               ?>

                </div>       
             </section> 


            <section id="Burgers" class="single-items">
                <h3 class="txtFoodType">Burgers</h3>
                <div class="products-container">
                <?php
                    $sql="SELECT * FROM `burgers`";
                    $res=$con->query($sql);
                       if($res->num_rows>0)
                           {
                                while($row=$res->fetch_assoc())
                                       {
                                         echo '
                                               <div class="food-box">
                                                   <div class="pic">
                                                       <img src="image/BURGERS/'.$row['pic'].'" class="food-img" alt="">
                                                   </div>
                                               <h2 class="food-title">'.$row['fname'].'</h2>
                                                <span class="food-price">Rs.'.$row['price'].'</span>
                                                <ion-icon name="cart" class="add-cart"></ion-icon>
                                            </div>
                                           ';

                                       }
                           }
               ?>
                </div>       
             </section> 

             
            <section id="Pizza" class="single-items">
                <h3 class="txtFoodType">Pizza</h3>
                <div class="products-container">
                <?php
                    $sql="SELECT * FROM `Pizza`";
                    $res=$con->query($sql);
                       if($res->num_rows>0)
                           {
                                while($row=$res->fetch_assoc())
                                       {
                                         echo '
                                               <div class="food-box">
                                                   <div class="pic">
                                                       <img src="image/pIZZA/'.$row['pic'].'" class="food-img" alt="">
                                                   </div>
                                               <h2 class="food-title">'.$row['fname'].'</h2>
                                                <span class="food-price">Rs.'.$row['price'].'</span>
                                                <ion-icon name="cart" class="add-cart"></ion-icon>
                                            </div>
                                           ';

                                       }
                           }

               ?>
                </div>       
             </section> 

             <section id="Hot-Drumifts" class="single-items">
                <h3 class="txtFoodType">Hot-Drumifts</h3>
                <div class="products-container">
                <?php
                    $sql="SELECT * FROM `drumifts`";
                    $res=$con->query($sql);
                       if($res->num_rows>0)
                           {
                                while($row=$res->fetch_assoc())
                                       {
                                         echo '
                                               <div class="food-box">
                                                   <div class="pic">
                                                       <img src="image/HOT_DRUMLETS/'.$row['pic'].'" class="food-img" alt="">
                                                   </div>
                                               <h2 class="food-title">'.$row['fname'].'</h2>
                                                <span class="food-price">Rs.'.$row['price'].'</span>
                                                <ion-icon name="cart" class="add-cart"></ion-icon>
                                            </div>
                                           ';

                                       }
                           }

               ?>

                </div>       
             </section> 

             <section id="Snacker" class="single-items">
                <h3 class="txtFoodType">Snacker</h3>
                <div class="products-container">
                <?php
                    $sql="SELECT * FROM `snacks`";
                    $res=$con->query($sql);
                       if($res->num_rows>0)
                           {
                                while($row=$res->fetch_assoc())
                                       {
                                         echo '
                                               <div class="food-box">
                                                   <div class="pic">
                                                       <img src="image/SNACKS/'.$row['pic'].'" class="food-img" alt="">
                                                   </div>
                                               <h2 class="food-title">'.$row['fname'].'</h2>
                                                <span class="food-price">Rs.'.$row['price'].'</span>
                                                <ion-icon name="cart" class="add-cart"></ion-icon>
                                            </div>
                                           ';

                                       }
                           }

               ?>

                </div>       
             </section> 
           
             <section id="Submarine" class="single-items">
                <h3 class="txtFoodType">Submarine</h3>
                <div class="products-container">
                <?php
                    $sql="SELECT * FROM `submarine`";
                    $res=$con->query($sql);
                       if($res->num_rows>0)
                           {
                                while($row=$res->fetch_assoc())
                                       {
                                         echo '
                                               <div class="food-box">
                                                   <div class="pic">
                                                       <img src="image/Submarine/'.$row['pic'].'" class="food-img" alt="">
                                                   </div>
                                               <h2 class="food-title">'.$row['fname'].'</h2>
                                                <span class="food-price">Rs.'.$row['price'].'</span>
                                                <ion-icon name="cart" class="add-cart"></ion-icon>
                                            </div>
                                           ';

                                       }
                           }

               ?>         

           
                </div>       
             </section> 

             <section id="BEVERAGE" class="single-items">
                <h3 class="txtFoodType">BEVERAGE</h3>
                <div class="products-container">
                    <?php
                    $sql="SELECT * FROM `beverge`";
                    $res=$con->query($sql);
                       if($res->num_rows>0)
                           {
                                while($row=$res->fetch_assoc())
                                       {
                                         echo '
                                               <div class="food-box">
                                                   <div class="pic">
                                                       <img src="image/BEVERAGE/'.$row['pic'].'" class="food-img" alt="">
                                                   </div>
                                               <h2 class="food-title">'.$row['fname'].'</h2>
                                                <span class="food-price">Rs.'.$row['price'].'</span>
                                                <ion-icon name="cart" class="add-cart"></ion-icon>
                                            </div>
                                           ';

                                       }
                           }

               ?>         
                </div>       
             </section> 
    
        </div>
    </div>

    <!-- fooder Section-->

<footer>

    <div class="f-logo">
    <h2 class="logo">Green <span class="logo2">Star</span></h2>
    </div>
  
    <div class="social-media">
              <div class="ic"><i class="fa fa-facebook " aria-hidden="true"></i></div>
              <div class="ic"><i class="fa fa-twitter " aria-hidden="true"></i></div>
              <div class="ic"><i class="fa fa-whatsapp " aria-hidden="true"></i></div>
              <div class="ic-1"><i class="fa fa-instagram " aria-hidden="true"></i></div>
    </div>
    <div class="footer-section">
    <div class="f-content">
  
    <div class="f-Contact">
      <h3>Contact Info</h3>
      <p>36/1 B,Ampara Road,Sammanthurai, Ampara, Sri lanka.</p>
      <br>
      <p> greenstar@gmail.lk</p>
      <p> +94(075) 109-9222</p>
    </div>
  
    <div class="nav-menu">
      <ul>
        <h3>MENU</h3>
        <li><a href="index.html">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="#service">Service</a></li>
        <li><a href="#service">Contact-us</a></li>
        <li><a href="cart.html">Order</a></li>
  
      </ul>
    </div>
  
    <div class="f-service">
      <h3>service</h3>
      <p>fast delivery</p>
      <p>best Quality</p>
      <p>free delivery</p>
      <p>100% fresh</p>
    </div>
  
    <div class="f-open-hours">
      <h3>opening hours</h3>
      <p>Monday-Friday: 08:00-22:00</p>
      <p>Friday 4PM:Till Mid Night</p>
    </div>
    </div>
    </div>
    <br>
    <hr>
    <p style="text-align: center; font-size: 18px; margin-top: 5px; ">Copyrigt &copy; 2022 Designed with By Heysqa </p>
  
  </footer>
  <script src="js/scrpt.js"></script>
</body>
</html>