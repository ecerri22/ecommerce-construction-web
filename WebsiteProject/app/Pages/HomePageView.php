<?php

namespace Pages;

class HomePageView {
    private $partials;

    public function __construct($title, $cssFile) {
        $this->partials = new Header($title, $cssFile);
    }

    public function render($homepagecontents = []) {
        ?>
            <?php $this->partials->render() ?>
            <?php $this->renderContent($homepagecontents); ?>
            <?php $this->renderFooter(); ?>
        </body>
        </html>
        <?php
    }

    private function renderContent($homepagecontents = []) {
        ?>
        <div class="content">
            <div class="hero-section">
                <h2 class="hero-head"><?= $homepagecontents[0]['content']; ?></h2>
                <p class="hero-descript"><?= $homepagecontents[1]['content']; ?></p>
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
                    <h6 class="right-content-descript"><?= $homepagecontents[2]['content']; ?></h6>
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
                            <p class="project-card-descript"><?= $homepagecontents[3]['content']; ?></p>
                        </div> 
                    </div>
            
                    <div class="project-card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--2">
                                &nbsp;
                            </div>
                        </div>
                        <div class="card__side card__side--back ">
                            <p class="project-card-descript"><?= $homepagecontents[4]['content']; ?></p>
                        </div> 
                    </div>
        
                    <div class="project-card">
                        <div class="card__side card__side--front">
                            <div class="card__picture card__picture--3">
                                &nbsp;
                            </div>
                        </div>
                        <div class="card__side card__side--back ">
                            <p class="project-card-descript"><?= $homepagecontents[5]['content']; ?></p>
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

