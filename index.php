<!DOCTYPE html>
<?php session_start(); ?>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<style>
    .new{
        background-color:darkturquoise;
    }
</style>
<html lang="en" class="new" >
  <head class="new">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> H2KET LIBRARY</title>
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
    <script type="text/javascript" src="js/Test.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body onload="Cart()">
   
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
                        <a href="cart.php">Gi??? H??ng<span id="TongTien" class="cart-amunt"></span> <i class="fa fa-shopping-cart"></i> <span id="soLuong" class="product-count">1</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    
    <div class="mainmenu-area">
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
                        <li class="active"><a href="index.php">TRANG CH???</a></li>
                        <li><a href="shop.php">S???N PH???M</a></li>
                        <li><a href="search_page.php">T??M KI???M S???N PH???N</a></li>
                        <li><a href="cart.php">GI??? H??NG</a></li>
                        <li><a href="information.php">TH??NG TIN</a></li>
                        <li><a href="contact.php">LI??N H???</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="images/sach 1.jpg" alt="Slide">
						
					</li>
					<li><img src="images/sach 2.jpg" alt="Slide">
						
					</li>
					<li><img src="images/sach 3.jpg" alt="Slide">
						
					</li>
					<li><img src="images/sach 4.jpg" alt="Slide">
						
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>M?????n ?????n 7 ng??y</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-pencil"></i>
                        <p>M?????n s??ch d??? d??ng</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>????ng k?? nhanh</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-book"></i>
                        <p>L?????ng s??ch ????? s???</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">S???n Ph???m M???i</h2>
                        <div class="product-carousel">
                            <?php
                                include_once "dbconnect.php";
                                $result=new Connection();
                                $db=$result->query("select s.ID_Sach,s.TenSach,s.Gia,s.hinhAnh,sl.ID_ChiNhanh from sl_sach sl join sach s on sl.ID_Sach=s.ID_Sach where sl.ID_ChiNhanh='CN001' and sl.SL_Ton>0 ORDER by ID_Sach DESC limit 0, 6");
                                if ($db->columnCount()>0){
                                    foreach ($db as $arr){
                                        $id=$arr[0];
                                        $name=$arr[1];
                                        $price=$arr[2];
                                        $image=$arr[3];
                                        $cn=$arr[4];
                                        //$price_formated=number_format($price,0,'.','.');
                                        echo "<div class='single-product'>
                                                <div class='product-f-image'>
                                                    <img src='$image' alt=''>
                                                         <div class='product-hover'>
                                                             <a style='cursor:pointer' class='add-to-cart-link' onclick='addCart(\"$id\",\"$name\",true,\"$cn\",\"$image\")'><i class='fa fa-shopping-cart'></i> Th??m v??o gi???</a>
                                                             <a href='single-product.php?id=$id&cn=CN001' class='view-details-link'><i class='fa fa-link'></i> Xem chi ti???t</a>
                                                        </div>
                                                </div>
                                
                                                <h2><p onclick='fnLaunch(\"$id\",\"$cn\");' style='cursor: pointer;'>$name</p></h2>
                                
                                                <div class='product-carousel-price'>
                                                    <ins>$price <u>??</u></ins>
                                                </div> 
                                            </div>";
                                    }
                                }
                                
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="images/Logo_nxb_Kim_Dong.png" style="width: 150px;height: 150px" alt="">
                            <img src="images/nha_xuat_ban_DHSP.png" style="width: 150px;height: 150px" alt="">
                            <img src="images/nha_xuat_ban_tri_thuc.png" style="width: 150px;height: 150px" alt="">
                            <img src="images/nha_xuat_ban_tre.png" style="width: 150px;height: 150px" alt="">
                            <img src="images/nha_xuat_ban_van_hoc.jpg" alt="" style="width: 150px;height: 150px">
                            <img src="images/nha_xuat_ban_BSV.jpg" alt=""
                            style="width: 150px;height: 150px">
                            <img src="images/Logo_nxb_Kim_Dong.png" style="width: 150px;height: 150px" alt="">
                            <img src="images/nha_xuat_ban_DHSP.png" style="width: 150px;height: 150px" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">B??n ch???y nh???t</h2>
                        <a href="" class="wid-view-more">Xem t???t c???</a>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=023&cn=CN001"><img src="./images/chuc-mot-ngay-tot-lanh.jpg" alt="" class="product-thumb"></a>
                            <h2><p onclick="fnLaunch('023','CN001');" style="cursor: pointer;">Ch??c M???t Ng??y T???t L??nh</p></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>74.000 <u>??</u></ins> <!-- <del>99.000 <u>??</u></del> -->
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=001&cn=CN001"><img src="./images/DacNhanTam.jpg" alt="" class="product-thumb"></a>
                            <h2><p onclick="fnLaunch('001','CN001');" style="cursor: pointer;">?????c Nh??n T??m (Kh??? L???n)</p></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>38.000 <u>??</u></ins> <!-- <del>76.000 <u>??</u></del> -->
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=007&cn=CN001"><img src="./images/5cm.jpg" alt="" class="product-thumb"></a>
                            <h2><p onclick="fnLaunch('007','CN001');" style="cursor: pointer;">5 Centimet Tr??n Gi??y</p></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>35.000 <u>??</u></ins> <!-- <del>50.000 <u>??</u></del> -->
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Xem g???n ????y</h2>
                        <a href="#" class="wid-view-more">Xem t???t c???</a>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=025&cn=CN001"><img src="./images/kheo-an-noi-se-co-duoc-thien-ha.jpg" alt="" class="product-thumb"></a>
                            <h2><p onclick="fnLaunch('025','CN001');" style="cursor: pointer;">Kh??o ??n N??i S??? C?? ???????c Thi??n H???</p></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>44.000 <u>??</u></ins> <!-- <del>110.000 <u>??</u></del> -->
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=017&cn=CN001"><img src="./images/mat-biec.jpg" alt="" class="product-thumb"></a>
                            <h2><p onclick="fnLaunch('017','CN001');" style="cursor: pointer;">M???t bi???c</p></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>82.500 <u>??</u></ins> <!-- <del>110.000 <u>??</u></del> -->
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=024&cn=CN001"><img src="./images/tuoi-tre-khong-tri-hoan.jpg" alt="" class="product-thumb"></a>
                            <h2><p onclick="fnLaunch('024','CN001');" style="cursor: pointer;">Tu???i Tr??? Kh??ng Tr?? Ho??n</p></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>52.800 <u>??</u></ins> <!-- <del>88.000 <u>??</u></del> -->
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">S???n ph???m HOT</h2>
                        <a href="#" class="wid-view-more">Xem t???t c???</a>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=026&cn=CN001"><img src="./images/that-tich-khong-mua.jpg" alt="" class="product-thumb"></a>
                            <h2><p onclick="fnLaunch('026','CN001');" style="cursor: pointer;">Th???t T???ch Kh??ng M??a</p></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>59.250 <u>??</u></ins> <!-- <del>79.000 <u>??</u></del> -->
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=010&cn=CN001"><img src="./images/luyen-sieu-tri-nho.jpg" alt="" class="product-thumb"></a>
                            <h2><p onclick="fnLaunch('010','CN001');" style="cursor: pointer;">Luy???n Si??u Tr?? Nh??? T??? V???ng Ti???ng Anh</p></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>94.000 <u>??</u></ins> <!-- <del>188.000 <u>??</u></del> -->
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php?id=003&cn=CN001"><img src="./images/CongPhaToan2.jpg" alt="" class="product-thumb"></a>
                            <h2><p onclick="fnLaunch('003','CN001');" style="cursor: pointer;">C??ng Ph?? To??n 2</p></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>139.000 <u>??</u></ins> <!-- <del>179.000 <u>??</u></del> -->
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End product widget area -->
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                    <h2><span>H2KET OPEN LIBRARY</span></h2>
                        <p>N??i d??y c?? s??ch hay cho b???n !!!</p>
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
                        <p>&copy; 2021 h2ket. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
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
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
    <script type="text/javascript">
         function fnLaunch(ma,cn)
         { 
            var urls="single-product.php?id="+ma+"&cn="+cn;
            var win=window.open(urls, "_self");
            window.focus();

       }
      </script>
  </body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $('#log_out').click(function(){
            $.ajax({
               url: 'logout.php',
               success:function(result){

               }
            });
         });
    });
</script>