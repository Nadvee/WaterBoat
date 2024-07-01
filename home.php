<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Belanosima:wght@400;600;700&display=swap" rel="stylesheet">
    <title>WaterBoat</title>
<link rel="icon" href="images/boat.png">
<link rel="stylesheet" href="style.css">

</head>
<body>

    <nav>
        <img id="logo1" src="images/Group 6.png" alt="">
        <img id="logo2" src="images/Group 5.png" alt="">
        <img id="logo3" src="images/Group 3.png" alt="">
        <img id="logo4" src="images/Group 45.png" alt="">
        </nav>
    

    <div class="bar">
        
    <a class="bar4"  href="admin/index.php">Admin</a>
    <a class="bar3"  href="#">Home</a>
        <a class="bar2"  href="package.html">Services</a> 
        <a class="bar2"  href="offers.html">Offers</a>
        <a class="bar2"  href="blogs.html">Blogs</a>
       
        <a class="bar2"  href="contact.html">Contact Us</a>
        <a class="bar4"  href="index1.html">Get Started</a>

        </div>

    

<div class="sup">

    <div class="slider" style="z-index:-1;">
        <div class="list">
            <div class="item">
                <img src="images/boat1.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/boat1.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/boat1.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/boat1.jpg" alt="">
            </div>
            <div class="item">
                <img src="images/boat1.jpg" alt="">
            </div>
        </div>
        <div class="buttons">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>


    <div class="super_container">
       
        <section style="width:100%; height: auto; margin: -450px auto; float:left; z-index: 10000;">
            <div id="wrapper">
    
                <ul id="tabs">
                    <li class="active"><i class="fa-solid fa-hotel"></i>WaterBoat</li>
                    <li><i class="fa-solid fa-car"></i>Kayaking</li>
                    <li><i class="fa-light fa-plane-departure"></i>SpeedBoat</li>
                    <li><i class="fa-light fa-mountain-sun"></i>  Cruise  </li>
                    <li><i class="fa-light fa-ship"></i>Camping</li>
                   
                </ul>
                <ul id="tab">
                 
                 <li class="active">
                        <div class="search ">
                            <form action="">
                            
                            <div >
                            <label for="">Origin</label><br>
                            <input type="text"placeholder="From">
                            </div>
                            <div >
                                <label for="">Destination</label><br>
                                
                                <input type="text"placeholder="To">
                                </div>
                            <div >
                                <label for="">Date</label><br>
                                <input type="date"placeholder="Add Date">
                                </div>
                                <div >
                                   
                                    <button class="loc"  type="submit">
                                        <a style="text-decoration: none;color: white;" href="package.html">
                                            Inquire Now
                                        </a>
                                    </button>                         </form>
                            
                                </div>
                    </li>	
                   
                    <li>
                        <div class="search ">
                            <form action="">
                            
                            
                            <div >
                                <label for="">Location</label><br>
                                <input type="text"placeholder="To" >
                                </div>
                            <div >
                                <label for="">Date</label><br>
                                <input type="date"placeholder="Add Date">
                                </div>
                                <div >
                                   
                                    <button class="loc"  type="submit">
                                        <a style="text-decoration: none;color: white;" href="package.html">
                                            Inquire Now
                                        </a>
                                    </button>                            </form>
                            
                                </div>
                    </li>
              
                    <li>
                        <div class="search ">
                            <form action="">
                            
                            <div >
                            <label for="">Origin</label><br>
                            <input type="text"placeholder="From">
                            </div>
                            <div>
                                <label for="">Destination</label><br>
                                <input type="text"placeholder="To">
                                </div>
                            <div>
                                <label for="">Date</label><br>
                                <input type="date"placeholder="Add Date">
                                </div>
                                <div>
                                   
                                    <button class="loc"  type="submit">
                                        <a style="text-decoration: none;color: white;" href="package.html">
                                            Inquire Now
                                        </a>
                                    </button>                            </form>
                            
                                </div>
                    </li>
                  
                    <li>
                        <div class="search ">
                            <form action="">
                            
                            <div >
                            <label for="">Origin</label><br>
                            <select style="margin-right : 30px;" name="cru" id="cru">
