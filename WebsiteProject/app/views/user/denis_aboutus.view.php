<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="AboutUs.css" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Web</title>
    
    <!-- <link rel="stylesheet" href="denisStyles.css" /> -->
    <link rel="stylesheet" href="/public/Denis/denisStyles.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
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

    <div class="content">
        <!--About Us section -->
        <section class="about-us">
            <div class="about-container">
               
                <h2 class="header">About Our Company</h2>
                <p>Construction Web has been a pioneer in the construction industry since 1998, specializing in both residential and commercial projects. Our commitment to innovation and excellence has established us as a leader in the field, delivering projects that not only meet but exceed our clients' expectations.</p>
                
                <div class="history">
                    <h3>Our History </h3>
                    <p>Founded by a group of ambitious engineers, Construction Web started as a small firm focused on small to medium-sized construction projects. Over the years, we have expanded our expertise to include large-scale commercial developments, gaining recognition for our sustainable practices and cutting-edge architectural designs.</p>
                </div>

                <div class="team">
                    <h3>Meet Our Team</h3>
                    <div class="team-members">
                        <div class="team-member">
                            <img src="/public/image/customer-4.jpg" alt="Person 1" class="team-photo">
                            <div class="member-info">
                                <h4>John Doe </h4>
                                <p>CEO & Founder</p>
                            </div>
                        </div>
                        <div class="team-member">
                            <img src="/public/image/customer-1.jpg" alt="Person 2" class="team-photo">
                            <div class="member-info">
                                <h4>Jane Doe</h4>
                                <p>Chief Engineer</p>
                            </div>
                        </div>
                        <div class="team-member">
                            <img src="/public/image/person-9.jpg" alt="Person 3" class="team-photo">
                            <div class="member-info">
                                <h4>James Smith</h4>
                                <p>Project Manager</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mission">
                    <h3>Our Mission</h3>
                    <p>To lead the construction industry by creating unparalleled value for our clients through innovation, foresight, and reliability, ensuring that our projects are completed on time, on budget, and to the highest standards of quality.</p>
                </div>

                <div class="value">
                    <h3>Our Valued Clients</h3>
                    <p>Our team has always embraced our clients and partners as part of Our Team. Every project is performed with open communication. The Partnering methodology is implemented and a mutual respect with our clients provides the groundwork for our success</p>
                </div>

                <div class="why-us">
                    <h3>Why us?</h3>
                    <p>Choose our construction company for unparalleled expertise, meticulous attention to detail, and a commitment to exceeding expectations. With a proven track record of delivering exceptional results, we ensure your project is completed on time, within budget, and to the highest standards.</p>
                </div> 
            </div>
        </section>

    </div>

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
                <!-- <li><p>Account</p></li> -->
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

</body>
</html>
