<?php
namespace Pages;

class CheckoutView{
    private $partials;

    public function __construct($title, $cssFile) {
        $this->partials = new Header($title, $cssFile);
    }

    public function render() {
        ?>
            <?php $this->partials->render() ?>
            <?php $this->renderContent(); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    public function renderContent(){
        echo<<<End
        <div class="checkout-content">
            <h2 class="wishlist-title">Checkout</h2>

            <div class="checkout-container">

                <div class="shipping-details">
                <div class="shipping-details">
                <form action="" method="get"></form>
                <h4>SHIPPING DETAILS</h4>
                <hr />
                <h6>COUNTRY</h6>
                <p> <input type="text" name="country"/></p>
                <h6>CITY</h6>
                <p> <input type="text" name="city"/></p>
                <h6>STREET</h6>
                <p> <input type="text" name="street"/></p>
                <h6>PHONE NUMBER</h6>
                <p><input type="text" name="phone"/></p>
                <h6>ZIP CODE</h6>
                <p><input type="text" name="zip_code" /></p>
                <input type="submit" name="purchase-btn" value="PURCHASE"id="purchase-btn"/>
                
            </div>
                </div>
                <div class="your-order">
                    <div class="orders">
                        <h4>YOUR ORDER</h4>
                        <hr/>
                        <div class="checkout-products">
                            <div class="checkout-one-product">
                                <img class="product-checkout-img"src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"/>
                                <div class="checkout-products-details">
                                    <p class=" product-checkout-name">Basic Tee</p>
                                    <p class="product-checkout-price">$35</p>
                                    <p class="product-checkout-quantity">1</p>
                                </div>
                            </div>
                    
                            <hr/>
                            <div class="checkout-one-product">
                                <img class="product-checkout-img"src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg"/>
                                <div class="checkout-products-details">
                                    <p class=" product-checkout-name">Basic Tee</p>
                                    <p class="product-checkout-price">$35</p>
                                    <p class="product-checkout-quantity">1</p>
                                </div>
                            </div>
                            
                            <hr/>
                        </div>
                        
                    </div>
                    
                    <div class="checkout">
                        <h5>Subtotal</h5>
                        <p>$35</p>
                        <h5>Shipping</h5>
                        <p>$5</p>
                        <h5>Total</h5>
                        <p>$40</p>
                    </div>
        
                </div>
            </div>
            
            
        </div>

        End;
    }

    private function renderFooter() {
        $footer = new Footer();
        $footer->render();
    }     
}
?>