<option value="Khulna">Khulna</option>
<option value="Barishal">Barishal</option>
<option value="Chattogram">Chattogram</option>


                                </select>
                            
                            </div>
                            <div >
                                <label for="">Destination</label><br>
                                <select style="margin-right : 50px;" name="cru" id="cru">
<option value="Cox's Bazar">Cox's Bazar</option>
<option value="Saint Martin">Saint Martin</option>

                                </select>
                                
                                </div>
                            <div >
                                <label for="">Date</label><br>
                                <input type="date"placeholder="Add Date"> 
          
                                </div>
                                <div >
                                   
                                    <button class="loc"  type="submit">
                                        <a style="text-decoration: none;color: white;" href="package.html">
                                            Inquire Now
                                        </a>
                                    </button>                          </form>
                            
                                </div>	
                    </li>
                  
                    <li>
                        <div class="search ">
                            <form action="">
                            
                           
                            <div >
                                <label for="">Location</label><br>
                                <input type="text"placeholder="To">
                                </div>
                            <div >
                                <label for="">Date</label><br>
                                <input type="date"placeholder="Add Date">
                                </div>
                                <div >
                                   
                                    <button class="loc"  type="submit">
                                        <a style="text-decoration: none;color: white;" href="package.html">
                                            Inquire Now
                                        </a>
                                    </button>                            </form>
                            
                                </div>
                    </li>
                   
                   
                 
                </ul>
            </div>
        </section>
    
    </div>
