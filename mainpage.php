<?php

session_start();
$server="localhost";
$user="root";
$password="root";
$db="hotel_geetha";


$conn=mysqli_connect($server,$user,$password,$db);
?><html>  
<head>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.25">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<style>
    .fa{
font-size:100px;
text-decoration:none;
color:black;

    }
    *{

        background-size: cover;


    }
    .fas{


        color:red;
    }

text{


    color:#f8f8ff ;
    position:absolute;
    top:80%;
    bottom:20px;
    right:10%;



}
.footter{



    position:absolute;
    width:100%;
    height:40%;
    background-color:#c19a6b;
    font-size:100px;
    text-align:center;

}
.footter button{


    background-color:white;
    border-radius:50%;
    color:black;
    height:200px;
    width:200px;
    margin-left:30px;
    border:2px solid blue;
}
 
.footer{
    background-color:yellow;
}
.button:hover{
cursor:
}
    .icon{


position: relative;


font-size: 100px;
      
right:0;
left:800;
bottom:60;
background-color:none;

    }




.heespan{
 position:relative;
bottom:0;
top:55px;
left:70px;
background-color:white;
border: 2px solid none;
border-radius:20%;
padding:4px;
font-size:110px;
}




.selbutton:hover{


    background-color:gray;


}

.selbutton{

position:relative;
bottom:0;
top:70px;
left:100px;
width:40%;
height:100px;
border:none ;
border-radius:20px;


font-size:100px;

 background-color:#A1AD61;

text-align:center;
}


.dishcart{

border:2px solid yellow;
width:500px;
height:500px;
border-radius:20%;
background-color:black;
display:inline-block;
margin-left:5px;

}
.cart{


height: 100%;
width: 0;
position: fixed;
z-index: 1;
top: 0;
right: 0;
background-color: white;
overflow-x:scroll;
font-size:100px;

color:black;
padding-top: 60px;

}
.cart img{

position:static;
    width:700px;
    height:400px;
    left:0%;
    right:85%;
top:50px;}
.cart .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 320px;
  margin-left: 50px;
  color:black;

}
#kalki .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 200px;
  margin-left: 50px;
  color:black;

}

.price{
 position:static;



 right:145;
left:55;
bottom:10;
top:20;
font-size:90px;


}
input[type="text"]
{position:relative;
    width:100%;
    height: 100px;
padding:12px ;
margin: 4px 0;
font-size:50px;
bottom:20px;}


input[type="text"]:hover{
  border-color:orange;

}
input:focus{
  background-color: lightblue;
}



select{


position:relative;
    width:200px;
    height:100px;
    border-radius:10%;font-size:50px;
    bottom:0px;
    top:10px;
}
 option{ width:100px;
    height:100px;
    font-size:100px;

}
#kalki{
position:absolute;
width:30%;
height: 50%;
left:30%;
right:20%;
background-color:white;
top:20%;
margin:auto;
display:none;
z-index:1;
padding:100px;
border-radius:5%;
font-size:80px;
background-image:url("again.jpeg");
background-size: cover;
}
input[type="radio"]{

width:70px;
height:70px;
position:relative;
left:4px;
bottom:1px;
top:18px;


}
input[text]{
border-color:orange;



}


  input[type="submit"]{
    position:relative;
  bottom:0;
  top: 180px;
  border-radius:8%;
  border:2px circle orange;
width:100%;
height:18%;
font-size:100


  }
    
    .button{

        position:absolute;
border:20px circle black;

border-radius:200px;


width:100px;
height:100px;


}
body{

    background: url('bg.png') no-repeat center center fixed;
    background-size: cover;
}
img{

    border-radius:25%;
}
.div{

 
border:2px solid white;
    height:20%;
    border-top:none;
    border-right:none;
    border-left:none;
border-bottom:none;
    
}

.div button{
    position:absolute;
font-size:100px;
background:none;
color:white;
bottom:2000;
}
a{

    text-decoration:none;
    color:black;
}


.div2{  
width:100%;
border:none;
height:70%;
top:500px;
padding:0;
}

.div2  button{
position:absolute;
width:18%;
height:30%;
top:700px;
font-size:100px;


}
.div2 button:hover{

    border:10px solid red;
}

