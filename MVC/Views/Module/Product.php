<?php

/* props là đối tượng sẽ chưa các thuộc tính của
một Product gồm new(true), sale(int), URL_img(string), name(string),
price_new(float), price_old(float) */


function Product($props=[])
{
?>
        <div class="Product">
            <div class="product__top" >
                <a class="product__top-link">
                    <img class="product__top-img" src="https://toplist.vn/images/800px/dung-la-tet-588749.jpg" />
                </a>
                
                <div class="product__top-sale">
                    <span class="new">NEW</span>
                    <span class="sale">- 10 %</span>
                </div>
                <div class="product__top-move">
                    <div class="move-left">
                        <i class="move-left_icon fa-solid fa-angle-left"></i>
                    </div>
                    <div class="move-right">
                        <i class="move-right_icon fa-solid fa-angle-right"></i>
                    </div>
                </div>
                <div class="product__top-size">
                    <a href="" class="size-item">
                        <span style="top: 10px; position: relative">36</span>
                    </a>
                    <a href="" class="size-item">
                        <span style="top: 10px; position: relative">37</span>
                    </a>
                    <a href="" class="size-item">
                        <span style="top: 10px; position: relative">38</span>
                    </a>
                    <a href="" class="size-item">
                        <span style="top: 10px; position: relative">39</span>
                    </a>
                    <a href="" class="size-item">
                        <span style="top: 10px; position: relative">40</span>
                    </a>
                    <a href="" class="size-item">
                        <span style="top: 10px; position: relative">41</span>
                    </a>
                    <a href="" class="size-item">
                        <span style="top: 10px; position: relative">42</span>
                    </a>
                    <a href="" class="size-item">
                        <span style="top: 10px; position: relative">43</span>
                    </a>

                    
                </div>
            </div>
            <div class="product__bot">
                <div class="product__bot-name">
                    Tu tiên
                </div>
                <div class="product__bot-price">
                    <button class="price-new">100.000đ</button>
                    <button class="price-old">300.000đ</button>
                </div>
                <div class="product__bot-detail">
                    <a href="" class="cart">
                        <i class="cart-icon fa-solid fa-cart-shopping"></i>
                        <span class="cart-text">Thêm giỏ hàng</span>
                    </a>
                    <span class="arow"></span>
                    <a href="" class="detail">
                        <i class="detail-icon fa-solid fa-eye"></i>
                        <span class="detail-text">Xem chi tiết</span>
                    </a>
                </div>

            </div>
        </div>

<?php
}
?>