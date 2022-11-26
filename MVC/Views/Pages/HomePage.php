<div class="HomePage">
            <div class="content-main">
                <div class="grid">
                    <div class="grid__row">
                        <div class="grid__column-65">
                            <div class="main__commercial">                  
                                <img class="commercial-img" src={arr_commercial[indexRef.current].URL_img}></img>
                            </div>
                        </div>
                        <div class="grid__column-35">
                            <div class="main__beside">
                                <div class="main__beside-1">
                                    <img class="beside-1-img" src={arr_commercial[0].URL_img}></img>
                                </div>
                                <div class="main__beside-2">
                                    <img class="beside-2-img" src={arr_commercial[1].URL_img}></img>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-product">
                <div class="grid">
                    <div class="product__heading">SẢN PHẨM NỔI BẬT</div>
                    <div class="grid__row">
                        <?php
                        require "./MVC/Views/Module/Product.php";
                        for ($i=0;$i<12;$i++)
                          { 
                            echo "<div class='grid__column-25'>";
                            Product();
                            echo "</div>";
                          } 
                        ?>
                    </div>
                </div>
                
                
            </div>
            <div class="content-accessory">
                <div class="grid">
                    <div class="accessory__heading">PHỤ KIỆN KÈM THEO</div>
                    <div class="grid__row">
                        <?php
                        for ($i=0;$i<12;$i++)
                          { 
                            echo "<div class='grid__column-25'>";
                            Product();
                            echo "</div>";
                          } 
                        ?>
                    </div>
                </div>
            </div>
       </div>