<?php
session_start();
if(!isset($_SESSION['user'])){
  header("Location: login.php");
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" rel="stylesheet">
</head><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.3.0/css/all.min.css" integrity="sha512-ApSLB1Pd3/bZN8fWB/RG9YhN/7bd9Hkf3AGaE2mPfebjrxagjuBtx2GcgdqIlJkUzwylBo61r9Xa9NmgBI0swA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<body>



    <div id="Home">
      <div class="cover">
        <div class="flogo">
            <div class="logo">
            <p>🍕 Burger & Pizza</p></div>
            <div class="sub">
            <a href="#Home">Home</a>
            <a href="#Menu">Menu</a>
            <a href="#Offers">Offers</a>
            <a href="#About">About</a>
            <a href="#Contact">Contact</a>
          <button id="login" onclick="window.location= 'logout.php' ">logout</button>
            
            </div>
            <div class="box"><i class="fa-solid fa-bars"></i></div>
            <div class="cross"><i class="fa-solid fa-xmark"></i></div>
        </div>
      </div>
     
      <div class="img">
           <div class="heading"><h1>Wellcome...</h1></div><span id="pizza-animate"></span>
           <div class="detail-cover"><div class="detail"><p>IF you are Hungry and</p><p>want rest with Test..</p>
            <br><p id="weare">WE ARE GIVING YOU ASSURANCE </p><P>FOR SERVING PURE FRESH PIZZA </P>
          <div class="contactus">
            <a href="#Contact" ><button id="us"><p>Contact US ></p></button></a>
            <a href="#Menu"><button id="ordernow"><p>Order Now ></p></button></a>
          </div>
          </div></div>
      </div>
    </div>
    <div id="Menu">
      <h1>MENU</h1>
          <div class="menubox-cover">  
           <div class="menubox">
                        <div class="item">
                            <div class="veg-pizza" ></div>
                              <div class="title-cover">
                                <p>Veg-Pizza with
                                               more cheese</p>
                               <div class="add">$199 <button class="plus">ADD</button></div> 
                              </div>
                        </div>


      <div class="item">
      <div class="nonveg-pizza"></div>
      <div class="title-cover">
      <p>Nonveg-pizza with <br> extra chicks</p>
      <div class="add">$250 <button class="plus">ADD</button></div>
      </div>
      </div>

      <!-- <div class="item">
      <div class="peppsi"></div>
      <p>Pepsi</p>
      </div> -->

      <div class="item">
      <div class="paneer"></div>
      <div class="title-cover">
      <p>Paneer-pizza with high<br> protein diet</p>
      <div class="add">$269 <button class="plus">ADD</button></div>
      </div>
      </div>

      <div class="item">
      <div class="glass"></div>
      <div class="title-cover">
      <p>Kulhad-pizza with more corn & cheese</p>
      <div class="add">$140 <button class="plus">ADD</button></div>
      </div>
      </div>

      <div class="item">
      <div class="burger"></div>
      <div class="title-cover">
      <p>Burger with fresh tomato, and vegis</p>
      <div class="add">$99 <button class="plus">ADD</button></div>
      </div>
      </div>
      
      <div class="item">
      <div class="combo"></div>
      <div class="title-cover">
      <p>Combo <br>contain 1burrger,<br>1coldrink</p>
      <div class="add">$110 <button class="plus">ADD</button></div>
      </div>
      </div>
    </div>
   </div>
    </div>
    <!-- offer section -->
    <div id="Offers">
      <div class="section-title">
        <span></span>
        <h2>OFFERS</h2>
        <p>Enjoy our exclusive offers and discounts 
        <br>on your favourite pizza and fast food.</p>
      </div>
      <div class="basil"></div>
       <div class="basil2"></div>

      <div class="offer-container">
      <!-- card 1 -->
         <div class="offer-card">
          <div class="offer-image">
            <img src="Bestpizza.png" alt="">
          </div>
          <div class="first-cover">
          <h3>BUY 1 GET 1 FREE</h3>
          <P>Every Tuesday</P><p class="p">-----</p>

          <a href="#" class="offer-btn">
            Claim offer >
          </a>
          </div>
        </div>
         
        <!-- Card 2 -->
        <div class="offer-card">
          <div class="offer-image">
            <img src="Best 30Off.png" alt="">
          </div>
          <div class="first-cover">
          <h3> FLAT 30% OFF</h3>
          <P>Order Above $799</P>
          <p class="p">-----</p>

          <a href="#" class="offer-btn">
            Order Now  >
          </a>
        </div>
        </div>

        <!-- Card 3-->
        <div class="offer-card">
          <div class="offer-image">
            <img src="bestscooter.png" alt="">
          </div>
          <div class="first-cover">
          <h3>FREE DELIVERY</h3>
          <P>Order Above $399</P><p class="p">-----</p>

          <a href="#" class="offer-btn">
            Order Now  >
          </a>
          </div>
        </div>

        <!-- Card 4 -->
        <div class="offer-card">
          <div class="offer-image">
            <img src="bestcola.png" alt="">
          </div>
          <div class="first-cover">
          <h3>FREECOLD DRINK</h3>
          <P>With Any Large Pizza</P><p class="p">-----</p>

          <a href="#" class="offer-btn">
            Order Now  >
          </a>
          </div>
        </div>
      </div>

      <!-- family combo banner -->

      <div class="combo-banner">
       
        <div class="combo-content">

           <div class="delicious"></div>
           <h2>FAMILY COMBO</h2>

           <P>
             2 Medium Pizza + Garlic Bread + 2 Cold Drinks
           </P>

           <div class="price-box">
            <h3>$999</h3>
            <span>SAVE $300</span>

           </div>
        
           <a href="#" class="combo-btn">
            Order Combo ->
           </a>

        </div>
        <div class="combo-image"></div>

        
      </div>
    </div>
   </div>
    <div id="About">
      <div class="chef-pic">
      </div>
      <div class="ABOUT-TEXT">
        <p class="head">-- ABOUT US --</p>
        <h1>SERVING HAPPINESS</h1>
        <h1 id="date">SINCE 2020</h1>
         <i>_______________</i>
        <p id="para">At Burger & Pizza, we belive great food brings people together,
          <br>Every pizza is made with the freshest ingredients, rich cheese,<br>and
          authentic flavors.
        </p> 
        <p id="para">Our mission is to serve delicious food with fast delivery
          and <br>excellent customer service.
        </p>
        <div class="rating">
          <div class="rate-box">
            <div class="cook"><i class="fa-solid fa-leaf"></i></div>
            <div class="idea">
            <h3>FRESH 
              <BR>INGREDIENTS</h3>
            <p>We use only the freshest & quality ingredients.</p>
            </div>
          </div>
          <div class="rate-box">
            <div class="cook"><i class="fa-solid fa-truck-fast"></i></div>
            <div class="idea">
            <h3>FAST<br> DELIVERY</h3>
            <p>Delivery hot & fresh at your doorstep in 30 minutes.</p>
            </div>
          </div>

          <div class="rate-box">

            <div class="cook"><i class="fa-solid fa-star"></i></div>
            <div class="idea">
            <h3>TOP <br> RATED</h3>
            <P>Loved by thousands of customers. 4.9/5 <br>Rating</P>
            </div>
          </div>
          <div class="rate-box">
            <div class="cook"><i class="fa-solid fa-utensils"></i></div>
            <div class="idea">
            <h3>EXPERT <br>CHEFS</h3>
            <P>
              Our chefs are highly 
              <br>trained & passionates.
            </P>
            </div>
          </div>

        </div>
        <!-- <a href="#Menu"><button id="button">ORDER NOW -></button></a> -->
      </div>
      <div class="leaf"></div>
      <div class="leaf2"></div>
      
    </div>

    <div id="Contact">
      <div class="basil2"></div>
     <div class="contact-us">
         <p class="conthead">-- CONTACT US --</p>
        <h1>WE'D LOVE TO</h1>
        <h1 id="fill">HERE FROM YOU!</h1>
         <i id="line">_______________</i>
        <p id="MSG">Have a question,feedback,or just want to say hello?<br>
          Reach out to us using the form or contact details below.
        </p>
        <div class="info">
            <div class="information">
              <div class="logo"><i class="fa-solid fa-address-book"></i></div>
               <div class="lg"><h3>CALL US</h3>
               <p id="NUMBER">+91 9601913009</P>
                <P>Mon-Sun,9AM-11PM</P>
               </div>
            </div>
            <div class="information">
              <div class="logo"><i class="fa-solid fa-envelope"></i></div>
               <div class="lg"><h3>EMAIL US</h3>
                <p id="NUMBER">info@burgerpizza.com</P>
                <P>We reply within 24 hours</P>
               </div>
            </div>
            <div class="information">
              <div class="logo">
                <i class="fa-solid fa-magnifying-glass"></i>
              </div>
               <div class="lg"><h3>VISIT US</h3>
                <p id="NUMBER">181,jaijalaram ,
                  <br>Food city,india-395010
                </P>
                <P>We'd love to serve you!</P>
               </div>
            </div>
            <div class="information">
              <div class="logo"><i class="fa-solid fa-truck-fast"></i></div>
                <div class="lg"><h3>FAST DELIVERY</h3>
                 <p id="NUMBER">30-40 Minutes</P>
                <P>Hot & Fresh at your door</P>
                </div>
            </div>
        </div>  
     </div>
     
     
     <form>
      <h2>- SEND US A MESSAGE -</h2>
      <div class="name">
         <div>
           <i class="fa-solid fa-user"></i>
           <input type="text" placeholder="Your Name" required>
         </div>
          <div>
           <i class="fa-regular fa-envelope"></i>
           <input type="email" placeholder="Your Email" required>
         </div>
      </div>  
      
      <div class="mno">
        <div>
           <i class="fa-solid fa-phone"></i>
           <input type="text" placeholder="Your Phone Number" required>
         </div>
      </div>

      <div class="mno">
        <div>
        <i class="fa-regular fa-message"></i>
        <select>
          <option value="" selected>Subject</option>
          <option value="">for feedback</option>
          <option value="">order enquiry</option>
          <option value="">doubt</option>
          <option value="">others</option>
        </select>
           
         </div>

      </div>
      <div class="feedback">
        <div>
       <i class="fa-solid fa-pen"></i>
        <textarea  placeholder="Your Message.."></textarea>
        </div>
      </div>
      <div class="send">
        <a href="#" ><button id="se">SEND MESSAGE
          <i class="fa-regular fa-paper-plane"></i>

        </button>
        </a>
      </div>
     </form>
     
    </div>
 


   
<script src="script.js"></script>  
</body>
</html>