.div3 button{
position:absolute;
width:18%;
height:30%;
top:1600px;
font-size:100px;


}
.div3 button:hover{


    border:10px solid black;
}
.tiffinsveg{
width: 100%;
            overflow-x: auto; /* Enable horizontal scrolling */
            white-space: nowrap; /* Prevent wrapping of elements */
          
            padding: 10px;




}
.tiffinsveg::-webkit-scrollbar {
    display: none; /* Hide scrollbar */
}


/* Firefox */
.tiffinsveg {
    scrollbar-width: none; /* Hide scrollbar */
}
.tiffinsveg div:hover{
border:4px solid black;



}
html {
  scroll-behavior: smooth;
}

.confrom{



    border:2px solid black;
    background-color:orange;
    width:800px;
    height:100px;
    position:sticky;
    bottom: 0;
    top:80%;
    left:50%;
    border-radius:20px;
}
p{

position:;
    font-size:150px;
    background-color:black;
    width:1000px;
    
    color:white;
   
   
    
}

.items{


    

    width:20%;
    height:50%;
    border:2px solid black;
border-radius:20%;
margin-right: 30px;
display:inline-block;

}
.items:hover{

border-color:black;
    background-color:lightgray;
}


.total{


    
    border:2px solid black;
    background-color:green;
    width:500px;
    height:100px;
    position:sticky;
    bottom: 0;
    top:90%;
    left:10%;
    border-radius:20px;}

</style>
 
<div class="div">
<button style="left:200px;"> <i class="fa fa-home"  style="color:white;" > </i> 
<a href="owner.php" style="text-decoration:none; color:white;" >owner</a>
</i>
</button>

<button style="right:1200px;">
<i class="fas fa-cart-arrow-down"  onclick="openNav()">
</i>
cart
    <button>
    <div class="cart"  id="hlo" style="opacity:1;">
<div onclick="closeNav()" class="closebtn" >&times
</div>
<div> MY CART:

</div>
<?php
$kk=$_SESSION['table'];
$sql = "SELECT name, number, image FROM  $kk WHERE id!=1;";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<hr>";
       
        echo "<div>";
       
        echo '<img src="' . $row['image'] . '" alt="' . $row['name'] . '">';
      

        echo "Name: " . $row["name"] . " Price: " . $row["number"] ;

     
        echo "</div>";
        echo '<hr>';
    }
}?>

<div class="total">
    <?php
$sq = "SELECT SUM(number) AS total_sum  from $kk where id!=1;";
$re = mysqli_query($conn, $sq);

if (mysqli_num_rows($re) > 0) {
    // Fetch the result
    $row = mysqli_fetch_assoc($re);
    $totalSum = $row['total_sum'];
    echo "&#8377 " . $totalSum;
} else {
    echo "0 results";
}
?>
</div><div class="confrom" id="confom" >
confrom order
</div>


<script>
document.getElementById('confom').addEventListener("click",function(){

this.style.bgcolor="green";
this.innerHTML="conformed";
window.alert("order sucessfully  please wait for 15 min for order");





document.getElementById('hlo').style.width="0%";

document.body.style.opacity=1;


});



    </script>

</div>

<button style="right:600px;" onclick="signin()">
<i class="fa fa-user" style="color:white;">
</i>
sign in
    <button>

    <button style="right:110px"><a href="#s8"> 
    contact
</a>
<i class="fa fa-phone" style="color:white;">
</i>

</button>

</div >




<div  class="div2">

<button style="left:200; background-image:url('tiffins.jpg'); border-radius:20%"><a href='#s1'>
    TIFFINS</a>
</button>
<button style="left:1500; background-image:url('biriyani.jpeg'); border-radius:20% ;"><a href="#s2" style="COLOR:WHITE;">
    BIRIYANI</a>
</button><button style="right:1500;background-image:url('RICE MEAL.jpg'); border-radius:20%; COLOR:WHITE">
    RICE MEAL
</button><button style="right:200; background-image:url('PIZZA.jpeg'); border-radius:20%;COLOR:WHITE"><a href="#s3">
    PIZZA AND BURGER</a></button>
</div>
<br>
<div  class="div3" >
<button style="left:200;background-image:url('STARTER.jpeg'); border-radius:20%;color:white;"><a href="#s4">
    STARTERS</a>
