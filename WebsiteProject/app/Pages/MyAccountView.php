<?php

namespace Pages;

class MyAccountView {
    private $title;

    public function __construct($title) {
        $this->title = $title;
    }

    public function render() {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>
        <body>
            <?php $this->renderHeader(); ?>
            <?php $this->renderContent(); ?>
            <?php $this->renderFooter(); ?>
           
    
        </body>
        </html>
        <?php
    }

    private function renderHead() {
        ?>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title><?= $this->title; ?></title>
            
    
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        
            <script src="Irvi/editAccount.js"></script>

            <link rel="stylesheet" href="Irvi/editAccount.css" />
        

            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        </head>
        <?php
    }

    private function renderHeader() {
        ?>
         <header class="">
                <div class="header-container">
                    <div class="upper-bar">
                        <!-- logo -->
                        <a href="#" class="logo">
                            <h3>LOGO</h3>
                        </a>

                        <!-- center search bar-->
                        <form action="#" class="search-bar">
                            <input type="text" class="input-search" placeholder="Search...">
                            <button class="btn-search header-btn">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>

                        <!-- right side -->
                        <div class="header-user-btns">
                            <!-- user icon -->
                            <button class="user-profile-btn header-btn ">
                                <i class="fas fa-user"></i>
                            </button>

                            <!-- wishlist icon -->
                            <button class="user-wishlist-btn header-btn">
                                <i class="fas fa-heart"></i> 
                            </button>

                            <!-- shopping bag icon  -->
                            <button class="user-shopping-bag-btn header-btn">
                                <i class="fas fa-shopping-cart"></i> 
                            </button>
                        </div>

                    </div>
                    <div class="lower-bar">
                        <ul class="tabs-list">
                            <li>
                                <a href="#" class="tab-link tab-link-active">Home</a>
                            </li>
                            <li>
                                <a href="#" class="tab-link">Products</a>
                            </li>
                            <li>
                                <a href="#" class="tab-link">About Us</a>
                            </li>
                            <li>
                                <a href="#" class="tab-link">Help & Advice</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
        <?php
    }

    public function renderContent() {
        ?>
         <div class="content">
        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
        
            <hr class="mt-0 mb-4">
            <div class="row">
                
                <div class = "col-xl-4">
                    
                    
                    
                    <div class="col-xl-12 mb-4" id="profilePictureCard"  >
                        <!-- Profile picture card-->
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">Profile Picture</div>
                            <div class="card-body text-center">
                                <!-- Profile picture image-->
                                <img class="img-account-profile rounded-circle mb-2 i" id="profilePhoto" src="https://militaryhealthinstitute.org/wp-content/uploads/sites/37/2021/08/blank-profile-picture-png.png" alt="">
                                <!-- Profile picture help block-->
                                <div class="small font-italic text-muted mb-4 invisible" id="help_text" >JPG or PNG no larger than 5 MB</div>
                                <!-- Profile picture upload button-->
                                <button class="btn btn-primary invisible" id="editPhotoButton" type="button">Upload new image</button>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-12" id = "myOrdersCard">
                        <div class="card mb-4 mb-xl-0">
                            <div class="card-header">My Orders</div>
                            <div class="card-body text-center">
                                <button class="btn btn-primary" type="button">View order history</button>
                            </div>

                        </div>

                    </div>
                </div>
                
                <div class="col-xl-8" id = "accountDetailsCard">
                    <!-- Account details card-->
                    <div class="card mb-4">
                        <div class="card-header">
                            <div class="row ">
                                <div class="col-xl-12">Account Details</div> 
                                <button id="editProfileButton" class="btn btn-secondary col-md-1 col-xl-6 mb-0 p-0 edit-profile-btn" type="button"> Edit Profile</button>
                            </div>
                            
                        </div>
                        <div class="card-body">
                            <form>
                                <!-- Form Group (email Address)-->
                                <div class="mb-3">
                                    <label class="small mb-1 "" for="inputEmailAddress">Email Address</label>
                                    <input class="form-control"  id="inputEmailAddress" type="email" placeholder="Enter your address" value="JohnSmith@yahoo.com" readonly>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">First name</label>
                                        <input class="form-control" id="inputFirstName" type="text" placeholder="Enter your first name" value="John" readonly>
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Last name</label>
                                        <input class="form-control" id="inputLastName" type="text" placeholder="Enter your last name" value="Smith" readonly>
                                    </div>
                                </div>
                                <!-- Form Row  -->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (Street)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputStreetAddress">Street Address</label>
                                        <input class="form-control" id="inputStreetAddress" type="text" placeholder="Enter your street Address" value="21 End Street" readonly>
                                    </div>
                                    <!-- Form Group (City)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputCity">City</label>
                                        <input class="form-control" id="inputCity" type="text" placeholder="Enter your city" value="San Francisco" readonly>
                                    </div>
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <!-- From Row -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Country)-->
                                        <div class="col-md-4">
                                            <label class="small mb-1" for="inputCountry">Country/Region</label>
                                            <input class="form-control" id="inputCountry" type="text" placeholder="Enter your country" value="California" readonly>
                                        </div>
                                        <!-- Form Group (State)-->
                                        <div class="col-md-4">
                                            <label class="small mb-1" for="inputState">State</label>
                                            <input class="form-control" id="inputState" type="text"  value="Unitetd States" readonly>
                                        </div>
                                        <!-- Form Group(ZipCode) -->
                                        <div class="col-md-2">
                                            <label class="small mb-1" for="inputZipCode">Zip Code</label>
                                            <input class="form-control" id="inputZipCode" type="number" value="1501" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Phone number</label>
                                        <input class="form-control" id="inputPhone" type="tel" placeholder="Enter your phone number" value="555-123-4567" readonly>
                                    </div>
                                    <!-- Form Group (Creation Date)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="regDate">Registration Date</label>
                                        <input class="form-control" id="regDate" type="text" name="regDate"  value="01/02/2015" readonly>
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button id="saveChangesButton" class="btn btn-primary invisible" type="button"  >Save changes</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <?php
    }

    private function renderFooter() {
        ?>
        <footer class="footer">
            <div class="footer-content">
                <a href="#" class="logo logo-footer">
                    <h3>LOGO</h3>
                </a>
                <ul class="footer-links ftlink-main">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Contact Us</a></li>
                </ul>
                <ul class="footer-links ftlink-account">
                    <li><a href="#">Create Account</a></li>
                    <li><a href="#">My account</a></li>
                    <li><a href="#">Shopping Cart</a></li>
                </ul>
                <div class="footer-social">
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Company. All rights reserved.</p>
            </div>
        </footer> 
        <?php

    }

}