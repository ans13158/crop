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
    <title>Cropzonia</title>
    <script src="js/jssor.slider-22.0.7.min.js" type="text/javascript" data-library="jssor.slider" data-version="22.0.7"></script>
    <script type="text/javascript" src="js/carousal.js"></script>
    
    </head>

    <body style="background-color: white;">
        <div class="page" style="background-color: white;">

            <header>
                <div class="container well">
                    <a href="index.php" style="margin-left: 128px;">
                        <img src="images/logo-img.jpg">
                    </a>


                    <ul class="inline-list" style="margin-bottom: 0px;margin-right:-60px;">
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
                    <nav class="navbar navbar-default" style="left:185px;border-radius: 30px 0 30px 0;width:980px;background-color:rgba(104, 176, 77, 1)">
                        <div class="container-fluid">
                            <ul class="navbar-nav sf-menu" data-type="navbar" style="background-color:rgba(104, 176, 77, 1);height: 20px;line-height: 10px;padding-bottom: 10px;padding-top: 0px ">
                                <li  style="border-radius: 30px 0 0 0;width:162px;margin-left:-13px">
                                    <a href="./" style="color:white;font-size: 16px;padding: 0 10px;font-family: clarendon, serif;height: 20px;width:100%" >HOME</a>
                                </li>
                                <li style="width: 162px;padding-left:7px; ">
                                    <a href="about.php" style="color:white;font-size: 16px;padding: 0 10px;font-family: clarendon, serif;">ABOUT US</a>

                                    <li class="dropdown" style="width: 163px;padding-left:7px;"> 
                                        <a href="products.php" style="color:white;font-size: 16px;padding: 0 10px;font-family: clarendon, serif;">PRODUCT</a>
                                    </li>
                                    <li  style="width: 163px;padding-left:7px;">
                                        <a href="careers.php" style="color:white;font-size: 16px;padding: 0 10px;font-family: clarendon, serif;">CAREERS</a>
                                    </li>
                                    <li class="active"  style="width: 163px;padding-left:7px;">
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
                        
                        
                        <div class="row offs">
                            <div class="col-md-12 col-sm-12 col-xs-12 center991 wow fadeInLeft" data-wow-duration="2s" data-wow-delay="0.2s">
                                <br><br>
                            <div class="col-md-5 col-sm-12 col-xs-12   wow fadeInLeft table-responsive" data-wow-duration="2s" data-wow-delay="0.2s">
                                    <h4 style="color:#91b868">
                                        CONTACT US </h4>
                                        
                                <div class="contact-info center991 ">
                                    <strong><h4><adress class="h4" style="font-size: 22px; color: #91b868 ">CROPZONIA SEEDS PRIVATE LIMITED.<br></strong>
                                    </adress></h4>  
                                </div>
                         
                                <br>
                                <strong><p style="color:black;">Registered Office :</p> </strong> 
                           
                                         
                                    <p style="color:black;font-size:16px"> RZ-46 A, Gali No. 1,G Block,<br> Sita Puri II, Delhi, India 110052</p>
                                     
                                    

                                    
                                        <br>
                                    <strong><p style="color:black;">Corporate Office</p></strong>

                       
                        
                                    
                                         <p style="color:black;">Cropzonia House, Nariman Point, Marine Lines,Vinay K Shah Marg,<br> Nariman Point, Mumbai, India 400021</p>
                                     
                                   

                        </div>             
                                 
                        
                
                
                            <div class="container col-md-7 col-sm-12 col-xs-12 form-horizontal wow fadeIn" data-wow-duration="2s" data-wow-delay="0.6s" style="height: 100%; margin-top: 0px;padding-top: 0px;color:black">
                                
                                <?php require "contactForm.php" ; ?>
                            </div>
                        </div>
                 
                </section>
                     </main>
             <footer>
                <div class="container-fluid text-center" style="padding-top: 0px;margin-top:0px ">
                    <p class="copyright">
                        <a href=".././">Cropzonia</a> &#169; <span id="copyright-year"></span>.
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