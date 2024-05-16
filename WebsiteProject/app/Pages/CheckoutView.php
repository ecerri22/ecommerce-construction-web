<?php
namespace Pages;

class CheckoutView{
    private $partials;

    public function __construct($title, $cssFile) {
        $this->partials = new Header($title, $cssFile);
    }

    public function render($allCheckoutProducts) {
        ?>
            <?php $this->partials->render($allCheckoutProducts) ?>
            <?php $this->renderContent($allCheckoutProducts); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    public function renderContent($allCheckoutProducts) {
        // Initialize the subtotal variable
        $subtotal = 0;
        ?>
        <div class="checkout-content">
            <h2 class="wishlist-title">Checkout</h2>

            <div class="checkout-container">

                <div class="shipping-details">
                    <form action="" method="get"></form>
                    <h4>SHIPPING DETAILS</h4>
                    <hr />
                    <h6>COUNTRY</h6>
                    <p> <input type="text" name="country" /></p>
                    <h6>CITY</h6>
                    <p> <input type="text" name="city" /></p>
                    <h6>STREET</h6>
                    <p> <input type="text" name="street" /></p>
                    <h6>PHONE NUMBER</h6>
                    <p><input type="text" name="phone" /></p>
                    <h6>ZIP CODE</h6>
                    <p><input type="text" name="zip_code" /></p>
                    <input type="submit" name="purchase-btn" value="PURCHASE" id="purchase-btn" />

                </div>
                <div class="your-order">
                    <div class="orders">
                        <h4>YOUR ORDER</h4>
                        <hr />
                        <div class="checkout-products">
                            <?php foreach ($allCheckoutProducts as $checkoutProduct) : ?>
                                <div class="checkout-one-product">
                                    <img class="product-checkout-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" />
                                    <div class="checkout-products-details">
                                        <p class=" product-checkout-name"><?= $checkoutProduct['name'] ?> </p>
                                        <p class="product-checkout-price">$ <?= $checkoutProduct['price'] ?></p>
                                        <p class="product-checkout-quantity"><?= $checkoutProduct['quantity'] ?></p>
                                    </div>
                                </div>
                                <?php 
                                    // Calculate subtotal for each product and add it to the total
                                    $subtotal += $checkoutProduct['price'] * $checkoutProduct['quantity'];
                                ?>
                                <hr />
                            <?php endforeach; ?>
                        </div>

                    </div>

                    <div class="checkout">
                        <!-- Display subtotal -->
                        <h5>Subtotal</h5>
                        <p>$<?= $subtotal ?></p>
                        <!-- Hardcoded shipping cost -->
                        <h5>Shipping</h5>
                        <p>$5</p>
                        <!-- Display total -->
                        <h5>Total</h5>
                        <p>$<?= $subtotal + 5 ?></p>
                    </div>

                </div>
            </div>


        </div>
        <?php
    }

    private function renderFooter() {
        $footer = new Footer();
        $footer->render();
    }     
}
?>