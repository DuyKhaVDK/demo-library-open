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
    <style type="text/css">

    .comment-wrapper .panel-body {
        max-height:650px;
        overflow:auto;
    }

    .comment-wrapper .media-list .media img {
        width:64px;
        height:64px;
        border:2px solid #e5e7e8;
    }

    .comment-wrapper .media-list .media {
        border-bottom:1px dashed #efefef;
        margin-bottom:25px;
    }
    .panel{
        border: none;
    }

</style>


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
                            
                            <li><a href="cart.php"><i class="fa fa-user"></i> Gi??? h??ng c???a t??i</a></li>
                            
                            <?php include_once 'includes/login_logout.php'; ?>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Ti???n t??? :</span><span class="value">VND </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">VND</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </li>

                            <li class="dropdown dropdown-small">
                                <a data-toggle="dropdown" data-hover="dropdown" class="dropdown-toggle" href="#"><span class="key">Ng??n ng??? :</span><span class="value">Ti???ng Vi???t </span><b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Ti???ng Vi???t</a></li>
                                    <li><a href="#">Ti???ng Anh</a></li>
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
                        <a href="cart.php">Gi??? H??ng - <span class="cart-amunt">VND</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">1</span></a>
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
                        <li><a href="index.php">TRANG CH???</a></li>
                        <li><a href="shop.php">S???N PH???M</a></li>
                        <li><a href="search_page.php">T??M KI???M S???N PH???N</a></li>
                        <li class="active"><a href="single-product.php">CHI TI???T S???N PH???M</a></li>
                        <li><a href="cart.php">GI??? H??NG</a></li>
                         <li><a href="information.php">TH??NG TIN</a></li>
                        <li><a href="contact.php">LI??N H???</a></li>

                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Chi Ti???t S???n Ph???m</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C??c s???n ph???m</font></font></h2>
                        <div class="thubmnail-recent">
                            <img src="images/CongPhaToan2.jpg" class="recent-thumb" alt="">
                            <h2><p onclick="fnLaunch('003','CN001');" style="cursor: pointer;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C??ng Ph?? To??n 2</font></font></p></h2>
                            <div class="product-sidebar-price">
                                <ins><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">139.000 VND</font></font></ins> <!-- <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">179.000 VND</font></font></del> -->
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="images/CongPhaToan3.jpg" class="recent-thumb" alt="">
                            <h2><p onclick="fnLaunch('008','CN001');" style="cursor: pointer;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">C??ng Ph?? To??n 3</font></font></p></h2>
                            <div class="product-sidebar-price">
                                <ins><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">149.000 VND</font></font></ins> <!-- <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">189.000 VND</font></font></del> -->
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="images/DacNhanTam.jpg" class="recent-thumb" alt="">
                            <h2><p onclick="fnLaunch('001','CN001');" style="cursor: pointer;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">?????c Nh??n T??m</font></font></p></h2>
                            <div class="product-sidebar-price">
                                <ins><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">38.000 VND</font></font></ins> <!-- <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">76.000 VND</font></font></del> -->
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="images/luyen-sieu-tri-nho.jpg" class="recent-thumb" alt="">
                            <h2><p onclick="fnLaunch('010','CN001');" style="cursor: pointer;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Luy???n Si??u Tr?? T??? V???ng Ti???ng Anh</font></font></p></h2>
                            <div class="product-sidebar-price">
                                <ins><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">94.000 VND</font></font></ins> <!-- <del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">188.000 VND</font></font></del> -->
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">B??i ????ng g???n ????y</font></font></h2>
                        <ul>
                            <li><a href="single-product.php?id=015&cn=CN001"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">M??nh L?? C??, Vi???c C???a M??nh L?? B??i</font></font></a></li>
                            <li><a href="single-product.php?id=016&cn=CN001"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tony Bu???i S??ng - Tr??n ???????ng B??ng</font></font></a></li>
                            <li><a href="single-product.php?id=001&cn=CN001"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">?????c Nh??n T??m</font></font></a></li>
                            <li><a href="single-product.php?id=010&cn=CN001"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Luy???n Si??u Tr?? Nh???</font></font></a></li>
                            <li><a href="single-product.php?id=009&cn=CN001"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">T??i Th???y Hoa V??ng Tr??n C??? Non</font></font></a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Trang ch???</a>
                            <a href="">T??n danh m???c</a>
                            <a href="" id="link"></a>
                        </div>
                        <?php
                            include_once "dbconnect.php";
                            $id=$_GET['id'];
                            $cn=$_GET['cn'];
                            $result = new Connection();
                            $db = $result->query("Select s.*,sl.SL_Ton from sach s join sl_sach sl on s.ID_Sach=sl.ID_Sach where sl.ID_ChiNhanh='$cn' and s.ID_Sach='$id'");
                            if ($db->columnCount()>0){
                                foreach ($db as $arr) {
                                    $id=$arr[0];
                                    $name=$arr[3];
                                    $price=$arr[4];
                                    $author=$arr[5];
                                    $image=$arr[7];
                                    $content=$arr[6];
                                    $slTon=$arr[9];
                                    echo "<div class='row'>
                                            <div class='col-sm-12'>
                                                <div class='product-images'>
                                                    <div class='product-main-img'>
                                                    <img src='$image' alt='' id='mage' style='float: left;width: 250px;''>
                                                    <h2 class='product-name' id='name'>$name</h2>
                                                    <div class='product-inner-price'>
                                                        <ins>$price <u id='price'>??</u></ins>
                                                        <font>S??? l?????ng t???n kho: $slTon</font>
                                                    </div>
                                                     <form action='' class='cart'>
                                            <div class='quantity'>
                                                <input id='amount' type='number' size='4' class='input-text qty text' title='Qty' value='1' name='quantity' min='1' step='1'>
                                            </div>
                                        </form>   
                                            <button class='add_to_cart_button' type='submit' onclick='addCart(\"$id\",\"$name\",false,\"$cn\",\"$image\")'>TH??M V??O GI???</button>

                                        <div class='product-inner-category'>
                                            <p>T??c gi???: <a href='' id='author'>$author</a></p>
                                        </div>
                                    </div>
                                    </div>

                            </div>
                        </div>";
                                }
                            }
                        ?>

                        <div class="col-sm-12">
                            <div class="product-inner"> 

                                <div role="tabpanel">
                                    <ul class="product-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">M?? t???</a></li>
                                        <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">????nh gi??</a></li>
                                        <li role="presentation"><a href="#comment" aria-controls="comment" role="tab" data-toggle="tab">B??nh lu???n</a></li>
                                    </ul>
                                    <div class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home">
                                            <h2>Gi???i thi???u t??c ph???m</h2>  
                                            <p id="content">
                                                <?php
                                                echo $content;
                                                ?>
                                        </div>
                                    
                                        <div role="tabpanel" class="tab-pane fade" id="profile">
                                            <form method="POST">
                                            <div class="submit-review">
                                                
                                                <h2><label for="review">????nh gi?? c???a b???n</label> <textarea name="review" id="" cols="30" rows="10"></textarea></h2>
                                                <p><input type="submit" name="rating" value="G???i"></p>
                                            </div>
                                            </form>
                                        <?php

                                            if(isset($_POST['rating']) && $_SESSION['ID']==NULL){
                                                echo "<script>alert('B???n ch??a ????ng nh???p vui l??ng ????ng nh???p ????? ????nh gi?? s???n ph???m n??y!');</script>";
                                            }
                                            else {
                                                if(isset($_POST['rating']) && $_POST['review']!=NULL){
                                                    $noidung = $_POST['review'];
                                                    $id_sach =$_GET['id'];
                                                    $id_docgia = $_SESSION['ID'];
                                                    $tablename ='binhluan';
                                                    
                                                    include_once 'dbconnect.php';
                                                    $result = new Connection();
                                                    $query ="insert into $tablename values ('$id_docgia','$id_sach','$noidung',now())";
                                                    $result->query($query);
                                                }
                                            }  
                                        ?>
                

                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="comment">
                                           <div class="row bootstrap snippets">
                                            <div class="">
                                                <div class="comment-wrapper">
                                                    <div class="panel panel-info">
                                                        <div class="panel-body">
                                                            <ul class="media-list">
                                                                
                    <?php 
                        $id_sach =$_GET['id'];
                        include_once 'dbconnect.php';
                        $query = "select N.HoTen,B.*,N.HinhAnh from binhluan as B join nguoidung as N on N.ID = B.ID_DocGia where B.ID_Sach = '$id_sach'";
                        $result = new Connection();
                        $db=$result->query($query);
                        foreach ($db as $array) {
                            echo '<li class="media">
                                    <a href="#" class="pull-left">
                                        <img src="imgUser/'.$array[5].'" alt="" class="img-circle">
                                    </a>
                                    <div class="media-body">
                                        <span class="text-muted pull-right">
                                             <small class="text-muted">'.$array[4].'</small>   
                                        </span>
                                        <strong class="text-success">'.$array[0].'</strong>
                                        <p>'.
                                            $array[3]
                                        .'</p>
                                    </div>
                                </li>';
                        }
                    ?>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="related-products-wrapper">
                        <h2 class="related-products-title">S???N PH???M LI??N QUAN</h2>
                        <div class="related-products-carousel">
                      <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/toi_thay_hoa_vang.jpg" alt="">
                              <div class="product-hover">
                                 <a style="cursor: pointer;" onclick="addCart('009','T??i Th???y Hoa V??ng Tr??n C??? Xanh',true,'CN001','./images/toi_thay_hoa_vang.jpg')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Th??m v??o gi???</a>
                                 <a href="single-product.php?id=009&cn=CN001" class="view-details-link"><i class="fa fa-link"></i> Xem chi ti???t</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('009','CN001');" style="cursor: pointer;">T??i Th???y Hoa V??ng Tr??n C??? Xanh</p></h2>
                           <div class="product-carousel-price">
                              <ins>60.500 <u>??</u></ins> <!-- <del>82.000 <u>??</u></del> -->
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                            <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/luyen-sieu-tri-nho.jpg" alt="">
                              <div class="product-hover">
                                 <a style="cursor: pointer;" onclick="addCart('010','Luy???n Si??u Tr?? Nh??? T??? V???ng Ti???ng Anh',true,'CN001','./images/luyen-sieu-tri-nho.jpg')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Th??m v??o gi???</a>
                                 <a href="single-product.php?id=010&cn=CN001" class="view-details-link"><i class="fa fa-link"></i> Xem chi ti???t</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('010','CN001');" style="cursor: pointer;">Luy???n Si??u Tr?? Nh??? T??? V???ng Ti???ng Anh</a></h2>
                           <div class="product-carousel-price">
                              <ins>94.000 <u>??</u></ins> <!-- del>188.000 <u>??</u></del> -->
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                           <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/CongPhaToan2.jpg" alt="">
                              <div class="product-hover">
                                 <a style="cursor: pointer;" onclick="addCart('003','C??ng Ph?? To??n 2',true,'CN001','./images/CongPhaToan2.jpg')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Th??m v??o gi???</a>
                                 <a href="single-product.php?id=003&cn=CN001" class="view-details-link"><i class="fa fa-link"></i> Xem chi ti???t</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('003','CN001');" style="cursor: pointer;">C??ng Ph?? To??n 2</p></h2>
                           <div class="product-carousel-price">
                              <ins>139.000 <u>??</u></ins> <!-- <del>179.000 <u>??</u></del> -->
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                         <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/doi-ngan-dung-ngu-dai.jpg" alt="">
                              <div class="product-hover">
                                <a style="cursor: pointer;" onclick="addCart('014','?????i ng???n ?????ng ng??? d??i',true,'CN001','./images/doi-ngan-dung-ngu-dai.jpg')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Th??m v??o gi???</a>
                                 <a href="single-product.php?id=014&cn=CN001" class="view-details-link"><i class="fa fa-link"></i> Xem chi ti???t</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('014','CN001');" style="cursor: pointer;">?????i Ng???n ?????ng Ng??? D??i</p></h2>
                           <div class="product-carousel-price">
                              <ins>47.400 <u>??</u></ins> <!-- <del>60.000 <u>??</u></del> -->
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>
                         <div class="single-product">
                           <div class="product-f-image">
                              <img src="./images/minh-la-ca-viec-cua-minh-la-boi.jpg" alt="">
                              <div class="product-hover">
                                 <a style="cursor: pointer;" onclick="addCart('015','M??nh L?? C??, Vi???c C???a M??nh L?? B??i ',true,'CN001','./images/minh-la-ca-viec-cua-minh-la-boi.jpg')" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Th??m v??o gi???</a>
                                 <a href="single-product.php?id=015&cn=CN001" class="view-details-link"><i class="fa fa-link"></i> Xem chi ti???t</a>
                              </div>
                           </div>
                           <h2><p onclick="fnLaunch('015','CN001');" style="cursor: pointer;">M??nh L?? C??, Vi???c C???a M??nh L?? B??i</p></h2>
                           <div class="product-carousel-price">
                              <ins>53.400 <u>??</u></ins> <!-- <del>89.000 <u>??</u></del> -->
                           </div>
                           <div class="product-wid-rating">
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                              <i class="fa fa-star"></i>
                           </div>
                        </div>                      
                        </div>
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
                    <h2><span>TH???N ?????NG BOOKSTORE</span></h2>
                    <p>Mua h??ng tr???c tuy???n (mua h??ng online) mang l???i s??? ti???n l???i, l???a ch???n ??a d???ng h??n v?? c??c d???ch v??? t???t h??n cho ng?????i ti??u d??ng, t???i TH???N ?????NG BOOKSTORE b???n c?? th??? mua ????? gi?? r??? v???i r???t nhi???u c??c ch????ng tr??nh khuy???n m??i h??ng th??ng. B??y gi??? b???n c?? th??? tr???i nghi???m mua h??ng online th???a th??ch m?? TH???N ?????NG BOOKSTORE mang l???i ch??? v???i 1 click chu???t.</p>
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
                 <p>&copy; 2015 uCommerce. All Rights Reserved. <a href="http://www.freshdesignweb.com" target="_blank">freshDesignweb.com</a></p>
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
</div>

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


<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- <script>window.jQuery || document.write('<script src="assets/jquery/jquery-2.1.1.min.js"><\/script>')</script>
 -->
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="assets/jquery-cookie/jquery.cookie.js"></script>




</body>
</html>
<script type="text/javascript">
   function fnLaunch(ma,cn)
   { 
      var urls="single-product.php?id="+ma+"&cn="+cn;
      var win=window.open(urls, "_self");
      window.focus();

 }
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