</button>
<button style="left:1500; background-image:url('cakes.jpeg'); border-radius:20%"><a href="#s5">
    cakes</a>
</button><button style="right:1500; background-image:url('cooldrinks.jpg'); border-radius:20%"><a href="#s6">
    cool drinks</a>
</button><button style="right:200; background-image:url('coffe.jpeg'); border-radius:20%"><a href="#s7">
    coffe and tea</a>
</button><br>
<P>

Tiffins Veg

</p>
<br>
</div>

//form sign in
<div id="kalki" style="opacity:1;">
<form   method="POST" action=<?php    echo htmlspecialchars($_SERVER["PHP_SELF"]);?>>

NAME:
<br><input type="text" id="name"  name="name" placeholder="Enter Your Name" required>
<br><br>
<label>PHONE NUMBER:</label><br>
<input type="text" id="number" name="number" placeholder="ex:XXXXXXXX2322" required>
<br><br>
<label>
Table No:</label><select id='table' name="table" required>
<option value="no"  >none</option>

  <option value="1"  >1</option>
  <option value="2"  >2</option>
  <option value='3'  >3</option>
  <option value='4'  >4</option>
  <option value='5'  >5</option>
  <option value='6'  >6</option>
  <option value='7'  >7</option>
  <option value='8'  >8</option>
</select><br>
<br>

<input type="radio" name="type" value="parcel" required>
<label>parcel
</label>
<input type="radio" name="type" value="serve" required><label>serve
</label>
<br><div onclick="close()" class="closebtn" >&times
</div>
<input type="submit" onclick="bujji()">
</div>
</form>

//backend
<script>
function resizeWindow() {
    window.resizeTo(480, 270); // Width, height
}
<?php
$dob=$_POST["name"];
$number=$_POST["number"];
$tableno=$_POST["table"];
$type=$_POST["type"];
$_SESSION['name']=$dob;



  $table_query = "CREATE TABLE $dob (id int(2) default 0, name VARCHAR(20),number INT(12),tablei int(2) default NULL ,type varchar(8) default NULL, image varchar(50) default NuLl);";
 $x= mysqli_query($conn,$table_query);
if($x){

 $y="insert into $dob(id,name,number,tablei,type) values(1,'$dob','$number','$tableno','$type');"; 
  mysqli_query($conn,$y);
      }

?>
    </script>
</div>

<div class="tiffinsveg" id="s1">
 <div class="items" >   
        
<img src="oniondasa.jpeg" width=100% height=75%;>
<li class="price" type=none><b><I>ONION DOSA</i></b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 40</span>
<button  class='selbutton' onclick="addRow('oniondosa','40','oniondasa.jpeg')"  ondblclick="dltRow('oniondosa')">select</button>
</div>
<div class="items">   
<img src="idly1.jpeg" width=100% height=75%;>
<li class="price" type=none><b>IDLY</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 20</span>
<button  class='selbutton' onclick="addRow('idly','20','idly1.jpeg')"  ondblclick="dltRow('idly')">select</button>
</div>

<div class="items">   
<img src="puri.jpeg" width=100% height=75%;>
<li class="price" type=none><b>ALU PURI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 30</span>
<button  class='selbutton' onclick="addRow('puri','30','puri.jpeg')"  ondblclick="dltRow('puri')">select</button>
</div>
<div class="items">   
<img src="UPMA.jpg" width=100% height=75%;>
<li class="price" type=none><b>UPMA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 20</span>
<button  class='selbutton' onclick="addRow('upma','20','UPMA.jpg')"  ondblclick="dltRow('upma')">select</button>
</div>
<div class="items">   
<img src="VADA.jpg" width=100%; height=75%;>
<li class="price" type=none><b>VADA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 30</span>
<button  class='selbutton' onclick="addRow('vada','30','VADA.jpg')"  ondblclick="dltRow('vada')">select</button>
</div>
<div class="items">   
<img src="BONDA.jpg" width=100% height=75%;>
<li class="price" type=none><b>BONDA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 30</span>
<button  class='selbutton' onclick="addRow('BONDA','30','BONDA.jpg')"  ondblclick="dltRow('BONDA')">select</button>
</div>
<div class="items">   
<img src="pesarattu.jpg" width=100% height=75%;>
<li class="price" type=none><b>PESARATTU</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 40</span>
<button  class='selbutton' onclick="addRow('PESARATTU','30','pesarattu.jpg')"  ondblclick="dltRow('PESARATTU')">select</button>
</div>
<div class="items">   
<img src="thayri vada.jpeg" width=100% height=75%;>
<li class="price" type=none><b>THEYRI VADA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 40</span>
<button  class='selbutton' onclick="addRow('THEYRI VADA','30','thayri vada.jpeg')"  ondblclick="dltRow('THEYRI VADA')">select</button>
</div>
       
