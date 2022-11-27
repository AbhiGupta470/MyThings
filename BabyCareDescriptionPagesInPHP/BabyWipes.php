<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Image Change</title>
    <link rel = "stylesheet" href = "decription.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body >
    <header>
        <div class="A" style="display: flex; flex-direction:row9">
            <div id="header">
                <div class="row1">
                  <a href="dashboard.html"><img id="logo" src="logo.png" /></a>
                </div>
               
                <div class="row1">
                  <a class="headlink" href="aboutus.html"><h3>About Us</h3></a>
                </div>
                <div class="row1">
                  <a class="headlink" href="service.html"><h3>Service</h3></a>
                </div>
                <div class="row1">
                  <a class="headlink" href="contactus.html"><h3>Contact us</h3></a>
                </div>
                <div class="headlink" style="padding-top:20px;padding-left:10px">
                <?php 
                          // Checking is User Logged In
                          if(isset($_SESSION['authentication']))
                          {
                              ?>
                                  <h4>Welcome <?= $_SESSION['auth_user']['user_fullname']; ?> </h4>
                                  <h4>User Email Id: <?= $_SESSION['auth_user']['user_email']; ?></h4>
                                
                              <?php
                          }
                          ?>
                </div>
                <div class="row1">
               
                           <?php 
                              if(!isset($_SESSION['authentication']))
                              {
                                  ?>
                                  
                                  <center>
                                  <a href="signup.php" class="btn btn-danger mt-3"  style="text-decoration: none"><button class="glowing-button" style="margin-top:60px ;margin-left: 120px;">
                                  <span class="inner">Login</span>
                      </button></a>
                                  </center>
                               
                                  <?php
                              }
                          ?>
                                <?php 
                          // Checking is User Logged In
                          if(isset($_SESSION['authentication']))
                          {
                              ?>
                                 <center>
                                 <a href="logout.php" class="btn btn-danger mt-3"  style="text-decoration: none"><button class="glowing-button" style="margin-top:60px ;margin-left: 120px;">
                          <span class="inner">Logout</span>
                      </button></a>
                                 </center>
                                 
                                
                              <?php
                          }
                          ?>
                          
          
                </div>
                
                </div>
        </div>
    </header>
        

    <div class = "main-wrapper">
        <div class = "container">
            <div class = "product-div">
                <div class = "product-div-left">
                    <div class = "img-container">
                        <img src = "https://m.media-amazon.com/images/I/51am-Ok25vL._SL1000_.jpg" alt = "watch">
                    </div>
                    <div class = "hover-container">
                        <div><img src = "https://m.media-amazon.com/images/I/51am-Ok25vL._SL1000_.jpg"></div>
                        <div><img src = "https://www.bigbasket.com/media/uploads/p/l/40054348-3_6-johnsons-baby-baby-skincare-wipes-super-saver-pack.jpg"></div>
                        <div><img src = "https://images-cdn.ubuy.co.in/86LTA9GK-johnsons-gentle-all-over-baby-wipes.jpg"></div>
                        <div><img src = "https://m.media-amazon.com/images/I/61C7NbSdvaL._SX569_.jpg"></div>
                        <div><img src = "https://m.media-amazon.com/images/I/61vUG2KPY1S._SY450_PIbundle-6,TopRight,0,0_AA450SH20_.jpg"></div>
                        
                    </div>
                </div>
                <div class = "product-div-right">
                    <span class = "product-name"> Johnson's Baby-Wipes</span>
                    <span class = "product-price">₹ 454.50</span>
                    <div class = "product-rating">
                        <span><i class = "fas fa-star"></i></span>
                        <!-- <span><i class = "fas fa-star"></i></span> -->
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star"></i></span>
                        <span><i class = "fas fa-star-half-alt"></i></span>
                        <span>(350 ratings)</span>
                    </div>
                    
                    <p class = "product-description">Remove the dirt and grime from your baby’s skin with Johnson & Johnson Baby Wipes that are loaded with moisturizing lotion. It creates a protective barrier on the skin and doesn’t cause nappy rash, making it ideal even for the delicate skin of the newborn. 
                        </p>
                    <br>
                    <p class = "product-description">
                        <ul class="product-description">
                        <h4>Uses of Johnson's Baby-Wipes</h4>
                        
                        <li>Baby Skin Care</li>
                       <!-- <li>It keeps the baby comfortable throughout the day and the night due to its super soft material and leak-free formula.</li> 
                        <li>The baby can wear the diaper during journeys as it will keep the baby dry for long hours without worrying about changing the diaper now and then.
                        </li> -->
                       <!-- <li>If you have a history of ulcers or bleeding in the digestive tract.</li>  -->
                        <!-- <li>If you have an active clotting disorder or disorders related to the blood supply to the brain.</li>
                        <li>If you are experiencing a fluid loss (due to vomiting, diarrhoea or not drinking enough fluids).</li>
                        <li>If you have kidney or liver function problem.</li>
                        <li>If you are pregnant (last trimester), should not be given to children under 12 years of age (&lt40kgs).</li> -->
                        </ul>
                    </p>
                    <br>
                    <h4>Safety Information of Pamper-pants</h4>
                    <p class="product-description">
                        <span>Suitable for external use only.</span>
                        <span>Don’t flush the used wipes.</span>
                        <span>Store in a cool, dry place and away from sunlight.
                        </span>



                    </p>
                    <div class = "btn-groups">
                        <button type = "button" class = "add-cart-btn"><i class = "fas fa-shopping-cart"></i>add to cart</button>
                        <button type = "button" class = "buy-now-btn"><i class = "fas fa-wallet"></i>buy now</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer-basic">
    <footer>
       
        <ul class="list-inline">
            <li class="list-inline-item"><a href="home.php">Home</a></li>
            <li class="list-inline-item"><a href="service.html">Services</a></li>
            <li class="list-inline-item"><a href="aboutus.html">About</a></li>
            <li class="list-inline-item"><a href="contactus.html">Contact Us</a></li>
     
        </ul>
        <h2>Our Payment Partners</h2>
       
     <svg xmlns="http://www.w3.org/2000/svg" height="80" width="120" viewBox="-2.5242255 -1.318595 21.876621 7.91157"><g fill="none"><path d="M16.77137 1.55572c-.15275-.43674-.56903-.75036-1.05798-.75036h-.01023c-.31785 0-.6043.13229-.80821.34466-.20426-.21237-.49072-.34466-.80822-.34466h-.01023c-.2794 0-.5348.1023-.73095.27164V.99092c-.0067-.08573-.07726-.1531-.1644-.1531h-.75c-.09172 0-.1658.07408-.1658.16615v4.07282c0 .09207.07408.16616.1658.16616h.75c.08361 0 .1524-.06244.16334-.14323l-.00035-2.92382a.26293.26293 0 01.0014-.02928c.012-.13053.1076-.23777.2586-.25118h.13827c.06315.00564.11642.02787.1584.06138.06526.05186.1016.13159.1016.21908l.00282 2.90936c0 .09207.07443.1665.1658.1665h.75c.08856 0 .16052-.07055.16476-.15839l-.00035-2.92135c-.00036-.09596.0441-.18274.12206-.23425.03845-.0247.08467-.04127.13793-.04621h.13829c.16228.01411.26035.13723.26.28046l.00282 2.90548c0 .09207.07444.16615.1658.16615h.75001c.09137 0 .1658-.07408.1658-.16615V1.95259c0-.21308-.02398-.30374-.05679-.39687M11.69398.84843h-.42897V.15134C11.265.06773 11.19727 0 11.11366 0c-.00988 0-.0194.0014-.02857.00317-.47555.13053-.3803.78917-1.24848.84526h-.08432c-.0127 0-.02469.00176-.03633.00423h-.0007l.0007.00035c-.07409.01659-.12982.0822-.12982.16123v.75c0 .09137.07443.1658.16615.1658h.45262l-.0007 3.1803c0 .09066.07337.16404.16403.16404h.74154c.09031 0 .1637-.07338.1637-.16404l.00034-3.1803h.42016c.09137 0 .1658-.07443.1658-.1658v-.75c0-.09137-.07443-.1658-.1658-.1658" fill="#00BAF2"/><path d="M8.99555.84843h-.75c-.09137 0-.16546.07444-.16546.1658v1.55082c-.00176.09595-.07937.17286-.17568.17286h-.31397c-.09737 0-.17604-.07832-.17604-.17569l-.00282-1.54798c0-.09137-.07444-.1658-.1658-.1658h-.75001c-.09172 0-.1658.07443-.1658.1658v1.69968c0 .64558.46037 1.10596 1.1063 1.10596 0 0 .48472 0 .49954.00282.08749.00988.15557.08325.15557.17356 0 .08926-.06667.16228-.1531.17322-.00423.0007-.00811.00176-.0127.00247l-1.09679.00388c-.09172 0-.1658.07443-.1658.1658v.74966c0 .09172.07408.1658.1658.1658h1.22626c.64628 0 1.1063-.46002 1.1063-1.10595v-3.1369c0-.09137-.07408-.1658-.1658-.1658M1.73602 2.22268v.46285c0 .097-.07867.17603-.17568.17603l-.4759.00035v-.92745h.4759c.09701 0 .17568.07831.17568.17568zM1.80199.84825H.16263C.07267.84825 0 .92128 0 1.01088v.73484c0 .00141.00035.00282.00035.00423 0 .00353-.00035.00706-.00035.01023v3.32599c0 .09031.06773.16405.1517.16616h.7641c.09137 0 .1658-.07408.1658-.1658l.00283-1.13983h.71755c.60042 0 1.01882-.41663 1.01882-1.01953V1.8692c0-.6029-.4184-1.02094-1.01882-1.02094zM4.8479 3.98346v.11712c0 .00953-.0014.0187-.00281.02752a.17498.17498 0 01-.00706.02434c-.02329.06562-.0889.11324-.16687.11324h-.3122c-.09737 0-.17674-.07408-.17674-.1651v-.14146c0-.00176-.00036-.00353-.00036-.00529l.00036-.37641v-.11784l.00035-.00105c.00035-.09067.07902-.16404.17639-.16404h.3122c.09772 0 .17675.07373.17675.1651zM4.72868.85256h-1.0407c-.09207 0-.1665.06985-.1665.15557v.29175c0 .00176.00035.00388.00035.00564 0 .00212-.00036.00423-.00036.00635v.3997c0 .09067.07903.16475.1764.16475h.99094c.07832.01235.14041.0695.14923.15875v.09666c-.00882.08502-.0702.1471-.145.15416h-.4907c-.65264 0-1.1176.43357-1.1176 1.04246v.87207c0 .60537.3997 1.0361 1.04774 1.0361h1.35996c.24412 0 .44203-.18485.44203-.41239V1.97827c0-.69003-.3556-1.12571-1.2058-1.12571z" fill="#1F336B"/></g></svg>
      <svg xmlns="http://www.w3.org/2000/svg" height="80" width="120" xml:space="preserve" y="0" x="0" id="Layer_2" version="1.1" viewBox="-19.77372 -8.949675 171.37224 53.69805"><style id="style28" type="text/css">.st0{fill:#5f259f}</style><g transform="translate(.0248 -6.071)" id="g34"><circle r="17.9" id="ellipse30" cy="24" cx="17.9" class="st0" transform="matrix(.2298 -.9732 .9732 .2298 -9.5957 35.8754)"/><path id="path32" d="M90.5 34.2v-6.5c0-1.6-.6-2.4-2.1-2.4-.6 0-1.3.1-1.7.2V35c0 .3-.3.6-.6.6h-2.3c-.3 0-.6-.3-.6-.6V23.9c0-.4.3-.7.6-.8 1.5-.5 3-.8 4.6-.8 3.6 0 5.6 1.9 5.6 5.4v7.4c0 .3-.3.6-.6.6H92c-.9 0-1.5-.7-1.5-1.5zm9-3.9l-.1.9c0 1.2.8 1.9 2.1 1.9 1 0 1.9-.3 2.9-.8.1 0 .2-.1.3-.1.2 0 .3.1.4.2.1.1.3.4.3.4.2.3.4.7.4 1 0 .5-.3 1-.7 1.2-1.1.6-2.4.9-3.8.9-1.6 0-2.9-.4-3.9-1.2-1-.9-1.6-2.1-1.6-3.6v-3.9c0-3.1 2-5 5.4-5 3.3 0 5.2 1.8 5.2 5v2.4c0 .3-.3.6-.6.6h-6.3zm-.1-2.2h3.8v-1c0-1.2-.7-2-1.9-2s-1.9.7-1.9 2zm25.5 2.2l-.1.9c0 1.2.8 1.9 2.1 1.9 1 0 1.9-.3 2.9-.8.1 0 .2-.1.3-.1.2 0 .3.1.4.2.1.1.3.4.3.4.2.3.4.7.4 1 0 .5-.3 1-.7 1.2-1.1.6-2.4.9-3.8.9-1.6 0-2.9-.4-3.9-1.2-1-.9-1.6-2.1-1.6-3.6v-3.9c0-3.1 2-5 5.4-5 3.3 0 5.2 1.8 5.2 5v2.4c0 .3-.3.6-.6.6h-6.3zm-.1-2.2h3.8v-1c0-1.2-.7-2-1.9-2s-1.9.7-1.9 2zM66 35.7h1.4c.3 0 .6-.3.6-.6v-7.4c0-3.4-1.8-5.4-4.8-5.4-.9 0-1.9.2-2.5.4V19c0-.8-.7-1.5-1.5-1.5h-1.4c-.3 0-.6.3-.6.6v17c0 .3.3.6.6.6h2.3c.3 0 .6-.3.6-.6v-9.4c.5-.2 1.2-.3 1.7-.3 1.5 0 2.1.7 2.1 2.4v6.5c.1.7.7 1.4 1.5 1.4zm15.1-8.4V31c0 3.1-2.1 5-5.6 5-3.4 0-5.6-1.9-5.6-5v-3.7c0-3.1 2.1-5 5.6-5 3.5 0 5.6 1.9 5.6 5zm-3.5 0c0-1.2-.7-2-2-2s-2 .7-2 2V31c0 1.2.7 1.9 2 1.9s2-.7 2-1.9zm-22.3-1.7c0 3.2-2.4 5.4-5.6 5.4-.8 0-1.5-.1-2.2-.4v4.5c0 .3-.3.6-.6.6h-2.3c-.3 0-.6-.3-.6-.6V19.2c0-.4.3-.7.6-.8 1.5-.5 3-.8 4.6-.8 3.6 0 6.1 2.2 6.1 5.6zM51.7 23c0-1.6-1.1-2.4-2.6-2.4-.9 0-1.5.3-1.5.3v6.6c.6.3.9.4 1.6.4 1.5 0 2.6-.9 2.6-2.4V23zm68.2 2.6c0 3.2-2.4 5.4-5.6 5.4-.8 0-1.5-.1-2.2-.4v4.5c0 .3-.3.6-.6.6h-2.3c-.3 0-.6-.3-.6-.6V19.2c0-.4.3-.7.6-.8 1.5-.5 3-.8 4.6-.8 3.6 0 6.1 2.2 6.1 5.6zm-3.6-2.6c0-1.6-1.1-2.4-2.6-2.4-.9 0-1.5.3-1.5.3v6.6c.6.3.9.4 1.6.4 1.5 0 2.6-.9 2.6-2.4V23z" class="st0"/></g><path id="path36" d="M26.0248 13.229c0-.7-.6-1.3-1.3-1.3h-2.4l-5.5-6.3c-.5-.6-1.3-.8-2.1-.6l-1.9.6c-.3.1-.4.5-.2.7l6 5.7h-9.1c-.3 0-.5.2-.5.5v1c0 .7.6 1.3 1.3 1.3h1.4v4.8c0 3.6 1.9 5.7 5.1 5.7 1 0 1.8-.1 2.8-.5v3.2c0 .9.7 1.6 1.6 1.6h1.4c.3 0 .6-.3.6-.6v-14.3h2.3c.3 0 .5-.2.5-.5zm-6.4 8.6c-.6.3-1.4.4-2 .4-1.6 0-2.4-.8-2.4-2.6v-4.8h4.4z" fill="#fff"/></svg>  
      <svg xmlns="http://www.w3.org/2000/svg" height="80" width="120" class="main-header__logo-image" fill="#A1A1A1" viewBox="-65.39955 -43.28375 566.7961 259.7025"><path fill="#5f6368" d="M206.197 84.585v50.75h-16.1V10.005h42.7a38.61 38.61 0 0127.65 10.85 34.88 34.88 0 0111.55 26.45 34.72 34.72 0 01-11.55 26.6q-11.2 10.68-27.65 10.67h-26.6zm0-59.15v43.75h27a21.28 21.28 0 0015.93-6.48 21.36 21.36 0 000-30.63 21 21 0 00-15.93-6.65h-27zm102.9 21.35q17.85 0 28.18 9.54 10.33 9.54 10.32 26.16v52.85h-15.4v-11.9h-.7q-10 14.7-26.6 14.7-14.17 0-23.71-8.4a26.82 26.82 0 01-9.54-21q0-13.31 10.06-21.17 10.06-7.86 26.86-7.88 14.34 0 23.62 5.25v-3.68a18.33 18.33 0 00-6.65-14.25 22.8 22.8 0 00-15.54-5.87q-13.49 0-21.35 11.38l-14.18-8.93q11.7-16.8 34.63-16.8zm-20.83 62.3a12.86 12.86 0 005.34 10.5 19.64 19.64 0 0012.51 4.2 25.67 25.67 0 0018.11-7.52q8-7.53 8-17.67-7.53-6-21-6-9.81 0-16.36 4.73c-4.41 3.2-6.6 7.09-6.6 11.76zm147.73-59.5l-53.76 123.55h-16.62l19.95-43.23-35.35-80.32h17.5l25.55 61.6h.35l24.85-61.6z"/><path fill="#4285f4" d="M141.137 73.645a85.79 85.79 0 00-1.24-14.64h-67.9v27.73h38.89a33.33 33.33 0 01-14.38 21.88v18h23.21c13.59-12.53 21.42-31.06 21.42-52.97z"/><path fill="#34a853" d="M71.997 144.005c19.43 0 35.79-6.38 47.72-17.38l-23.21-18c-6.46 4.38-14.78 6.88-24.51 6.88-18.78 0-34.72-12.66-40.42-29.72H7.667v18.55a72 72 0 0064.33 39.67z"/><path fill="#fbbc04" d="M31.577 85.785a43.14 43.14 0 010-27.56v-18.55H7.667a72 72 0 000 64.66z"/><path fill="#ea4335" d="M71.997 28.505a39.09 39.09 0 0127.62 10.8l20.55-20.55A69.18 69.18 0 0071.997.005a72 72 0 00-64.33 39.67l23.91 18.55c5.7-17.06 21.64-29.72 40.42-29.72z"/></svg>
      <svg xmlns="http://www.w3.org/2000/svg" height="80" width="120" xml:space="preserve" y="0" x="0" id="Layer_1" version="1.1" viewBox="-126.24765 -74.35 1094.1463 446.1"><style id="style36" type="text/css">.st0{fill:#3d3d3c}.st1{fill:#70706e}</style><g transform="translate(-91.349 -85.3)" id="XMLID_1_"><g id="XMLID_13_"><path d="M98.1 340.7h6.3l-5.9 24.5c-.9 3.6-.7 6.4.5 8.2 1.2 1.8 3.4 2.7 6.7 2.7 3.2 0 5.9-.9 8-2.7 2.1-1.8 3.5-4.6 4.4-8.2l5.9-24.5h6.4l-6 25.1c-1.3 5.4-3.6 9.5-7 12.2-3.3 2.7-7.7 4.1-13.1 4.1-5.4 0-9.1-1.3-11.1-4s-2.4-6.8-1.1-12.2z" class="st0" id="XMLID_65_"/><path d="M129.5 381l10-41.9 19 24.6c.5.7 1 1.4 1.5 2.2.5.8 1 1.7 1.6 2.7l6.7-27.9h5.9l-10 41.8-19.4-25.1-1.5-2.1c-.5-.8-.9-1.5-1.2-2.4l-6.7 28h-5.9z" class="st0" id="XMLID_63_"/><path d="M173.7 381l9.6-40.3h6.4l-9.6 40.3z" class="st0" id="XMLID_61_"/><path d="M189.2 381l9.6-40.3h21.9l-1.3 5.6h-15.5l-2.4 10H217l-1.4 5.7h-15.5l-4.5 18.9h-6.4z" class="st0" id="XMLID_59_"/><path d="M218.2 381l9.6-40.3h6.4l-9.6 40.3z" class="st0" id="XMLID_57_"/><path d="M233.7 381l9.6-40.3h21.9l-1.3 5.6h-15.5l-2.4 10.1h15.5l-1.4 5.7h-15.5l-3.1 13H257l-1.4 5.9z" class="st0" id="XMLID_55_"/><path d="M263 381l9.6-40.3h8.6c5.6 0 9.5.3 11.6.9 2.1.6 3.9 1.5 5.3 2.9 1.8 1.8 3 4.1 3.5 6.8.5 2.8.3 6-.5 9.5-.9 3.6-2.2 6.7-4 9.5-1.8 2.8-4.1 5-6.8 6.8-2 1.4-4.2 2.3-6.6 2.9-2.3.6-5.8.9-10.4.9H263zm7.8-6h5.4c2.9 0 5.2-.2 6.8-.6 1.6-.4 3-1.1 4.3-2 1.8-1.3 3.3-2.9 4.5-4.9 1.2-1.9 2.1-4.2 2.7-6.8.6-2.6.8-4.8.5-6.7-.3-1.9-1-3.6-2.2-4.9-.9-1-2-1.6-3.5-2-1.5-.4-3.8-.6-7.1-.6h-4.6z" class="st0" id="XMLID_52_"/><path d="M330.5 362.9l-4.3 18.1h-6l9.6-40.3h9.7c2.9 0 4.9.2 6.2.5 1.3.3 2.3.8 3.1 1.6 1 .9 1.7 2.2 2 3.8.3 1.6.2 3.3-.2 5.2-.5 1.9-1.2 3.7-2.3 5.3-1.1 1.6-2.4 2.9-3.8 3.8-1.2.7-2.5 1.3-3.9 1.6-1.4.3-3.6.5-6.4.5h-3.7zm1.7-5.4h1.6c3.5 0 6-.4 7.4-1.2 1.4-.8 2.3-2.2 2.8-4.2.5-2.1.2-3.7-.8-4.5-1.1-.9-3.3-1.3-6.6-1.3H335z" class="st0" id="XMLID_49_"/><path d="M372.3 381l-2-10.4h-15.6l-7 10.4H341l29-41.9 9 41.9zm-13.8-15.9h10.9l-1.8-9.2c-.1-.6-.2-1.3-.2-2-.1-.8-.1-1.6-.1-2.5-.4.9-.8 1.7-1.3 2.5-.4.8-.8 1.5-1.2 2.1z" class="st0" id="XMLID_46_"/><path d="M388.2 381l4.4-18.4-8-21.8h6.7l5 13.7c.1.4.2.8.4 1.4.2.6.3 1.2.5 1.8l1.2-1.8c.4-.6.8-1.1 1.2-1.6l11.7-13.5h6.4L399 362.5l-4.4 18.4h-6.4z" class="st0" id="XMLID_44_"/><path d="M449.1 361.1c0-.3.1-1.2.3-2.6.1-1.2.2-2.1.3-2.9-.4.9-.8 1.8-1.3 2.8-.5.9-1.1 1.9-1.8 2.8l-15.4 21.5-5-21.9c-.2-.9-.4-1.8-.5-2.6-.1-.8-.2-1.7-.2-2.5-.2.8-.5 1.7-.8 2.7-.3.9-.7 1.9-1.2 2.9l-9 19.8h-5.9l19.3-42 5.5 25.4c.1.4.2 1.1.3 2 .1.9.3 2.1.5 3.5.7-1.2 1.6-2.6 2.8-4.4.3-.5.6-.8.7-1.1l17.4-25.4-.6 42h-5.9z" class="st0" id="XMLID_42_"/><path d="M459.7 381l9.6-40.3h21.9l-1.3 5.6h-15.5l-2.4 10.1h15.5l-1.4 5.7h-15.5l-3.1 13H483l-1.4 5.9z" class="st0" id="XMLID_40_"/><path d="M488.9 381l10-41.9 19 24.6c.5.7 1 1.4 1.5 2.2.5.8 1 1.7 1.6 2.7l6.7-27.9h5.9l-10 41.8-19.4-25.1-1.5-2.1c-.5-.8-.9-1.5-1.2-2.4l-6.7 28h-5.9z" class="st0" id="XMLID_38_"/><path d="M554 346.2l-8.3 34.7h-6.4l8.3-34.7h-10.4l1.3-5.6h27.2l-1.3 5.6z" class="st0" id="XMLID_36_"/><path d="M560.7 372.9l5.7-2.4c.1 1.8.6 3.2 1.7 4.1 1.1.9 2.6 1.4 4.6 1.4 1.9 0 3.5-.5 4.9-1.6 1.4-1.1 2.3-2.5 2.7-4.3.6-2.4-.8-4.5-4.2-6.3-.5-.3-.8-.5-1.1-.6-3.8-2.2-6.2-4.1-7.2-5.9-1-1.8-1.2-3.9-.6-6.4.8-3.3 2.5-5.9 5.2-8 2.7-2 5.7-3.1 9.3-3.1 2.9 0 5.2.6 6.9 1.7 1.7 1.1 2.6 2.8 2.9 4.9l-5.6 2.6c-.5-1.3-1.1-2.2-1.9-2.8-.8-.6-1.8-.9-3-.9-1.7 0-3.2.5-4.4 1.4-1.2.9-2 2.1-2.4 3.7-.6 2.4 1.1 4.7 5 6.8.3.2.5.3.7.4 3.4 1.8 5.7 3.6 6.7 5.4 1 1.8 1.2 3.9.6 6.6-.9 3.8-2.8 6.8-5.7 9.1-2.9 2.2-6.3 3.4-10.3 3.4-3.3 0-5.9-.8-7.7-2.4-2-1.6-2.9-3.9-2.8-6.8z" class="st0" id="XMLID_34_"/><path d="M607.8 381l9.6-40.3h6.4l-9.6 40.3z" class="st0" id="XMLID_32_"/><path d="M623.4 381l10-41.9 19 24.6c.5.7 1 1.4 1.5 2.2.5.8 1 1.7 1.6 2.7l6.7-27.9h5.9l-10 41.8-19.4-25.1-1.5-2.1c-.5-.8-.9-1.5-1.2-2.4l-6.7 28h-5.9z" class="st0" id="XMLID_30_"/><path d="M688.5 346.2l-8.3 34.7h-6.4l8.3-34.7h-10.4l1.3-5.6h27.2l-1.3 5.6z" class="st0" id="XMLID_28_"/><path d="M695.4 381l9.6-40.3h22l-1.3 5.6h-15.5l-2.4 10.1h15.5l-1.4 5.7h-15.5l-3.1 13h15.5l-1.4 5.9z" class="st0" id="XMLID_26_"/><path d="M734.9 362.9l-4.3 18h-6l9.6-40.3h8.9c2.6 0 4.6.2 5.9.5 1.4.3 2.5.9 3.3 1.7 1 1 1.6 2.2 1.9 3.8.3 1.5.2 3.2-.2 5.1-.8 3.2-2.1 5.8-4.1 7.6-2 1.8-4.5 2.9-7.5 3.3l9.1 18.3h-7.2l-8.7-18zm1.6-5.1h1.2c3.4 0 5.7-.4 7-1.2 1.3-.8 2.2-2.2 2.7-4.3.5-2.2.3-3.8-.7-4.7-1-.9-3.1-1.4-6.3-1.4h-1.2z" class="st0" id="XMLID_23_"/><path d="M755.4 381l9.6-40.3h21.9l-1.3 5.6h-15.5l-2.4 10h15.5l-1.4 5.7h-15.5l-4.5 18.9h-6.4z" class="st0" id="XMLID_21_"/><path d="M808.2 381l-2-10.4h-15.6l-7 10.4h-6.7l29-41.9 9 41.9zm-13.9-15.9h10.9l-1.8-9.2c-.1-.6-.2-1.3-.2-2-.1-.8-.1-1.6-.1-2.5-.4.9-.8 1.7-1.3 2.5-.4.8-.8 1.5-1.2 2.1z" class="st0" id="XMLID_18_"/><path d="M856.5 350.5c-1.4-1.6-3.1-2.8-4.9-3.5-1.8-.8-3.8-1.2-6.1-1.2-4.3 0-8.1 1.4-11.5 4.2-3.4 2.8-5.6 6.5-6.7 11-1 4.3-.6 7.9 1.4 10.8 1.9 2.8 4.9 4.2 8.9 4.2 2.3 0 4.6-.4 6.9-1.3 2.3-.8 4.6-2.1 7-3.8l-1.8 7.4c-2 1.3-4.1 2.2-6.3 2.8-2.2.6-4.4.9-6.8.9-3 0-5.7-.5-8-1.5s-4.2-2.5-5.7-4.5c-1.5-1.9-2.4-4.2-2.8-6.8-.4-2.6-.3-5.4.5-8.4.7-3 1.9-5.7 3.5-8.3 1.6-2.6 3.7-4.9 6.1-6.8 2.4-2 5-3.5 7.8-4.5s5.6-1.5 8.5-1.5c2.3 0 4.4.3 6.4 1 1.9.7 3.7 1.7 5.3 3.1z" class="st0" id="XMLID_16_"/><path d="M857.1 381l9.6-40.3h21.9l-1.3 5.6h-15.5l-2.4 10.1h15.5l-1.4 5.7H868l-3.1 13h15.5L879 381z" class="st0" id="XMLID_14_"/></g><g id="XMLID_2_"><g id="XMLID_6_"><path d="M740.7 305.6h-43.9l61-220.3h43.9z" class="st1" id="XMLID_11_"/><g id="XMLID_9_"><path d="M717.9 92.2c-3-4.2-7.7-6.3-14.1-6.3H462.6l-11.9 43.2h219.4l-12.8 46.1H481.8v-.1h-43.9l-36.4 131.5h43.9l24.4-88.2h197.3c6.2 0 12-2.1 17.4-6.3 5.4-4.2 9-9.4 10.7-15.6l24.4-88.2c1.9-6.6 1.3-11.9-1.7-16.1z" class="st1" id="XMLID_10_"/></g><path d="M375.9 291.8c-2.4 8.7-10.4 14.8-19.4 14.8H130.2c-6.2 0-10.8-2.1-13.8-6.3-3-4.2-3.7-9.4-1.9-15.6l55.2-198.8h43.9l-49.3 177.6h175.6l49.3-177.6h43.9z" class="st1" id="XMLID_7_"/></g><g id="XMLID_3_"><path id="XMLID_5_" fill="#098041" d="M816.3 306.5l61.2-220.8L933 196.1z"/><path id="XMLID_4_" fill="#e97626" d="M777.2 306.5l61.3-220.8L894 196.1z"/></g></g></g></svg>
      
      
      <p class="copyright">Epharm © 2022</p>

    </footer>
</div>
  
        

    <script src = "script.js"></script>
</body>
</html>