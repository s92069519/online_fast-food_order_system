<?php
 include 'connect.php';

 if(isset($_GET['id'])){
    
$id=$_GET['id'];
$query="delete from chicken where Id= $id";

$result=mysqli_query($con,$query);

if($result){
    header ('location:all_view.php');
}
else{
    echo 'error';
}
 }
 elseif(isset($_GET['bu'])){
    $id=$_GET['bu'];

$query="delete from burgers where Id= $id";

$result=mysqli_query($con,$query);

if($result){
   
    header ('location:all_view.php');
}

else{
    echo 'error';
}
}

elseif(isset($_GET['hot'])){
    $id=$_GET['hot'];

$query="delete from drumifts where Id= $id";

$result=mysqli_query($con,$query);

if($result){
   
    header ('location:all_view.php');
}

else{
    echo 'error';
}
}

elseif(isset($_GET['pi'])){
    $id=$_GET['pi'];

$query="delete from pizza where Id= $id";

$result=mysqli_query($con,$query);

if($result){
   
    header ('location:all_view.php');
}

else{
    echo 'error';
}
}



elseif(isset($_GET['sn'])){
    $id=$_GET['sn'];

$query="delete from snacks where Id= $id";

$result=mysqli_query($con,$query);

if($result){
   
    header ('location:all_view.php');
}

else{
    echo 'error';
}
}



elseif(isset($_GET['su'])){
    $id=$_GET['su'];

$query="delete from submarine where Id= $id";

$result=mysqli_query($con,$query);

if($result){
   
    header ('location:all_view.php');
}

else{
    echo 'error';
}
}



elseif(isset($_GET['be'])){
    $id=$_GET['be'];

$query="delete from beverge where Id= $id";

$result=mysqli_query($con,$query);

if($result){
   
    header ('location:all_view.php');
}

else{
    echo 'error';
}
}

else{
    echo 'Value error';
}