</div>

<P>

Tiffins  Non-Veg

</p>
<div class="tiffinsveg" id="ho">



<div class="items">   
<img src="eggdosa.jpg" width=100% height=75%;>
<li class="price" type=none><b>EGG DOSA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 80</span>
<button  class='selbutton' onclick="addRow('EGG DOSA','30','eggdosa.jpeg')"  ondblclick="dltRow('EGG DOSA')">select</button>
</div>
<div class="items">   
<img src="chickenporata.jpg" width=100% height=75%;>
<li class="price" type=none><b>CHICKEN PORATA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 80</span>
<button  class='selbutton' onclick="addRow('CHICKEN PAROTA','80''.chickenporata.jpg')"  ondblclick="dltRow('CHICKEN PAROTA')">select</button>
</div>

<div class="items">   
<img src="omelette.jpeg" width=100% height=75%;>
<li class="price" type=none><b> OMELET</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 40</span>
<button  class='selbutton' onclick="addRow('OMELET','30','omelette.jpeg')"  ondblclick="dltRow('OMELET')">select</button>
</div>
<div class="items">   
<img src="bread omelet.jpeg" width=100% height=75%;>
<li class="price" type=none><b>BREAD OMELET</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 60</span>
<button  class='selbutton' onclick="addRow('BREAD OMELET','60','bread omelet.jpeg')"  ondblclick="dltRow('BREAD OMELET')">select</button>
</div>
<div class="items">   
<img src="caesar wrap.jpeg" width=100%; height=75%;>
<li class="price" type=none><b>CAESAR WRAP</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 75</span>
<button  class='selbutton' onclick="addRow('CAESAR WRAP','75','caesar wrap.jpeg')"  ondblclick="dltRow('CAESAR WRAP')">select</button>
</div>
<div class="items">   
<img src="mutton roll.jpeg" width=100% height=75%;>
<li class="price" type=none><b>MUTTON ROLL</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 100</span>
<button  class='selbutton' onclick="addRow('MUTTON ROLL','100','mutton roll.jpeg')"  ondblclick="dltRow('MUTTON ROLL')">select</button>
</div>
<div class="items">   
<img src="egg roll.jpg" width=100% height=75%;>
<li class="price" type=none><b>EGG ROLL</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 60</span>
<button  class='selbutton' onclick="addRow('EGG ROLL','60','egg roll.jpg')"  ondblclick="dltRow('EGG ROLL')">select</button>
</div>
    </DIV>
    <p id="s2">
Biriyani Non-Veg
    

</p>
<div class="tiffinsveg" >



<div class="items">   
<img src="dum.jpg" width=100% height=75%;>
<li class="price" type=none><b>DUM BIRIYANI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 200</span>
<button  class='selbutton' onclick="addRow('ch.biriyani','200','biriyani.jpeg')"  ondblclick="dltRow('ch.biriyani')">select</button>
</div>
<div class="items">   
<img src="frypiece.jpeg" width=100% height=75%;>
<li class="price" type=none><b>FRY PIECE</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 220</span>
<button  class='selbutton' onclick="addRow('fry piece','220','frypiece.jpeg')"  ondblclick="dltRow('fry piece')">select</button>
</div>

