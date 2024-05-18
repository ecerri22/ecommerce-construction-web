<?php
namespace Pages;

class CheckoutView{
    private $partials;

    public function __construct($title, $cssFile) {
        $this->partials = new Header($title, $cssFile);
    }

    public function render($allCheckoutProducts=[], $userAddress=[]) {
        ?>
            <?php $this->partials->render() ?>
            <?php $this->renderContent($allCheckoutProducts, $userAddress); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    public function renderContent($allCheckoutProducts=[], $userAddress=[]) {
        $subtotal = 0;
        ?>
        <div class="checkout-content">
            <h2 class="wishlist-title">Checkout</h2>

            <div class="checkout-container">

                <div class="shipping-details">
                    <p class="sh-d-header">SHIPPING DETAILS</p>
                    <hr />
                    <form method="POST" action="/checkout">
                        <input type="hidden" name="_method" value="PATCH">
                        <input type="hidden" name="id" value="<?= $userAddress['user_id'] ?>">

                        <h6>COUNTRY</h6>
                        <input type="text" name="country" value="<?= $userAddress['country'] ??"" ?>" required />
                        
                        <div class="address-container-smaller">
                            <div>
                                <h6>CITY</h6>
                                 <input type="text" name="city" value="<?= $userAddress['city'] ??"" ?>" required/>
                            </div>
                            <div>
                                <h6>STREET</h6>
                                 <input type="text" name="street" value="<?= $userAddress['street'] ??"" ?>" required/>
                            </div>
                        </div>
                        <div class="address-container-smaller">
                            <div>
                                <h6>PHONE NUMBER</h6>
                                 <input type="text" name="phone" value="<?= $userAddress['phone'] ??"" ?>" required/>
                            </div>
                            <div>
                                <h6>ZIP CODE</h6>
                                <input type="text" name="zip_code" value="<?= $userAddress['zip_code'] ??"" ?>" required/>
                            </div>
                        </div>
                        <button type="submit" name="purchase-btn" id="purchase-btn" >PURCHASE</button>
                    </form>
                </div>

                <div class="your-order">
                    <p class="sh-d-header">YOUR ORDER</p>
                    <div class="orders">
                        <hr />
                        <div class="checkout-products">
                            <?php foreach ($allCheckoutProducts as $checkoutProduct) : ?>
                                <div class="checkout-one-product" data-product-id="<?=$checkoutProduct['product_id']?>">
                                    <img class="product-checkout-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" />
                                    <div class="checkout-products-details" >
                                        <p class="product-checkout-name"><?= $checkoutProduct['name'] ?> </p>
                                        <div style="display: flex; flex-direction:column; gap:.5rem;">
                                            <p class="product-checkout-price">$<?= $checkoutProduct['price'] ?> </p>
                                            <p class="product-checkout-quantity">Quantity: <?= $checkoutProduct['quantity'] ?></p>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                                    $subtotal += $checkoutProduct['price'] * $checkoutProduct['quantity'];
                                ?>
                                <hr />
                            <?php endforeach; ?>
                        </div>

                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const purchaseButton = document.querySelector('#purchase-btn');

                                purchaseButton.addEventListener('click', function(event) {
                                    event.preventDefault();
                                    const productCards = document.querySelectorAll('.checkout-one-product');
                                    let subtotal = 0;
                                    let products = {}; 

                                    productCards.forEach(card => {
                                        const productId = card.dataset.productId;
                                        const quantityElement = card.querySelector('.product-checkout-quantity');
                                        const priceElement = card.querySelector('.product-checkout-price');
                                        const quantity = parseInt(quantityElement.textContent.split(': ')[1]);
                                        const price = parseFloat(priceElement.textContent.split('$')[1]);

                                        if (!isNaN(quantity) && quantity > 0) {
                                            products[productId] = quantity;
                                            subtotal += price * quantity;
                                        }
                                    });

                                    const shipping = 5;
                                    const total = subtotal + shipping;

                                    const productsJSON = JSON.stringify(products);

                                    const productsInput = document.createElement('input');
                                    productsInput.setAttribute('type', 'hidden');
                                    productsInput.setAttribute('name', 'product_ids');
                                    productsInput.setAttribute('value', productsJSON);

                                    const subtotalElement = document.querySelector('.checkout div:first-child p:last-child');
                                    const totalElement = document.querySelector('.checkout-total p:last-child');

                                    subtotalElement.textContent = '$' + subtotal.toFixed(2);
                                    totalElement.textContent = '$' + total.toFixed(2);

                                    const form = document.querySelector('form[action="/checkout"]');
                                    form.appendChild(productsInput);

                                    form.submit();
                                });
                            });
                        </script>

                    </div>

                    <div class="checkout">
                        <div>
                            <p>Subtotal</p>
                            <p>$<?= $subtotal ?></p>
                        </div>
                        <div>
                            <p>Shipping</p>
                            <p>+ $5</p>
                        </div>
                        <hr>
                        <div class="checkout-total">
                            <p>Total</p>
                            <p>$<?= $subtotal + 5 ?></p>
                        </div>
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