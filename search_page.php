<!DOCTYPE html>
<?php session_start(); ?>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>H2KET LIBRARY</title>
    <link rel="shortcut icon" href="img/logo.ico">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/search.css">
    <script type="text/javascript" src="js/search.js"></script>
    <script type="text/javascript" src="js/Test.js"></script>
    <!-- <style type="text/css">

    </style> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
   <body onload="showCart();Cart();total_Cart()">
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="user-menu">
                        <ul>
                            <?php include_once 'checkAccount.php'; ?>
                            
                            <li><a href="cart.php"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gi??? h??ng c???a t??i</font></font></a></li>
                          
                            <?php include_once 'includes/login_logout.php'; ?>
                            
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ti???n T???: </font></font></span><span class="value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">VND</font></font></span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">VND</font></font></a></li>
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">USD</font></font></a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ng??n Ng???: </font></font></span><span class="value"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ti???ng Vi???t</font></font></span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ti???ng Vi???t</font></font></a></li>
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ti???ng Anh</font></font></a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="index.php"><img src="img/logo1.png" height="150px" width="150px"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gi??? H??ng</font></font><span class="cart-amunt"><font style="vertical-align: inherit;"><font id="TongTien" style="vertical-align: inherit;"></font></font></span> <i class="fa fa-shopping-cart"></i> <span class="product-count"><font style="vertical-align: inherit;"><font id="soLuong" style="vertical-align: inherit;">1</font></font></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div id="undefined-sticky-wrapper" class="sticky-wrapper" style="height: 60px;"><div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="index.php">TRANG CH???</a></li>
                        <li><a href="shop.php">S???N PH???M</a></li>
                        <li class="active"><a href="search_page.php?page=1">T??M KI???M S???N PH???N</a></li>
                        <li><a href="cart.php">GI??? H??NG</a></li>
                        <li><a href="information.php">TH??NG TIN</a></li>

                        <li><a href="contact.php">LI??N H???</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div></div> <!-- End mainmenu area -->
    
    < <!-- End Page title area -->

    
            <div style="text-align: center;font-size: 18px;margin-top: 10px">
             <b><i>Chi nh??nh  </i></b>
             <select id="dsChiNhanh">
                <!-- <option value="CN001">Chi Nh??nh 1</option>
                <option value="CN002">Chi Nh??nh 2</option>
                <option value="CN003">Chi Nh??nh 3</option> -->
             </select>
          </div>
            <div >
                <input style="margin: 8px 35%; width:30%;" class="form-control"  type="text" placeholder="T??m ki???m..." id="inputSearch">
            </div>
        
    
      <div class="single-product-area">

         <div class="zigzag-bottom"></div>

         <div class="container">
            
            <div class="row">
               <div  id="contentProduct"></div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="product-pagination text-center">
                        <nav>
                           <ul class="pagination" id="pageBar">
                              <!-- <li>1</li> -->
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2><span>H2KET OPEN LIBRARY</span></h2>
                        <p>N??i ????y c?? s??ch hay cho b???n !!!</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Kh??ch h??ng </h2>
                        <ul>
                            <li><a href="#">T??i kho???n</a></li>
                            <li><a href="#">L???ch s??? mua h??ng</a></li>
                            <li><a href="#">Danh s??ch mong mu???n</a></li>
                            <li><a href="#">Li??n h???</a></li>
                            <li><a href="#">Trang ?????u</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Danh m???c</h2>
                        <ul>
                            <li><a href="#">Lo???i s??ch</a></li>
                            <li><a href="#">Nh?? xu???t b???n</a></li>
                            <li><a href="#">T??c gi???</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Tin th??ng b??o</h2>
                        <p>????ng k?? nh???n tin c???a ch??ng t??i v?? nh???n c??c ??u ????i ?????c quy???n m?? b???n s??? kh??ng t??m th???y ??? b???t k??? n??i n??o kh??c. H??y ????ng k?? ngay!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Nh???p email c???a b???n">
                                <input type="submit" value="????ng k??">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">?? 2021 h2ket. </font><font style="vertical-align: inherit;"> All Rights Reserved. </font></font><a href="http://www.freshdesignweb.com" target="_blank"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">freshDesignweb.com</font></font></a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script async="" src="https://www.google-analytics.com/analytics.js"></script><script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</html>
<script>
   var cn;
   
     $(document).ready(function(){
      //load combobox chi nh??nh 
       $.ajax({
            url:"loadDSCN.php",
            success:function(result){
               $('#dsChiNhanh').html(result);
               cn=$('#dsChiNhanh').val();
               //html ph??n trang
              pagination(cn);
            }
        });

         //showContent m???i load trang
         $.ajax({
                   url:"Page.php", 
                   method:"POST",
                   data:{idPage : 1,cn:'CN001'}, 
                   success:function(result){ 
                       $('#contentProduct').html(result);
                   }
           });

        function pagination(cn){
         $.ajax({
            url:"pageBar.php",
            method:"POST",
            data:{cn:cn},
            success:function(result){
               $('#pageBar').html(result);
            }
          });
       }
       
          function fnLaunch(ma){ 
            var cn= $('#dsChiNhanh').val();
            var urls="single-product.php?id="+ma+"&cn="+cn;
            window.open(urls, "_blank");
            // window.focus();
         }
         
        $('#log_out').click(function(){
            $.ajax({
               url: 'logout.php',
               success:function(result){

               }
            });
         });


        $('#inputSearch').keyup(function(){
            var cnhanh=$('#dsChiNhanh').val();
            var tenSach = $('#inputSearch').val();
            
              $.ajax({
               url:"search_book.php", 
               method:"POST",
               data:{cn:cnhanh, tenSach: tenSach}, 
               success:function(result){ 
                   $('#contentProduct').html(result);
               }
           });
        });
    });
     
</script>
