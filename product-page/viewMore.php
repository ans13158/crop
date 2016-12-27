<?php
require "header.php" ;
?>
    <title>View Product</title>

    </head>

   <body style="background:url(../images/dew.peg);padding: 0px;margin-top: 0px;">
        <div class="page container" style="padding: 0px;margin-top:0px" style="width: 80%">

            <header>
                <div class="container well clearfix">
                    <a href="../index.php">
                        <img src="../images/logo-img.jpg">
                    </a>

                    <ul class="inline-list">
                        <li>
                            <a class="fa fa-facebook" href="https://www.facebook.com/cropzoniaseeds/"></a>
                        </li>
                        <li>
                            <a class="fa fa-twitter" href="https://twitter.com/CropzoniaSeeds"></a>
                        </li>
                        <li>
                            <a class="fa fa-instagram" href="https://www.instagram.com/cropzoniaseeds/?hl=en"></a>
                        </li>
                        <li>
                            <a class="fa fa-linkedin" href="https://www.linkedin.com/company/cropzonia-seeds-private-limited?trk=biz-companies-cym"></a>
                        </li>
                    </ul>
                </div>
                <div id="stuck_container" class="stuck_container" style="height: 10px;">
                    <nav class="container navbar navbar-static-top navbar" style="width:100%;background-color:#91b868; color:white;border-radius: 10px;height: 15px;  ">
                        <div class="container">
                            <ul class="navbar-nav sf-menu" data-type="navbar">
                                <li>
                                    <a href=".././">Home</a>
                                </li>
                                <li>
                                    <a href="../about.php">About us</a>

                                    <li class="active">
                                        <a href="../products.php">Products</a>
                                    </li>
                                    <li>
                                        <a href="../careers.php">Careers</a>
                                    </li>
                                    <li>
                                        <a href="../contacts.php">Contact Us</a>
                                    </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>

<main>
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