<div class="items">   
<img src="mutton biriryani.jpg" width=100% height=75%;>
<li class="price" type=none><b>MUTTON BRIYANI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 280</span>
<button  class='selbutton' onclick="addRow('MUTTON BIRIYANI','280','mutton biriryani.jpg')"  ondblclick="dltRow('MUTTON BIRIYANI')">select</button>
</div>
<div class="items">   
<img src="prawns biriyani.webp" width=100% height=75%;>
<li class="price" type=none><b>PRWANS BIRIYANI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 240</span>
<button  class='selbutton' onclick="addRow('PRAWNS BIRIYANI','250','prawns biriyani.webp')"  ondblclick="dltRow('PRAWNS BIRIYANI')">select</button>
</div>
<div class="items">   
<img src="crab.jpg" width=100%; height=75%;>
<li class="price" type=none><b>CRAB BIRIYANI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 300</span>
<button  class='selbutton' onclick="addRow('crab biriyani','300','crab.jpg')"  ondblclick="dltRow('crab biriyani')">select</button>
</div>
<div class="items">   
<img src="bamboo.jpeg" width=100% height=75%;>
<li class="price" type=none><b>BAMBOO BIRIYANI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 320</span>
<button  class='selbutton' onclick="addRow('bamboo','320','bamboo.jpeg')"  ondblclick="dltRow('bamboo')">select</button>
</div>

       
</div>

<p>
Biriyani Veg
    

</p>
<div class="tiffinsveg" id="ho">

<div class="items">   
<img src="paneer biriyani.jpeg" width=100% height=75%;>
<li class="price" type=none><b> PANEER BIRIAYANI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377  180</span>
<button  class='selbutton' onclick="addRow('PANEER BIRIYANI','180','paneer biriyani.jpeg')"  ondblclick="dltRow('PANEER BIRIYANI')">select</button>
</div>
<div class="items">   
<img src="vegetable-biryani.jpeg" width=100% height=75%;>
<li class="price" type=none><b>VEGETABLE BIRIYANI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377  160</span>
<button  class='selbutton' onclick="addRow('VEGETABLE BIRIYANI','160','vegetable-biryani.jpeg')"  ondblclick="dltRow('VEGETABLE BIRIYANI')">select</button>
</div><div class="items">   
<img src="tofu.webp" width=100% height=75%;>
<li class="price" type=none><b>TOFU BIRIYANI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 170 </span>
<button  class='selbutton' onclick="addRow('TOFU BIRIYANI','170','tofu.webp')"  ondblclick="dltRow('TOFU BIRIYANI')">select</button>
</div><div class="items">   
<img src="jackfruit.jpeg" width=100% height=75%;>
<li class="price" type=none><b>JACKFRUIT</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 150</span>
<button  class='selbutton' onclick="addRow('JACKFRUIT','150','jackfruit.jpeg')"  ondblclick="dltRow('JACKFRUIT')">select</button>
</div><div class="items">   
<img src="KAJU.jpg" width=100% height=75%;>
<li class="price" type=none><b> KAJU BIRIYANI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 170 </span>
<button  class='selbutton' onclick="addRow('KAJU','170','KAJU.jpg')"  ondblclick="dltRow('KAJU')">select</button>
</div><div class="items">   
<img src="baby corn.jpeg" width=100% height=75%;>
<li class="price" type=none><b>BABY CORN</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 150 </span>
<button  class='selbutton' onclick="addRow('BABY CORN','150','baby corn.jpeg')"  ondblclick="dltRow('BABY CORN')">select</button>
</div>

    </div>

    <P id="s3">
PIZZA & BURGER
    </P>
    <div class="tiffinsveg" >
    <div class="items">   
