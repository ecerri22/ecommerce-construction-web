<?php

namespace Pages;

use Models\User;

class MyAccountView
{

    private $title;
    private $user;
    public function __construct($title)
    {
        $this->title = $title;
        $this->user = new User();
    }

    public function updateProfile()
    {
        if (isset($_POST["saveChangesButton"]) && !empty($_POST['inputFirstName']) && !empty($_POST['inputLastName'])) {
            $userID = $_SESSION['user']['user_id'];
            $first_name = $_POST['inputFirstName'];
            $last_name = $_POST['inputLastName'];

            User::updateUser($userID, $first_name, $last_name);

            $street = $_POST['inputStreetAddress'];
            $city = $_POST['inputCity'];
            $country = $_POST['inputCountry'];
            $state = $_POST['inputState'];
            $zip = $_POST['inputZipCode'];
            $phoneNumber = $_POST['inputPhone'];

            if (count($this->user->getUserAddress()) == 0) {
                $this->user->addAddress($userID, $street, $city, $country, $state, $phoneNumber, $zip);

            } else {

                $this->user->updateAddress($userID, $street, $city, $country, $state, $phoneNumber, $zip);

            }
            
            if (isset($_FILES['profilePhoto']) && $_FILES['profilePhoto']['error'] === UPLOAD_ERR_OK) {
                $fileTmpPath = $_FILES['profilePhoto']['tmp_name'];
                $fileName = $_FILES['profilePhoto']['name'];
                $fileSize = $_FILES['profilePhoto']['size'];
                $fileType = $_FILES['profilePhoto']['type'];
                $fileNameCmps = explode(".", $fileName);
                $fileExtension = strtolower(end($fileNameCmps));

                // Define allowed file extensions
                $allowedfileExtensions = array('jpg', 'gif', 'png','jpeg');

                // Check if file has an allowed extension
                if (in_array($fileExtension, $allowedfileExtensions)) {
                    // Define upload path
                    $uploadFileDir = 'image/';
                    $dest_path = $uploadFileDir . $fileName;

                    // Move the file to the upload directory
                    if (move_uploaded_file($fileTmpPath, $dest_path)) {
                        User :: updateUserPhoto($userID,$dest_path);
                    }
                } 
            } 
            unset($_POST['inputFirstName']);
            unset($_POST['inputLastName']);
            unset($_POST['inputStreetAddress']);
            unset($_POST['inputCity']);
            unset($_POST['inputCountry']);
            unset($_POST['inputState']);
            unset($_POST['inputZipCode']);
            unset($_POST['inputPhone']);
            unset($_POST['profilePhoto']);
            
        } 
    }

    public function render()
    {
        $this->updateProfile();
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <?php $this->renderHead(); ?>

        <body>
            <?php $this->renderHeader(); ?>
            <?php $this->renderContent(User::getUser($_SESSION['user']['user_id']), $this->user->getUserAddress()); ?>
            <?php $this->renderFooter(); ?>

        </body>

        </html>
        <?php
    }

    private function renderHead()
    {
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
            <link
                href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
                rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
            <link
                href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap"
                rel="stylesheet">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
                integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        </head>
        <?php
    }