</div>

    <div>
        <p class="ab">Popular Destinations</p>
    
    </div>
    
    <section>
    <div class="ar">
    <div class="area">
    
    <img src="images/istock-474259514.jpg" alt="">
    
    <p class="xyz">Saint Martin</p>
    <p class="mar jkl">Bangladesh</p>
    
    <p class="hm"  type="submit">
        <a style="text-decoration: none;color: white;" href="home.html">
            Inquire Now
        </a>
    </p>
    </div>
    <div class="area">
    
        <img src="images/istock-474259514.jpg" alt="">
        
        <p class="xyz">Saint Martin</p>
        <p class="mar jkl">Bangladesh</p>
        
        <p class="hm"  type="submit">
            <a style="text-decoration: none;color: white;" href="home.html">
                Inquire Now
            </a>
        </p>
        </div>
        <div class="area">
    
            <img src="images/istock-474259514.jpg" alt="">
            
            <p class="xyz">Saint Martin</p>
            <p class="mar jkl">Bangladesh</p>
            
            <p class="hm"  type="submit">
                <a style="text-decoration: none;color: white;" href="home.html">
                    Inquire Now
                </a>
            </p>
            </div>
            </div>
    
    </section>
    
    <section class="pop">
    
        <div class="area">
        
        <img src="images/istock-474259514.jpg" alt="">
        
        <p class="xyz">Saint Martin</p>
        <p class="mar jkl">Bangladesh</p>
        
        <p class="hm"  type="submit">
            <a style="text-decoration: none;color: white;" href="home.html">
                Inquire Now
            </a>
        </p>
        </div>
        <div class="area">
        
            <img src="images/istock-474259514.jpg" alt="">
            
            <p class="xyz">Saint Martin</p>
            <p class="mar jkl">Bangladesh</p>
            
            <p class="hm"  type="submit">
                <a style="text-decoration: none;color: white;" href="home.html">
                    Inquire Now
                </a>
            </p>
            </div>
            <div class="area">
        
                <img src="images/istock-474259514.jpg" alt="">
                
                <p class="xyz">Saint Martin</p>
                <p class="mar jkl">Bangladesh</p>
                
                <p class="hm"  type="submit">
                    <a style="text-decoration: none;color: white;" href="home.html">
                        Inquire Now
                    </a>
                </p>
                </div>
              
        
        </section>

        <p class="ab">Offers</p>

       <section class="pop">
       
        <div class="area2">
        
            <img src="images/istock-474259514.jpg" alt="">
            
            <div><p class="xyz2">Saint Martin</p>
            <p class="mar jkl">Bangladesh</p>
            
            <p class="hm2"  type="submit">
                <a style="text-decoration: none;color: white;" href="offers.html">
                    Inquire Now
                </a>
            </p>
        </div>
        </div>
        

        <div class="area3">
        
            <img src="images/istock-474259514.jpg" alt="">
            
            <div><p class="xyz2">Saint Martin</p>
            <p class="mar jkl">Bangladesh</p>
            
            <p class="hm2">Inquire Now</p>
        </div>
        </div>


    </section>

    <section class="pop">
       
        <div class="area4">
        
            <img src="images/istock-474259514.jpg" alt="">
            
            <div><p class="xyz2">Saint Martin</p>
            <p class="mar jkl">Bangladesh</p>
            
            <p class="hm2"  type="submit">
                <a style="text-decoration: none;color: white;" href="offers.html">
                    Inquire Now
                </a>
            </p>
        </div>
        </div>
        

        <div class="area5">
        
            <img src="images/istock-474259514.jpg" alt="">
            
            <div><p class="xyz2">Saint Martin</p>
            <p class="mar jkl">Bangladesh</p>
            
            <p class="hm2"  type="submit">
                <a style="text-decoration: none;color: white;" href="offers.html">
                    Inquire Now
                </a>
            </p>
        </div>
        </div>


    </section>

    <button class="loc more"  type="submit">
        <a style="text-decoration: none;color: white;" href="offers.html">
            More Offers
        </a>
    </button>

    <div>
        <p class="ab">Blogs</p>
    
    </div>
    
    <section>
    <div class="ar">
    <div class="area11">
    
    <img src="images/istock-474259514.jpg" alt="">
    
    <p class="xyz">Saint Martin</p>
    <p class="mar jkl">Bangladesh</p>
    
    <p class="hm">Inquire Now</p>
    </div>
    <div class="area10">
    
        <img src="images/istock-474259514.jpg" alt="">
        
        <p class="xyz">Saint Martin</p>
        <p class="mar jkl">Bangladesh</p>
        
        <p class="hm">Inquire Now</p>
        </div>
        <div class="area10">
    
            <img src="images/istock-474259514.jpg" alt="">
            
            <p class="xyz">Saint Martin</p>
            <p class="mar jkl">Bangladesh</p>
            
            <p class="hm">Inquire Now</p>
            </div>
           

            <div class="area10">
    
                <img src="images/istock-474259514.jpg" alt="">
                
                <p class="xyz">Saint Martin</p>
                <p class="mar jkl">Bangladesh</p>
                
                <p class="hm">Inquire Now</p>
                </div>
                </div>
    
    </section>
    <button class="loc more1"  type="submit">
        <a style="text-decoration: none;color: white;" href="blog.html">
            More Blogs
        </a>
    </button>

    <footer>
    <div class="content">
      <div class="top">
        <div class="logo-details">
          <i class="fab fa-slack"></i>
          <span class="logo_name">WATERBOAT</span>
        </div>
        <div class="media-icons">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
          <a href="#"><i class="fab fa-linkedin-in"></i></a>
          <a href="#"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      <div class="link-boxes">
        <ul class="box">
          <li class="link_name">Company</li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Contact us</a></li>
          <li><a href="#">About us</a></li>
          <li><a href="#">Get started</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Services</li>
          <li><a href="#">WaterBoat</a></li>
          <li><a href="#">Kayaking</a></li>
          <li><a href="#">SpeedBoat</a></li>
          <li><a href="#">Cruise</a></li>
          <li><a href="#">Camping</a></li>
        </ul>
        <ul class="box">
          <li class="link_name">Account</li>
          <li><a href="#">Profile</a></li>
          <li><a href="#">My account</a></li>
          <li><a href="#">Prefrences</a></li>
          <li><a href="#">Purchase</a></li>
        </ul>
        <ul class="box">
          
        </ul>
        <ul class="box input-box">
          <li class="link_name">Subscribe</li>
          <li><input type="text" placeholder="Enter your email"></li>
          <li><input type="button" value="Subscribe"></li>
        </ul>
      </div>
    </div>
    <div class="bottom-details">
      <div class="bottom_text">
        <span class="copyright_text">Copyright © Mahedi Hasan Nadvee All rights reserved</span>
        <span class="policy_terms">
          <a href="#">Privacy policy</a>
          <a href="#">Terms & condition</a>
        </span>
      </div>
    </div>
  </footer>


    <script src="jquery.min.js"></script>
    <script src="script.js"></script>
</body>
</html>