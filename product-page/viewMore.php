<?php
require "header.php" ;
?>
        <style type="text/css">
        .navbar-nav  >li:hover  {
            background-color: #1C8A43;
        }

        .navbar-nav>li.login:hover  {
            background-color: #1C8A43;
            /*padding-left: 70px;*/
            border-radius: 0 0 0px 0;
            margin-right: -20px;
            /*width:580px;*/


        }
    </style>
        <title> View Products</title>

        </head>

        <body style="background-color: white" >
            <div class="page container" style="padding: 0px;margin-top:0px" style="width: 80%;background-color: transparent;">

                <header>
                    <div class="container well">
                        <a href="index.php" style="margin-left: 188px;">
                            <img src="images/logo-img.jpg">
                        </a>


                        <ul class="inline-list" style="margin-bottom: 0px;">
                            <li>
                                <a href="https://www.instagram.com/cropzoniaseeds/?hl=en">
                                    <img src="images/insta-logo.png">
                                </a>
                            </li>

                            <li>
                                <a href="https://twitter.com/CropzoniaSeeds">
                                    <img src="images/logo-twitter.png">
                                </a>
                            </li>

                            <li>
                                <a href="">
                                    <img src="images/logo-youtube.png">
                                </a>
                            </li>

                            <li>
                                <a href="https://www.linkedin.com/company/cropzonia-seeds-private-limited?trk=biz-companies-cym">
                                    <img src="images/logo-linkedin.png">
                                </a>
                            </li>

                            <li>
                                <a href="https://www.facebook.com/cropzoniaseeds/">
                                    <img src="images/fb-logo.png">
                                </a>
                            </li>
                            
                            
                            
                        </ul>
                    </div>
                    <div id="stuck_container" class="stuck_container">
                        <nav class="navbar navbar-default" style="left:75px;border-radius: 30px 0 30px 0;width:980px;background-color:rgba(104, 176, 77, 1)">
                            <div class="container-fluid">
                                <ul class="navbar-nav sf-menu" data-type="navbar" style="background-color:rgba(104, 176, 77, 1);height: 20px;line-height: 20px;">
                                    <li  style="border-radius: 30px 0 0 0;width:162px;margin-left:-13px">
                                        <a href="./" style="color:white;font-size: 16px;padding: 0 10px;font-family: clarendon, serif;height: 20px;width:100%" >HOME</a>
                                    </li>
                                    <li style="width: 162px;padding-left:7px; ">
                                        <a href="about.php" style="color:white;font-size: 16px;padding: 0 10px;font-family: clarendon, serif;">ABOUT US</a>

                                        <li class="active" style="width: 163px;padding-left:7px;"> 
                                            <a href="products.php" style="color:white;font-size: 16px;padding: 0 10px;font-family: clarendon, serif;">PRODUCT</a>
                                        </li>
                                        <li  style="width: 163px;padding-left:7px;">
                                            <a href="careers.php" style="color:white;font-size: 16px;padding: 0 10px;font-family: clarendon, serif;">CAREERS</a>
                                        </li>
                                        <li   style="width: 163px;padding-left:7px;">
                                            <a href="contacts.php" style="color:white;font-size: 16px;padding: 0 0px;font-family: clarendon, serif;">CONTACT US</a>
                                        </li>

                                        <li class="login" style="width:140px;padding-left: 30px; ">
                                            <a href="" style="color:white;font-size: 16px;padding: 0 10px;font-family: clarendon, serif;">LOGIN</a>
                                        </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </header>
                <main >
                <section class="well8 ">
                    <div class="container-fluid">
                        
                       <?php

                       $url = $_GET['url'];
                       $url = "../" . $url; 
                       
                       ?>   
        <a href="../products.php" style="text-decoration: underline;" ><----Back to previous page</a>

                       <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight text-center" data-wow-duration="2s" data-wow-delay="0.2s">
                           <h3>F1 Hybrid VIKAS</h3>
                           <p> <strong>SKU: 364215376135191</strong></p>
                           <br>
                       </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight text-center" data-wow-duration="2s" data-wow-delay="0.2s">

                                    <img src="<?php echo $url; ?>" alt=""  style="height: 270px; width: 370px"/>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                                    <img src="<?php echo $url; ?>" alt=""  style="height: 270px; width: 370px"/>
                            </div>

                            <div class="col-md-4 col-sm-4 col-xs-12 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                                    <img src="<?php echo $url; ?>" alt=""  style="height: 270px; width: 370px"/>
                            </div>    
                         </div>  

                            <div class="col-md-12 col-sm-12 col-xs-12 wow fadeInRight text-center" data-wow-duration="2s" data-wow-delay="0.2s">
                               <h4> Cost : $43.32 </h4>
                                <br><br>
                        </div>      
                                    <h4 class="text-center" style="color:#91b868">PRODUCT INFO</h4><br>
                        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">

                                <p style="color:#91b868">
                                    I'm a product detail. I'm a great place to add more information about your product such as sizing, material, care and cleaning instructions. This is also a great space to write what makes this product special and how your customers can benefit from this item.</p>
                                                                        
                            </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                                <p style="color:#91b868">Semi-Determinate  
                                    plant habit
                                    Tolerance to ToLCV and Firmness is Very Good        
                                    Days to Maturity is 75-80 Days 
                                    Square round fruit shaped and Uniform Green
                                    Average weight of the fruit is 90-100 gm        
                                    Suitable for long distance transportation
                                    High yielding hybrid</p>
                                  
                            </div>

                        
                    </div>
                </section>
            </main>




             <footer>
                <div class="container text-center">
                    <p class="copyright">
                        <a href="../">Cropzonia</a> &#169; <span id="copyright-year"></span>.
                        <a class="text-primary" href="policy.php">Privacy Policy</a>
                    </p>
                </div>
            </footer>
            </div>

    </body>
    <noscript>
        <iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69" height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = '//www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-P9FT69');
    </script>
    <!-- End Google Tag Manager -->

    </html>