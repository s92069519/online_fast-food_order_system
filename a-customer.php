

<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>admin</title>
    <link rel="stylesheet" href="css/admin.css">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
</head>
<body>
   <div class="box">
    <div class="containor">
        <div class="side">

            <div class="logo">
                <h2 class="logoh">Green <span class="logo2">Star</span></h2>
            </div>

            <div class="navbar">
                <div class="bar">
                <ul>
                    <li><a href="Dashboard.php"><ion-icon name="home-outline"></ion-icon>Dashbord</a></li>
                    <li><a href="admin-add.php"><ion-icon name="add-circle-outline"></ion-icon> Add Items</a></li>
                    <li><a href="all_view.php"><ion-icon name="eye-outline"></ion-icon> View items</a></li>
                    <li><a href="#"><ion-icon name="cart-outline"></ion-icon> Order</a></li>
                    <li><a href="#"><ion-icon name="people-outline"></ion-icon> Customers</a></li>
                    <li><a href="#"><ion-icon name="settings-outline"></ion-icon>Settings</a></li>
                </ul>
                </div>
            </div>
        </div>
        <div class="view">
            <div class="accont_bar">
                <div class="page-name">
                    <h2 class="i_name">Customers</h2>
                </div>
                <div class="bar_icon">
                <ion-icon name="notifications-outline" class="icon1"></ion-icon>
                <ion-icon name="person-circle-outline" class="icon1"></ion-icon>
                <ion-icon name="log-out-outline" class="icon1"></ion-icon>
                </div>
            </div>
<?php
    include 'connect.php';
    $sql = "SELECT COUNT(*) as count FROM users";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

// Get the row count
$user = $row['count'];


?>
<?php
    include 'connect.php';
    $sql = "SELECT COUNT(*) as cound FROM coutactus ";
    $result = $con->query($sql);
    $row = $result->fetch_assoc();

// Get the row count
    $msg = $row['cound'];


?>

            <div class="counter">
                <div class="count_customer">
                    <div class="c-1">
                        <div class="c-icon">
                            <ion-icon name="people-outline" class="count-i"></ion-icon>
                        </div>
                        <div class="c-p">
                            <h2 class="menuTotal" id="customer-c"><?php echo $user ?></h2>
                            <h5>Customer</h5>
                        </div>
                    </div>
                    <div class="c-1">
                        <div class="c-icon">
                            <ion-icon name="mail-unread-outline"></ion-icon>
                        </div>
                        <div class="c-p">
                           <h2 class="menuTotal"><?php echo $msg ?></h2>
                            <h5>Total mail</h5>
                        </div>
                    </div>
                   
                </div>
            </div>

            <div class="cutomer-v">
                <h3>user's details</h3>
                    <div class="row-u">
                        <?php
                        
                         include 'connect.php';

                        $sql="select * from users";
                        $res=$con->query($sql);
                           if($res->num_rows>0){
                               while($row=$res->fetch_assoc()){
                                echo'
                        <div class="customer-i">
                        <p>'.$row["uname"].'</p>
                        <p>'.$row["uemail"].'</p>
                        <p>'.$row["uaddress"].'</p>
                        <p>'.$row["uphone"].'</p>
                        </div>
                        ';
                    }
                }
                ?>
                    </div>
                </div>
                <h3 style="position: absolute;top:70px;right:150px">Mail details</h3>
                <div class="massage">
                    
                <?php
                        
                        include 'connect.php';

                       $sql="select * from coutactus";
                       $res=$con->query($sql);
                          if($res->num_rows>0){
                              while($row=$res->fetch_assoc()){
                               echo'
                               <div class="massage-v">
                                <div class="row-m">
                                    <h3>Name : </h3>
                                    <h4>'.$row["cname"].'</h4>
                                </div>
                                <div class="row-m">
                                    <h3>Email : </h3>
                                    <h4>'.$row["uemail"].'</h4>
                               </div>
                               <div class="row-m">
                                <h3>Phone : </h3>
                               <h4>'.$row["uphone"].'</h4>
                               </div>
                               <span>message</span>
                               <p>'.$row["cmessage"].'</p>
                           </div>
                       ';
                   }
               }
               ?>
                   
                </div>

    </div>



        </div>
    </div>
   </div>

</body>
</html>