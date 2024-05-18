<?php
namespace Pages;

class WishlistView{
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
        <div class="content">
            <div class="wishlist-products-container">
                <h2 class="wishlist-title">Wishlist products</h2>
                <div class="wishlist-products">
                    <div class="wishlist-product-card">
                    <button class="remove-from-cart">
                        <i class="fas fa-trash"></i> 
                    </button>
                        <div class="product-box">
                            <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                        </div>
                        <div class="description-container">
                            <div class="description-box">
                                <h3>
                                    <a href="#">Basic Tee</a>
                                </h3>
                                <p>Black</p>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                            <div class="wishlist-btn">
                                <button class="add-to-cart">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="wishlist-product-card">
                    <button class="remove-from-cart">
                        <i class="fas fa-trash"></i> 
                    </button>
                        <div class="product-box">
                            <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                        </div>
                        <div class="description-container">
                            <div class="description-box">
                                <h3>
                                    <a href="#">Basic Tee</a>
                                </h3>
                                <p>Black</p>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                            <div class="wishlist-btn">
                                <button class="add-to-cart">Add to cart</button>
                            </div>
                        </div>
                    </div>


                    <div class="wishlist-product-card">
                    <button class="remove-from-cart">
                        <i class="fas fa-trash"></i> 
                    </button>
                        <div class="product-box">
                            <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                        </div>
                        <div class="description-container">
                            <div class="description-box">
                                <h3>
                                    <a href="#">Basic Tee</a>
                                </h3>
                                <p>Black</p>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                            <div class="wishlist-btn">
                                <button class="add-to-cart">Add to cart</button>
                            </div>
                        </div>
                    </div>


                    <div class="wishlist-product-card">
                    <button class="remove-from-cart">
                        <i class="fas fa-trash"></i> 
                    </button>
                        <div class="product-box">
                            <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                        </div>
                        <div class="description-container">
                            <div class="description-box">
                                <h3>
                                    <a href="#">Basic Tee</a>
                                </h3>
                                <p>Black</p>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                            <div class="wishlist-btn">
                                <button class="add-to-cart">Add to cart</button>
                            </div>
                        </div>
                    </div>


                    <div class="wishlist-product-card">
                    <button class="remove-from-cart">
                        <i class="fas fa-trash"></i> 
                    </button>
                        <div class="product-box">
                            <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                        </div>
                        <div class="description-container">
                            <div class="description-box">
                                <h3>
                                    <a href="#">Basic Tee</a>
                                </h3>
                                <p>Black</p>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                            <div class="wishlist-btn">
                                <button class="add-to-cart">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="wishlist-product-card">
                    <button class="remove-from-cart">
                        <i class="fas fa-trash"></i> 
                    </button>
                        <div class="product-box">
                            <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                        </div>
                        <div class="description-container">
                            <div class="description-box">
                                <h3>
                                    <a href="#">Basic Tee</a>
                                </h3>
                                <p>Black</p>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                            <div class="wishlist-btn">
                                <button class="add-to-cart">Add to cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="wishlist-product-card">
                    <button class="remove-from-cart">
                        <i class="fas fa-trash"></i> 
                    </button>
                        <div class="product-box">
                            <img class="product-img" src="https://tailwindui.com/img/ecommerce-images/product-page-01-related-product-01.jpg" alt="Front of men's Basic Tee in black.">
                        </div>
                        <div class="description-container">
                            <div class="description-box">
                                <h3>
                                    <a href="#">Basic Tee</a>
                                </h3>
                                <p>Black</p>
                                <p class="text-sm font-medium text-gray-900">$35</p>
                            </div>
                            <div class="wishlist-btn">
                                <button class="add-to-cart">Add to cart</button>
                            </div>
                        </div>
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