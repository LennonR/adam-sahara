<?php
    header('Content-type: text/css; charset: UTF-8');
    header('Cache-Control: must-revalidate');
    header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 3600) . ' GMT');
    $url = $_REQUEST['url'];
?>

#Example_F {
	-moz-box-shadow: 0 0 5px 5px #888;
	-webkit-box-shadow: 0 0 5px 5px #888;
	box-shadow: 0 0 5px 5px #888;
}
.header .currency-header ul li a {
    -webkit-border-radius: 5px;
    -moz-border-radius: 5px;
    border-radius: 5px;
    behavior: url(<?php echo $url; ?>css/css3.htc);
}

.products-grid button.btn-cart span { border-radius:100%;}
.drop-lang li a,.drop-currency li a,.header .links a,button.button span span,.top-link .links li a,.drop-currency .sub-currency li a{
    -moz-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.drop-lang li a:hover,.product-name a,.drop-currency li a:hover,.header .links a:hover,button.button:hover span span,
.top-link .links li a:hover,.drop-currency .sub-currency li a:hover{
    -moz-transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.custom_banner img,.block-subscribe button.button span,.product-name a:hover,#back-top{
    -moz-transition: all 0.3s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
    transition: all 0.3s ease-in-out;
}
.custom_banner img:hover,.block-subscribe button.button:hover span,#back-top:hover{
    -moz-transition: all 0.3s ease 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.header .search-container .form-search.focus,.footer-static-center-one .block-subscribe .block-content.focus  {
    -moz-transition: border 0.3s ease-in-out 0s;
    -webkit-transition: border 0.3s ease-in-out 0s;
    transition: border 0.3s ease-in-out;
}
.footer-static-center-one .f-one a {
    -moz-transition: background-color 0.4s ease-in-out 0s;
    -webkit-transition: background-color 0.4s ease-in-out 0s;
    transition: background-color 0.5s ease-in-out;
}
.footer-static-center-one .f-one a:hover {
    -moz-transition: background-color 0.4s ease 0s;
    -webkit-transition: background-color 0.4s ease-in-out 0s;
}
.footer-static-container ul li a,.products-list .desc .link-learn {
     -moz-transition: color 0.3s ease-in-out 0s;
    -webkit-transition: color 0.3s ease-in-out 0s;
    transition: color 0.3s ease-in-out;
}
.footer-static-container ul li a:hover,.products-list .desc .link-learn:hover {
    -moz-transition: color 0.3s ease 0s;
    -webkit-transition: color 0.3s ease-in-out 0s;
}
.footer-icon a,.block-tags .block-content a,.pager .view-mode strong.grid, .pager .view-mode a.grid:hover
,.pager .view-mode a.list,.pager .view-mode strong.list, .pager .view-mode a.list:hover,.pager .view-mode a.grid,.bx-wrapper .bx-controls a,
.banner-static-contain .banner-link a,.banner-one2 .banner-one-link a,.banner-left .link-banner-left a,.nivo-controlNav a,
.header-block .h-link a,.products-list button.btn-cart span,.products-list .link-wishlist,.products-list .link-compare,.product-view .link-wishlist,.product-view .link-compare,
.product-view .email-friend a,.top-cart-wrapper .btn-edit,.top-cart-wrapper .btn-remove,.product-view button.btn-cart span{
    -moz-transition: background 0.3s ease-in-out 0s;
    transition: background 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.footer-icon a:hover,.block-tags .block-content a:hover,.pager .view-mode strong.grid, .pager .view-mode a.grid:hover
,.pager .view-mode a.list,.pager .view-mode strong.list, .pager .view-mode a.list:hover,.pager .view-mode a.grid
,.bx-wrapper .bx-controls a:hover,.banner-static-contain .banner-link a:hover,.banner-one2 .banner-one-link a:hover,.banner-left .link-banner-left a:hover,
.nivo-controlNav a:hover,.header-block .h-link a:hover,.products-list button.btn-cart:hover span,.products-list .link-wishlist:hover,.products-list .link-compare:hover,.product-view .link-wishlist:hover,
.product-view .link-compare:hover,.product-view .email-friend a:hover,.top-cart-wrapper .btn-edit:hover,.top-cart-wrapper .btn-remove:hover,
.product-view button.btn-cart:hover span{
     -moz-transition: background 0.3s ease 0s;
     -webkit-transition: all 0.3s ease-in-out 0s;
}
.header .search-container button.button span {
    transition:background 0s ease-in-out 0s;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.block-layered-nav li a,.accordion a,.block-tags .block-content a,.header-block .h-link a{
    -moz-transition: color 0.3s ease-in-out 0s;
    transition: color 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.block-layered-nav li a:hover,.accordion a:hover,.block-tags .block-content a:hover,.header-block .h-link a:hover {
     -moz-transition: color 0.3s ease 0s;
     -webkit-transition: all 0.3s ease-in-out 0s;
}
.tab_container .item-inner .ratings,.category-products .products-grid .item-inner .ratings{
    -moz-transition: top 0.5s ease-in-out 0s;
    transition: top 0.5s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.tab_container .item-inner:hover .ratings,.category-products .products-grid .item-inner:hover .ratings{
     -moz-transition: top 0.5s ease 0s;
     -webkit-transition: all 0.3s ease-in-out 0s;
}

.tab_container .item-inner .add-to-links,.category-products .item-inner .cart-content{
    -moz-transition: right 0.5s ease-in-out 0s;
    transition: right 0.5s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.tab_container .item-inner:hover .add-to-links,.category-products .item-inner:hover .cart-content{
     -moz-transition: right 0.5s ease 0s;
     -webkit-transition: all 0.3s ease-in-out 0s;
}

.tab_container .item-inner .actions .box-cart{
    -moz-transition: bottom 0.5s ease-in-out 0s;
    transition: bottom 0.5s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.tab_container .item-inner:hover .actions .box-cart{
     -moz-transition: bottom 0.5s ease 0s;
     -webkit-transition: all 0.3s ease-in-out 0s;
}

.footer-static-content ul li{
    -moz-transition: padding 0.3s ease-in-out 0s;
    transition: padding 0.3s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.footer-static-content ul li:hover{
     -moz-transition: padding 0.3s ease 0s;
     -webkit-transition: all 0.3s ease-in-out 0s;
}

.tab_container .bx-wrapper .bx-controls a,.ma-brand-slider-contain .bx-wrapper .bx-controls a,.ma-thumbnail-container .bx-wrapper .bx-controls-direction a,
.ma-upsellslider-container .bx-wrapper .bx-controls a,.drop-currency .currency-trigger .sub-currency {
    -moz-transition: opacity 0.2s ease-in-out 0s;
    transition: opacity 0.2s ease-in-out;
    -webkit-transition: all 0.3s ease-in-out 0s;
}
.tab_container:hover .bx-wrapper .bx-controls a,.ma-brand-slider-contain:hover .bx-wrapper .bx-controls a,.ma-thumbnail-container .bx-wrapper:hover .bx-controls-direction a,
.ma-upsellslider-container .bx-wrapper:hover .bx-controls a,.drop-currency .currency-trigger:hover .sub-currency {
     -moz-transition: opacity 0.2s ease 0s;
     -webkit-transition: all 0.3s ease-in-out 0s;
}






.product-detail a,.link-wishlist,.link-compare { border-radius:100%;}
.banner-one img,.banner-left img {
    -webkit-transition-duration: 0.4s;
    -moz-transition-duration: 0.4s;
    -ms-transition-duration: 0.4s;
    -o-transition-duration: 0.4s;
    transition-duration: 0.4s;
    transform: scale(1);
    opacity: 1;
}
.banner-one:hover img,.banner-left:hover img{
    transform: scale(1.1);
    -ms-transform: scale(1.1); 
    -moz-transform: scale(1.1);
    -webkit-transform: scale(1.1);
    -o-transform: scale(1.1);
}

.banner-box .banner-images img {
    -webkit-transition-duration: 0.2s;
    -moz-transition-duration: 0.2s;
    -ms-transition-duration: 0.2s;
    -o-transition-duration: 0.2s;
    transition-duration: 0.2s;
    transform: scale(1);
    opacity: 1;
}
.banner-box:hover .banner-images img{
    transform: scale(0.95);
    -ms-transform: scale(0.95); 
    -moz-transform: scale(0.95);
    -webkit-transform: scale(0.95);
    -o-transform: scale(0.95);
}