<img src="burger.jpeg" width=100% height=75%;>
<li class="price" type=none><b>CHESSE BURGER</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377  80</span>
<button  class='selbutton' onclick="addRow('CHESSE BURGER','80','burger.jpeg')"  ondblclick="dltRow('CHESSE BURGER')">select</button>
</div>
<div class="items">   
<img src="piz1.jpeg" width=100% height=75%;>
<li class="price" type=none><b> BUTTER PIZZA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377  150</span>
<button  class='selbutton' onclick="addRow(' BUTTER PIZZA','150','piz1.jpeg')"  ondblclick="dltRow(' BUTTER PIZZA')">select</button>
</div> <div class="items">   
<img src="pepper.jpeg" width=100% height=75%;>
<li class="price" type=none><b>PEPPER PIZZA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377  150 </span>
<button  class='selbutton' onclick="addRow('PEPPER PIZZA','150','pepper.jpeg')"  ondblclick="dltRow('PEPPER PIZZA')">select</button>
</div> <div class="items">   
<img src="slider.jpeg" width=100% height=75%;>
<li class="price" type=none><b> SLIDER BURGER</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 180 </span>
<button  class='selbutton' onclick="addRow('SLIDER BURGER','180','slider.jpeg')"  ondblclick="dltRow('SLIDER BURGER')">select</button>
</div> <div class="items">   
<img src="ham.jpeg" width=100% height=75%;>
<li class="price" type=none><b>HAM BURGER</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377  130</span>
<button  class='selbutton' onclick="addRow('HAM BURGER','130','ham.jpeg')"  ondblclick="dltRow('HAM BURGER')">select</button>
</div> <div class="items">   
<img src="calzone.jpeg" width=100% height=75%;>
<li class="price" type=none><b>CALZONE PIZZA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 135 </span>
<button  class='selbutton' onclick="addRow('CALZONE PIZZA','135','calzone.jpeg')"  ondblclick="dltRow('CALZONE PIZZA')">select</button>
</div>



</div>
<P id="s4">
STARTERS
    </P>
    <div class="tiffinsveg" >
    <div class="items">   
<img src="CHICKEN WINGS.jpg" width=100% height=75%;>
<li class="price" type=none><b>CHICKEN WINGS</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 120 </span>
<button  class='selbutton' onclick="addRow('CHICKEN WINGS','120','CHICKEN WINGS.jpg')"  ondblclick="dltRow('CHICKEN WINGS')">select</button>
</div>
<div class="items">   
<img src="PRAWN TEMPURA.jpeg" width=100% height=75%;>
<li class="price" type=none><b>PRAWN TEMPURA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377  150</span>
<button  class='selbutton' onclick="addRow('PRAWN TEMPURA','150','PRAWN TEMPURA.jpeg')"  ondblclick="dltRow('PRAWN TEMPURA.jpg')">select</button>
</div> <div class="items">   
<img src="Scotch Eggs.jpeg" width=100% height=75%;>
<li class="price" type=none><b>SCOTCH EGG</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 80 </span>
<button  class='selbutton' onclick="addRow('scotch egg','80','Scotch Eggs.jpeg')"  ondblclick="dltRow('scotch egg')">select</button>
</div> <div class="items">   
<img src="stuffed-mushroom.webp" width=100% height=75%;>
<li class="price" type=none><b>STUFFED-MUSHROOM</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 100 </span>
<button  class='selbutton' onclick="addRow('TUFFED-MUSHROOM','110','stuffed-mushroom.webp')"  ondblclick="dltRow('TUFFED-MUSHROOM')">select</button>
</div> <div class="items">   
<img src="Calamari.jpg" width=100% height=75%;>
<li class="price" type=none><b>CALAMARI</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 120 </span>
<button  class='selbutton' onclick="addRow('CALAMARI','120','Calamari.jpg')"  ondblclick="dltRow('CALAMARI')">select</button>
</div> <div class="items">   
<img src="STARTER.jpeg" width=100% height=75%;>
<li class="price" type=none><b>PRAWNS 65</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 125</span>
<button  class='selbutton' onclick="addRow('PRAWNS 65','125','STARTER.jpeg')"  ondblclick="dltRow('PRAWNS 65')">select</button>
</div>
    </div>

<p id="s5">
   CAKES
    </P>
    <div class="tiffinsveg" >
    <div class="items">   
