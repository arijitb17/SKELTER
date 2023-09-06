<?php
$insert = false;
session_start();

if(isset($_POST['email'])){

  if(empty($_SESSION['form_submitted'])){
        $_SESSION['form_submitted'] = true;

    
    $server = "localhost";
    $username = "root";
    $password = "";

    
    $con = mysqli_connect($server, $username, $password);

    
    if(!$con){
      die("connection to this database failed due to" . mysqli_connect_error());
    }

    $email = $_POST['email'];
    
    $sql = "INSERT INTO `subscriber`.`info` (`email`, `dt`) VALUES ('$email', current_timestamp());";

    
    if($con->query($sql) == true){
        echo "Sucessfully inserted";
        
    }
    else{
        echo "Error: $sql <br> $con->error";
    }

    $con->close();
    }
}

unset($_SESSION['form_submitted']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKELTER</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Courgette&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
</head>
<style>
  
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
  
  }
 
 body{ 
    width:100%;
    height:100%;
    font-family: 'Courgette', cursive;

 }
 #main{
    width:100vw;
    height:120vh;
    background-image: url('back.png');
    background-position: center;
    background-size: cover;
    background-repeat: no-repeat;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: column;


 }
 #coming{
   margin-top: 5px;
   color:#fff;
    height:10px; 
  margin-bottom: 50px;
   /* height:50%; */
   text-shadow: 2px;
   font-weight: 2px;
   font-size:50px;
   animation-name: coming;
   animation-duration: 1s;
   animation-iteration-count: infinite;
 }
 
 #text{
   margin-top: 50px;
   color:#fff;
   height:10%;
   text-shadow: 2px;
   font-weight: 2px;
   font-size:30px;

 }
 img{
  margin:5px;
   height:270px;
   width:270px; 
 }

footer {
 
    color: #fff;
    padding: 20px 10px;
    text-align: center;
    
}


.copyright {
    font-size: 14px;
    margin-bottom: 10px;
}


.social-media {
    font-size: 24px;
}

.social-media a {
    text-decoration: none;
    color: #fff;
    margin: 0 10px;
}


.social-media img {
    width: 24px;
    height: 24px;
}
.navbar{
    
  display: flex;
  align-items: center;
  padding: 20px;

}
nav{
  flex: 1;
  text-align: right;
}
nav ul{
  display: inline-block;
  list-style-type: none;
}
nav ul li{
  display: inline-block;
  margin: 20px;
  font-size: 1.2rem;
  transition: 0.3s;
}
nav a:hover{
  color: orangered;
}
a{
  text-decoration: none;
  color: #fefefe;
}
label #btn,
label #cancel{
  color: #fefefe;
  font-size: 30px;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}