    private function renderHeader()
    {
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
                            <?php if ($_SESSION['user'] ?? false) : ?>
                            <!-- User is logged in -->
                            <a href="/myAccount">
                                <button class="user-profile-btn header-btn">
                                    <i class="fas fa-user"></i>
                                </button>
                            </a>

                            <a href="/wishlist">
                                <button class="user-wishlist-btn header-btn">
                                    <i class="fas fa-heart"></i> 
                                </button>
                            </a>

                            <a href="/shoppingCart">
                                <button class="user-shopping-bag-btn header-btn">
                                    <i class="fas fa-shopping-cart"></i> 
                                </button>
                            </a>

                            <form action="/login" method="POST">
                                <input type="hidden" name="_method" value="DELETE" />
                                <button class="logout-btn hero-btn">
                                    Log out
                                </button>
                            </form>
                            
                            <?php else : ?>
                            <!-- User is logged out -->
                            <div class="login-signup-btns">
                                <a href=/login>
                                    <button class="login-btn hero-btn">
                                        Login
                                    </button>
                                </a>

                                <a href=/signup>
                                    <button class="signup-btn hero-btn">
                                        Signup
                                    </button>
                                </a>
                            </div>
                            <?php endif; ?>
                        </div>

                    </div>
                    <div class="lower-bar">
                        <ul class="tabs-list">
                            <li>
                                <a href="/" class="tab-link <?= (urlUI('/')) ? 'tab-link-active' : ''; ?>" onclick="changefocus(this)">Home</a>
                            </li>
                            <li>
                                <a href="/allProducts" class="tab-link <?= (urlUI('/allProducts')) ? 'tab-link-active' : ''; ?>" onclick="changefocus(this)">Products</a>
                            </li>
                            <li>
                                <a href="/aboutUs" class="tab-link <?= (urlUI('/aboutUs')) ? 'tab-link-active' : ''; ?>" onclick="changefocus(this)">About Us</a>
                            </li>
                            <li>
                                <a href="/helpAdvice" class="tab-link <?= (urlUI('/helpAdvice')) ? 'tab-link-active' : ''; ?>" onclick="changefocus(this)">Help & Advice</a>
                            </li>
                        </ul>
                    </div>

                    

                </div>
            </header>
        <?php
    }

