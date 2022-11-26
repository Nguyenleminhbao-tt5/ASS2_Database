<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <link rel="manifest" href="%PUBLIC_URL%/manifest.json" />
    <link rel="stylesheet" href="./public/Library/fontawesome-free-6.1.1-web/css/all.min.css">
    
    <link rel='stylesheet' href="./public/Css/base.css">
    <link rel='stylesheet' href="./public/Css/header.css">
    <link rel='stylesheet' href="./public/Css/footer.css">
    <link rel='stylesheet' href="./public/Css/HomePage.css">
    <link rel='stylesheet' href="./public/Css/Product.css">
    <link rel='stylesheet' href="./public/Css/ProfileProduct.css">

    <style>
      #root {
        font-family: Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      }
    </style>
    <title>E-BOOKSTORE</title>
  </head>
  <body>
    <div id="root">
        <header class="header">
            <div class="navbar1">
                <span class="navbar1__logo">LOGO</span>
                <div class="navbar1__search">
                    <input type="" class="navbar1__search-text"
                    placeholder='Nhập từ khóa tìm kiếm'/>
                    <div class="navbar1__search-wrap">
                        <i class="navbar1__search-icon fa-solid fa-magnifying-glass"></i>
                    </div>
                   
                </div>
                <div class="navbar1__wrap">
                    <div class="navbar1__cart">
                        <i class="navbar1__cart-icon fa-solid fa-cart-shopping"></i>
                        <a href="" class="navbar1__cart-link">Giỏ hàng</a>
                    </div>
                    <a href="./Login" class="navbar1__login">Đăng nhập</a>
                    <div class="navbar1__social">
                        <a href="" class="navbar1__social-item">
                            <i class="navbar1__social-icon_fb fa-brands fa-facebook"></i>
                        </a>
                        <a href="" class="navbar1__social-item">
                            <i class="navbar1__social-icon_insta fa-brands fa-instagram"></i>
                        </a>
                    </div>
                </div>             
            </div>
            <div class="navbar2">
                <div class="navbar2__category">
                    <i class="navbar2__category-icon_first fa-solid fa-bars"></i>
                    <div class="navbar2__category-text" href="">DANH MỤC SẢN PHẨM</div>
                    <i class="navbar2__category-icon_second fa-solid fa-angle-down"></i>
                </div>
                <div class="navbar2__wrap">
                    <div class="navbar2__searchProduct">
                        <i class="navbar2__searchProduct-icon fa-solid fa-truck-fast"></i>
                        <a href="" class="navbar2__searchProduct-text">Tra cứu đơn hàng</a>
                    </div>
                    <a href="" class="navbar2__intro">Giới thiệu</a>
                    <div class="navbar2__contact">
                        <i class="navbar2__contact-icon fa-solid fa-phone"></i>
                        <span class="navbar2__contact-text">Liên hệ</span>
                    </div>
                </div>
                
            </div>
        </header>
        
        <!-- Page content -->
        <div class="content">
            <?php require "./MVC/Views/Pages/$page.php"?>
        </div>
        
        <footer class="footer">
            <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-25">
                            <h3 class="footer__heading">Về Web Shoes</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <a href="" class="footer__list-item_link" >Giới thiệu chung</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="" class="footer__list-item_link" >Tuyển dụng</a>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-25">
                        <h3 class="footer__heading">Liên Hệ</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <i class="footer__list-icon fa-solid fa-phone"></i>
                                    <span class="footer__list-item_link" >0398841276</span>
                                </li>
                                <li class="footer__list-item">
                                    <i class="footer__list-icon fa-regular fa-envelope"> </i>
                                    <span class="footer__list-item_link" >bao.nguyenminhbaott5@hcmut<br/>.edu.vn</span>
                                </li>
                                <li class="footer__list-item">
                                    <i class="footer__list-icon fa-solid fa-location-dot"></i>
                                    <span class="footer__list-item_link" >268 Lý Thường Kiệt, Phường 14<br/>, Quận 10, Tp Hồ Chí Minh</span>
                                </li>
                            </ul>
                        </div>
                        <div class="grid__column-25">
                            <h3 class="footer__heading">Hỗ Trợ Khách Hàng</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <a href="" class="footer__list-item_link" >Mua hàng từ xa</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="" class="footer__list-item_link" >Quy định đổi trả</a>
                                </li>
                            </ul>
                            <div class="footer__wrap">
                                <div class="transportation">
                                    <h3 class="transportation__heading">Vận Chuyển</h3>
                                    <div class="transportation__img"></div>
                                </div>
                                <div class="payment">
                                    <h3 class="payment__heading">Thanh Toán</h3>
                                    <div class="payment__img"></div>
                                </div>
                            </div>
                        </div>
                        <div class="grid__column-25">
                            <h3 class="footer__heading">Dịch Vụ Cung Cấp</h3>
                            <ul class="footer__list">
                                <li class="footer__list-item">
                                    <a href="" class="footer__list-item_link" >Dịch vụ sửa chữa</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="" class="footer__list-item_link" >Nâng cấp phần cứng</a>
                                </li>
                                <li class="footer__list-item">
                                    <a href="" class="footer__list-item_link" >Bảo hành sản phẩm</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer__copy">Copyright 2022 </div>
            </footer>
    </div>
  </body>
</html>