<img src="CHOCOLATE CAKE.jpeg" width=100% height=75%;>
<li class="price" type=none><b>CHOCOLATE CAKE</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 35</span>
<button  class='selbutton' onclick="addRow('CHOCOLATE CAKE','35','CHOCOLATE CAKE.jpeg')"  ondblclick="dltRow('CHOCOLATE CAKE')">select</button>
</div>
<div class="items">   
<img src="VINILA.jpeg" width=100% height=75%;>
<li class="price" type=none><b>VINILA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 40</span>
<button  class='selbutton' onclick="addRow('VINILA','40','VINILA.jpeg')"  ondblclick="dltRow('VINILA')">select</button>
</div> <div class="items">   
<img src="Cheesecake.jpg" width=100% height=75%;>
<li class="price" type=none><b>CHESSE CAKE</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 35</span>
<button  class='selbutton' onclick="addRow('CHESSE CAKE','35','Cheesecake.jpg')"  ondblclick="dltRow('CHESSE CAKE')">select</button>
</div> <div class="items">   
<img src="Strawberry Shortcake.jpeg" width=100% height=75%;>
<li class="price" type=none><b>STRAWBERRY</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 38</span>
<button  class='selbutton' onclick="addRow('STRAWBERRY','38','Strawberry Shortcake.jpeg')"  ondblclick="dltRow('STRAWBERRY')">select</button>
</div> <div class="items">   
<img src="chiffon-cake.jpg" width=100% height=75%;>
<li class="price" type=none><b>CHIFFION CAKE</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 30</span>
<button  class='selbutton' onclick="addRow('CHIFFION CAKE','30','chiffon-cake.jpg')"  ondblclick="dltRow('CHIFFION CAKE')">select</button>
</div> <div class="items">   
<img src="marble-layer-cake.jpg" width=100% height=75%;>
<li class="price" type=none><b>MARBLE LAYER</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 45</span>
<button  class='selbutton' onclick="addRow('MARBLE LAYER','45','marble-layer-cake.jpg')"  ondblclick="dltRow('MARBLE LAYER')">select</button>
</div>
    </div>
<P id="s6">
    COOL DRINKS 
    </P>
    <div class="tiffinsveg" >
    <div class="items">   
<img src="Mojito.jpeg" width=100% height=75%;>
<li class="price" type=none><b>MOJITO</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 80 </span>
<button  class='selbutton' onclick="addRow('MOJITO','80','Mojito.jpeg')"  ondblclick="dltRow('MOJITO')">select</button>
</div>
<div class="items">   
<img src="Watermelon-Juice.webp" width=100% height=75%;>
<li class="price" type=none><b>WATERMELON</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 40</span>
<button  class='selbutton' onclick="addRow('WATERMELON','40','Watermelon-Juice.webp')"  ondblclick="dltRow('WATERMELON')">select</button>
</div> <div class="items">   
<img src="Sangria.JPEG" width=100% height=75%;>
<li class="price" type=none><b>SANGRIA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 50 </span>
<button  class='selbutton' onclick="addRow('SANGRIA','50','Sangria.JPEG')"  ondblclick="dltRow('SANGRIA')">select</button>
</div> <div class="items">   
<img src="LUSSY.JPEG" width=100% height=75%;>
<li class="price" type=none><b>LUSSY</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 40</span>
<button  class='selbutton' onclick="addRow('LUSSY','40','LUSSY.JPEG')"  ondblclick="dltRow('LUSSY')">select</button>
</div> <div class="items">   
<img src="lemonade.JPG" width=100% height=75%;>
<li class="price" type=none><b>LEMONADE</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 50 </span>
<button  class='selbutton' onclick="addRow('LEMONADE','50','lemonade.JPG')"  ondblclick="dltRow('LEMONADE')">select</button>
</div> <div class="items">   
<img src="BUTTER MILK.PNG" width=100% height=75%;>
<li class="price" type=none><b></b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 30</span>
<button  class='selbutton' onclick="addRow('BUTTER MILK','30','BUTTER MILK.PNG')"  ondblclick="dltRow('BUTTER MILK')">select</button>
</div>
    </div>
<P id="s7">
    COFFE & TEA
    </P>
    <div class="tiffinsveg" >
    <div class="items">   