#toggle{
  display: none;
}
@media (max-width: 1118px) {
  nav img{
      left: 8%;
  }
  
}
@media (max-width: 944px) {
  nav img{
      left: 6%;
      top: 20px;
      width: 130px;
  }
  nav ul li a{
      font-size: 17px;
  }
  #text p{
   
    text-align: center;
    
}
}
@media (max-width: 860px) {
  label #btn{
      display: block;
  }
  ul{
      position: absolute;
      width: 100%;
      height: 80vh;
      background: #11001b;
      opacity: .8;
      top: 120px;
      left: -100%;
      text-align: center;
      transition: all .5s;
  }
  nav ul li{
      display: block;
      margin: 50px 0;
      line-height: 30px;
  }
  nav ul li a{
      font-size: 20px;
  }
  .content1{
      position: fixed;
      margin-top: 0px;
      padding: auto;
      
  }
  #main{
    background-image: url(phone.png);
    
     height:120vh;
     width:100vw; 
    background-position: center;
    background-size: cover;
   
    
  }
  #logo img{
    left: 0;
    top: 0;
    bottom: 0;
  }
  .menu-toggle .burger{
    margin-left: 40px;
  }
  #text p{
      font-size: 17px;
      text-align: center;
      
  }
  .content1 #countdown{
      font-size: 20px;
  }

  #toggle:checked ~ ul{
      left: 0%;
  }
  #toggle:checked ~ label #btn{
  display: none;
  }
  #toggle:checked ~ label #cancel{
  display: block;
  }
}
  .inp {
    border: 1px solid black;
    border-radius: 30px;
    padding: 13px 35px;
    width: 300px;
  }
  
  .btn1 {
    border: 1px solid black;
    border-radius: 30px;
    padding: 13px 35px;
    text-align: center;
    
    font-size: 10px;
    cursor: pointer;
    background-color: rgb(26, 26, 221);
    color: white;
    font-weight: bolder;
  }
  
  button {
    width: 140px;
    height: 43px;
    border: none;
    outline: none;
    background: #266ae7;
    color: #fff;
    font-size: 22px;
    border-radius: 30px;
    position: relative;
    overflow: hidden;
    cursor: pointer;
    font-family: 'Courgette', cursive;
    margin: 15px;
    transform: translate(50%,-10%);
  }
  
  button > p {
    font-size: 20px;
    position: relative;
    
    /* font-weight: 55; */
  }
  
  .right {
    width: 80px;
    height: 20px;
    border-radius: 40px;
    position: absolute;
    top: 0;
    right: -40px;
    opacity: 0;
  }
  
  .right svg {
    width: 40px;
    margin: 0px 0px 0px 40px;
  }
  
  svg path {
    stroke-width: 3;
    stroke: #fff;
    stroke-dasharray: 34;
    stroke-dashoffset: 34;
    stroke-linecap: round;
  }
  
  .active {
    background: #50e28d;
    transition: 1s;
  }
  
  .active .right {
    right: 0;
    bottom: 200;
    opacity: 1;
    transition: 1s;
  }
  
  .active p {
    margin-right: 30px;
    transition: 1s;
  }
  
  .active svg path {
    stroke-dashoffset: 0;
    transition: 1s;
    transition-delay: 1s;
  }
  
  .igl {
    margin-top: 3px;
  }
</style>
<body>
   
    <div id="main">
        <div id="navbar">
            <nav>
                <div class="menu-toggle">
                    <input type="checkbox" id="toggle">
                    <label for="toggle" class="burger">
                        <i class="fas fa-bars" id="btn"></i>
                        <i class="fas fa-times" id="cancel"></i> 
                    </label>
                <ul class="menu">
                    <li><a href="./index.html" class="">Home</a></li>
                    <li><a href="">Products</a></li>
                    <li><a href="">About</a></li>
                    <li><a href="">Contact</a></li>
                    <li><a href="">Account</a></li> 
                    <li><a href=""><i class="fa-solid fa-bag-shopping" width="30px"></i></a></li>  
                </ul>
            </nav>
        </div>
        <div id="logo"><img src="logo.png" alt="Logo"></div>
        <div id="coming">Coming Soon!</div>
        <div id="text"> <p>Be the first one to know when  our store get live...</p></div>
        <div class="container">
            <div class="inpt">
                <input type="email" placeholder=" Type your email here..." class="inp">
            </div>
            <div class="container2">
                <button id="btn1">
                    <p id="btnText">Notify me</p>
                    <div class="right">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
                            <path fill="transparent" d="M14.1 27.2l7.1 7.2 16.7-16.8" />
                        </svg>
                    </div>
                </button>
            </div>
        <footer>
            <div class="copyright">
                &copy; 2023 Skelter-All Rights Reserved.
            </div>
            <div class="social-media">
                <a href="#"><img src="facebook-icon.png" alt="Facebook"></a>
                <a href="#"><img src="twitter-icon.png" alt="Twitter"></a>
                <a href="https://www.instagram.com/skelter.store/"><img src="instagram-icon.png" alt="Instagram"></a>
            </div>
        </footer>
        </div>
        
    </div>
    <script type="text/javascript">
        const btn1 = document.querySelector("#btn1");
        const btnText = document.querySelector("#btnText");

        btn1.onclick = () => {
            btnText.innerHTML = "Thanks";
            btn1.classList.add("active");
        };
    </script>  
</body>
</html>