    public function renderContent($user, $address)
    {
        ?>
        <div class="content">
            <div class="container-xl px-4 mt-4">
                <!-- Account page navigation-->

                <hr class="mt-0 mb-4">
                <div class="row">

                    <div class="col-xl-4">



                        <form method="post" action="/myAccount" enctype="multipart/form-data">


                            <div class="col-xl-12 mb-4" id="profilePictureCard">
                                <!-- Profile picture card-->
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">Profile Picture</div>
                                    <div class="card-body text-center">
                                        
                                        <!-- Profile picture image-->
                                        <img class="img-account-profile rounded-circle mb-2" id="profilePhoto" src="\<?php 
                                        if(!empty($user['profile_image'])){
                                            echo $user['profile_image'] ;
                                        }else{
                                            echo 'image\default-profile.png'; 
                                        }?>"

                                        alt="">
                                            


                                        <!-- File input for photo upload, hidden by default -->
                                        <input type="file" class="form-control-file d-none" id="editPhotoInput"
                                            name="profilePhoto" accept="image/*" invisible>

                                        
                                        <!-- Button to trigger file input -->
                                        <button type="button" invisible class="btn btn-primary d-none" id="editPhotoButton">Upload new
                                            image</button>




                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-12" id="myOrdersCard">
                                <div class="card mb-4 mb-xl-0">
                                    <div class="card-header">My Orders</div>
                                    <div class="card-body text-center">
                                        <a href="/myOrders">
                                            <button class="btn btn-primary" type="button">View order history</button>
                                        </a>
                                    </div>

                                </div>

                            </div>
                    </div>

                    <div class="col-xl-8" id="accountDetailsCard">
                        <!-- Account details card-->
                        <div class="card mb-4">
                            <div class="card-header">
                                <div class="row ">
                                    <div class="col-xl-12">Account Details</div>
                                    <button  id="editProfileButton"
                                        class="btn btn-secondary col-md-1 col-xl-6 mb-0 p-0 edit-profile-btn" type="button">
                                        Edit Profile</button>
                                </div>

                            </div>
                            <div class="card-body">
                                <!-- Form Group (email Address)-->
                                <div class="mb-3">
                                    <label class="small mb-1 " for="inputEmailAddress">Email Address</label>
                                    <input class="form-control" id="inputEmailAddress" type="email"
                                        placeholder="Enter your address" value="<?php echo $user['email'] ?>" required readonly>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (first name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputFirstName">First name</label>
                                        <input class="form-control" id="inputFirstName" name="inputFirstName" type="text"
                                            placeholder="Enter your first name" value="<?php echo $user['first_name'] ?>"
                                            readonly pattern="[A-Za-z ]+" title="Invalid name" required>
                                    </div>
                                    <!-- Form Group (last name)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputLastName">Last name</label>
                                        <input class="form-control" id="inputLastName" name="inputLastName" type="text"
                                            placeholder="Enter your last name" value="<?php echo $user['last_name'] ?>" readonly
                                            pattern="[A-Za-z ]+" title="Invalid name" required>
                                    </div>
                                </div>
                                <!-- Form Row  -->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (Street)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputStreetAddress">Street Address</label>
                                        <input class="form-control" id="inputStreetAddress" name="inputStreetAddress"
                                            type="text" pattern="[A-Za-z0-9 ]*" title="Invalid city name" required
                                            placeholder="Enter your street Address"
                                            value="<?php echo $address['street'] ?? "" ?>" readonly>
                                    </div>
                                    <!-- Form Group (City)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputCity">City</label>
                                        <input class="form-control" id="inputCity" name="inputCity" type="text"
                                            placeholder="Enter your city" pattern="[A-Za-z ]+" title="Invalid city name"
                                            required value="<?php echo $address['city'] ?? "" ?>" readonly>
                                    </div>
                                </div>
                                <!-- Form Group (email address)-->
                                <div class="mb-3">
                                    <!-- From Row -->
                                    <div class="row gx-3 mb-3">
                                        <!-- Form Group (Country)-->
                                        <div class="col-md-4">
                                            <label class="small mb-1" for="inputCountry">Country/Region</label>
                                            <input class="form-control" id="inputCountry" name="inputCountry" type="text"
                                                pattern="[A-Za-z ]+" title="Invalid country name" required
                                                placeholder="Enter your country" value="<?php echo $address['country'] ?? "" ?>"
                                                readonly>
                                        </div>
                                        <!-- Form Group (State)-->
                                        <div class="col-md-4">
                                            <label class="small mb-1" for="inputState">State</label>
                                            <input class="form-control" id="inputState" type="text" name="inputState"
                                                pattern="[A-Za-z ]+" title="Invalid state name" required
                                                value="<?php echo $address['state'] ?? "" ?>" readonly>
                                        </div>
                                        <!-- Form Group(ZipCode) -->
                                        <div class="col-md-2">
                                            <label class="small mb-1" for="inputZipCode">Zip Code</label>
                                            <input class="form-control" id="inputZipCode" type="number" name="inputZipCode"
                                                value="<?php echo $address['zip_code'] ?? "" ?>" pattern="[0-9]+"
                                                title="Invalid zip code value" readonly required>
                                        </div>
                                    </div>
                                </div>
                                <!-- Form Row-->
                                <div class="row gx-3 mb-3">
                                    <!-- Form Group (Phone number)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="inputPhone">Phone Number</label>
                                        <input class="form-control" id="inputPhone" name="inputPhone" type="tel"
                                            pattern="[0-9]+" value="<?php echo $address['phone'] ?? "" ?>"
                                            title="Invalid phone number" required readonly>

                                    </div>
                                    <!-- Form Group (Creation Date)-->
                                    <div class="col-md-6">
                                        <label class="small mb-1" for="regDate">Registration Date</label>
                                        <input class="form-control" id="regDate" type="text" name="regDate"
                                            value="<?php echo $user['created_at'] ?>" readonly>
                                    </div>
                                </div>
                                <!-- Save changes button-->
                                <button id="saveChangesButton" name="saveChangesButton" class="btn btn-primary invisible"
                                    type="submit">Save changes</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            </div>
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
                crossorigin="anonymous"></script>
            <?php
    }

    private function renderFooter()
    {
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