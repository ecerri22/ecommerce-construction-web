<?php

namespace Pages;

class HomePageView {
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

    private function renderContent() {
        ?>
        <div class="content">
            <div class="hero-section">
                <h2 class="hero-head">Lorem ipsum dolor sit amet</h2>
                <p class="hero-descript">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, praesentium.</p>
                <div class="hero-btns">
                    <button class="hero-btn hero-abt-us">About Us</button>
                    <button class="hero-btn hero-products">Products</button>
                </div>
            </div>

            <div class="our-story">
                <div class="left-img">
                    <div class="composition">
                        <img src="/image/worker.jpg" alt="construction worker" class="composition-photo composition-photo-1">
                        <img src="/image/construction-workers.jpg" alt="construction workers" class="composition-photo composition-photo-2">
                    </div>
                </div>
                <div class="right-content">
                    <h3 class="right-content-header">Who are we</h3>
                    <h6 class="right-content-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit earum doloribus numquam dolor vel architecto dolore quae qui pariatur. A veritatis dolorum accusantium laborum rerum molestias commodi itaque sapiente iusto dolorem unde pariatur doloribus, quisquam cupiditate alias deleniti, vel tempore asperiores nostrum quaerat? Similique soluta iure earum facilis doloremque obcaecati.</h6>
                    <button class=" hero-btn hero-products">Our history</button>
                </div>
            </div>

            <div class="featured-products">
                <div class="featured-text">
                    <h2 class="featured-heading">Featured Products</h2>
                    <button class="featured-btn hero-btn">See More &#8594</button>
                </div>
                <div class="featured-products-list">               
                    <div class="featured-product-container">
                        <img class="product-img" src="/image/Tools Market_Vidues gipsi me bateri.jpg" alt="Tool">
                        <a href="#">Tool Tool Tool</a>
                        <p>$14.99</p>
                    </div>

                    <div class="featured-product-container">
                        <img class="product-img" src="/image/KEAD_Sharre bango me disk 240V 2000W Worcraft MST20-255.jpg" alt="Tool">
                        <a href="#">Tool Tool Tool</a>
                        <p>$14.99</p>
                    </div>

                    <div class="featured-product-container">
                        <img class="product-img" src="/image/Albaelettrica_Sharre me disk Milwaukee.jpg" alt="Tool">
                        <a href="#">Tool Tool Tool</a>
                        <p>$14.99</p>
                    </div>
                </div>
            </div>

            <div class="latest-projects">
                <h2 class="projects-heading featured-heading">Latest Projects</h2>
                <div class="projects-list">

                    <div class="project-card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--1">
                                &nbsp;
                            </div>
                        </div>
                        <div class="card__side card__side--back ">
                            <p class="project-card-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora beatae perspiciatis vel sunt eius laborum obcaecati aliquid. Facilis voluptas porro reiciendis amet nihil nesciunt quas impedit unde cumque quisquam? Ratione.</p>
                        </div> 
                    </div>
            
                    <div class="project-card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                        </div>
                        <div class="card__side card__side--back ">
                            <p class="project-card-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora beatae perspiciatis vel sunt eius laborum obcaecati aliquid. Facilis voluptas porro reiciendis amet nihil nesciunt quas impedit unde cumque quisquam? Ratione.</p>
                        </div> 
                    </div>
        
                    <div class="project-card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                        </div>
                        <div class="card__side card__side--back ">
                            <p class="project-card-descript">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora beatae perspiciatis vel sunt eius laborum obcaecati aliquid. Facilis voluptas porro reiciendis amet nihil nesciunt quas impedit unde cumque quisquam? Ratione.</p>
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