<img src="Cappuccino.JPEG" width=100% height=75%;>
<li class="price" type=none><b>CAPPUCCION</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 50</span>
<button  class='selbutton' onclick="addRow('CAPPUCCION','80','Cappuccino.JPEG')"  ondblclick="dltRow('CAPPUCCION')">select</button>
</div>
<div class="items">   
<img src="masala tea.JPEG" width=100% height=75%;>
<li class="price" type=none><b>MASALA TEA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 20 </span>
<button  class='selbutton' onclick="addRow('MASALA TEA','20','masala tea.JPEG')"  ondblclick="dltRow('MASALA TEA')">select</button>
</div> <div class="items">   
<img src="Mocha.jpg" width=100% height=75%;>
<li class="price" type=none><b>MOCHA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 40 </span>
<button  class='selbutton' onclick="addRow('MOCHA','40','Mocha.jpg')"  ondblclick="dltRow('MOCHA')">select</button>
</div> <div class="items">   
<img src="black tea.JPEG" width=100% height=75%;>
<li class="price" type=none><b>BLACK TEA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 25 </span>
<button  class='selbutton' onclick="addRow('BLACK TEA','25','black tea.JPEG')"  ondblclick="dltRow('BLACK TEA')">select</button>
</div> <div class="items">   
<img src="Espresso.JPEG" width=100% height=75%;>
<li class="price" type=none><b>SPRESSO</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 40 </span>
<button  class='selbutton' onclick="addRow('ESPRESSO','40','Espresso.JPEG')"  ondblclick="dltRow('SPRESSO')">select</button>
</div> <div class="items">   
<img src="green tea.JPEG" width=100% height=75%;>
<li class="price" type=none><b>GREEN TEA</b></li><span class="icon-container">
        <i class="far fa-heart icon"></i>
</span>
<span class="heespan">&#8377 20 </span>
<button  class='selbutton' onclick="addRow('GREEN TEA','20','green tea.JPEG')"  ondblclick="dltRow('GREEN TEA')">select</button>
</div>
    </div>
<br>
<br>

<div class="footter" id="s8"><span class="text">
    <br>
    <br>
    
Indulge in exquisite flavors at <b>Spice Palace</b>,where <br> 
culinary artistry meets exceptional dining experiences in<B> AMALAPURAM</B>.<br> Discover our passion for fresh ingredients, innovative dishes, and warm hospitality.
    
    </span>
    <br>
    <br>
    <button><a href="https://www.poptox.com/" class="fa fa-phone"></a></button>
    <button><a href="https://www.facebook.com/" class="fa fa-facebook"></a></button>
    <button><a href="https://x.com/X?mx=2" class="fa fa-twitter"></a></button>
    <button><a href="https://www.youtube.com/?gl=IN" class="fa fa-youtube"></a></button>
    <button><a href="https://www.instagram.com/" class="fa fa-instagram"></a></button>
    <text STYLE="font-size:50px"> DESIGN BY @PRAHARSHITH  VAKKAPATLA<BR>
CONTACT:7893462322
    </text>
</div>


<script>

const iconContainers = document.querySelectorAll('.icon-container');

function toggleIcon(element) {
            const icon = element.querySelector('i');
            if (icon.classList.contains('far')) {
                icon.classList.remove('far');
                icon.classList.add('fas');
            } else {
                icon.classList.remove('fas');
                icon.classList.add('far');
            }
        }

        iconContainers.forEach(container => {
            container.addEventListener('click', () => {
                toggleIcon(container);
            });
        });

        const x = document.getElementsByClassName("selbutton");

for (let n = 0; n < x.length; n++) {
    x[n].addEventListener('click', function() {
        // Compare the current background color
       
            this.style.backgroundColor = "white";
            this.innerHTML = "cancel";
        } 
   ) };
   

   function addRow(name, number,url) {
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "test.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
           
        }
    };
    
    // Send 'name' and 'number' as POST parameters
    xhr.send("name=" + name + "&number=" + number + "&url="+ url);

}


for (let n = 0; n < x.length; n++) {
    x[n].addEventListener('dblclick', function() {
        // Compare the current background color
      
       
            this.style.backgroundColor = "#A1AD61";
            this.innerHTML = "select";
        }
    )};
    function dltRow(x){



var xhr = new XMLHttpRequest();
xhr.open("POST", "test3.php", true);
xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

xhr.onreadystatechange = function() {
    if (xhr.readyState == 4 && xhr.status == 200) {
      
    }
};

// Send 'name' and 'number' as POST parameters
xhr.send("name="+ x);
}



function openNav() {
  document.getElementById("hlo").style.width = "35%";
  document.body.style.opacity="70%";
}

function closeNav() {
  document.getElementById("hlo").style.width = "0";document.body.style.opacity="1";
}

function close(){


    document.getElementById('kalki').style.display="none";
}
function signin(){


document.getElementById("kalki").style.display="block";


}

</script>
</body>
</html>




