<?php
    function display_diff($number,$prevNumber)//displays growth compared to another time period,parameters will be retreived from database later.
    {
        $diff = (($number-$prevNumber)/$number)*100;
        $diff = number_format($diff,2);
        if ($number > $prevNumber) {
            echo "<i class='fas fa-arrow-up arrow' style='color:green;margin-left:-60px;padding-top:30px;'>$diff%</i>";
        } elseif ($number < $prevNumber) {
            echo "<i class='fas fa-arrow-down arrow' style='color:red;margin-left:-60px;padding-top:30px'>$diff%</i>";
        } else {
            echo "<i class='fas fa-minus arrow' style='color:orange;margin-left:-60px;padding-top:30px'>Equal</i>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construction Web</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="components.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="sidebar">
        <h3 class="logo">LOGO</h3>
        <ul class="tabs-list-sidebar">
            <li class="tab-sidebar">
                <a href="#" class="tab-link-sidebar">
                    <i class="fas fa-th-large"></i>
                    <p class="tab-txt-sidebar">Dashboard</p>
                </a>
            </li>
            <li class="tab-sidebar">
                <a href="#" class="tab-link-sidebar">
                    <i class="fas fa-box-open"></i> 
                    <p class="tab-txt-sidebar">Products</p>
                </a>
            </li>
            <li class="tab-sidebar">
                <a href="#" class="tab-link-sidebar">
                    <i class="fas fa-file-alt"></i>
                    <p class="tab-txt-sidebar">Orders</p>
                </a>
            </li>
            <li class="tab-sidebar">
                <a href="#" class="tab-link-sidebar">
                    <i class="fas fa-user"></i>
                    <p class="tab-txt-sidebar">Users</p>
                </a>
            </li>
            <li class="tab-sidebar">
                <a href="#" class="tab-link-sidebar">
                    <i class="fas fa-comment"></i>
                    <p class="tab-txt-sidebar">Reviews</p>
                </a>
            </li>
        </ul>
        <button class="logout-sidebar">
            <i class="fas fa-sign-out-alt logout-icon"></i>
            <p class="logout-text-sidebar">LOG OUT</p>
        </button>
    </div>

    <div class="content"> 
        <nav class="admin-navbar">
            <button class="notif-btn">
                <i class="fas fa-bell"></i>
            </button>
            <button class="admin-name">
                <!-- <img src=""/> -->
                <div class="user-pfp"></div>
                <p>Admin</p>
            </button>
        </nav>
        
        <div class="admin-dashboard">
            <!-- YOU SHOULD WORK HERE AND CONTINUE BUILDING YOUR PAGE -->
            
            <!-- If you need lorem text just type: lorem(number of words) and press the "enter"/"tab" key.
            Ex: lorem5 => Lorem ipsum dolor sit amet. -->
            <div class="statistics-box"></div>
                <div class="statistics-content">
                    <div class="statistic">
                        <img class = "statistic-icon" src = "icons/user.png">
                        <h3 style="color:gray; font-size:24px">Total Users</h3>
                        <?php
                            $number=500;//will be replaced by number gotten from database
                            echo "<p style = 'font-weight:900; font-size:30px;'>$number</p>";
                            $prevNumber = 500; // Replace this with the previous number you want to compare with
                            display_diff($number,$prevNumber);
                        ?>
                        <h4 style="color:gray;">From Last Month</h4>
                    </div>
                    <div class="statistic">
                    <img class = "statistic-icon" src = "icons/order.png">
                    <h3 style="color:gray; font-size:24px">Total Orders</h3>
                        <?php
                            $number=500;//will be replaced by number gotten from database
                            echo "<p style = 'font-weight:900; font-size:30px;'>$number</p>";
                            $prevNumber = 200; // Replace this with the previous number you want to compare with
                            display_diff($number,$prevNumber);
                        ?>
                        <h4 style="color:gray;">From Last Month</h4>
                    </div>
                    <div class="statistic">
                        <img class = "statistic-icon" src = "icons/checkout.png">
                        <h3 style="color:gray; font-size:24px">Total Products Sold</h3>
                            <?php
                            $number=300;//will be replaced by number gotten from database
                            echo "<p style = 'font-weight:900; font-size:30px;'>$number</p>";
                            $prevNumber = 100; // Replace this with the previous number you want to compare with
                            display_diff($number,$prevNumber);
                            ?>
                        <h4 style="color:gray;">From Last Month</h4>
                    </div>
                    <div class = "statistic">
                    <img class = "statistic-icon" src = "icons/bar-chart.png">
                        <h3 style="color:gray; font-size:24px">Quarter Earnings</h3>
                            <?php
                            $number=676;//will be replaced by number retrieved from database
                            echo "<p style = 'font-weight:900; font-size:30px;'>$number$</p>";
                            $prevNumber = 400; // Replace this with the previous number you want to compare with
                            display_diff($number,$prevNumber);
                            ?>
                        <h4  style="color:gray;">From Last Quarter</h4>
                    </div>
                </div>
                <div class = "statistics-content-2">
                    <div class = "statistic-2">
                        <img class = "statistic-icon-2" src = "icons/box.png">
                        <div class = "statistic-2-info">
                            <div>Pending Orders</div>
                            <div>
                                <?php
                                $number=98;//will be replaced by number gotten from database
                                echo "<p style = 'font-weight:900; font-size:30px;'>$number</p>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class = "statistic-2">
                        <img class = "statistic-icon-2" src = "icons/cancel.png">
                        <div class = "statistic-2-info">
                            <div>Canceled Orders</div>
                            <div>
                                <?php
                                $number=32;//will be replaced by number gotten from database
                                echo "<p style = 'font-weight:900; font-size:30px;'>$number</p>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class = "statistic-2">
                        <img class = "statistic-icon-2" src = "icons/visits.png">
                        <div class = "statistic-2-info">
                            <div>Page Visits</div>
                            <div>
                                <?php
                                $number=2156;//will be replaced by number gotten from database
                                echo "<p style = 'font-weight:900; font-size:30px;'>$number</p>";
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="graphs">
                    <div class = "graph-1">
                        <h2 class = "graph-title">Yearly Performance</h2>
                        <div class = "line-graph">
                            <canvas id="myChart"></canvas>
                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <script src="graphs.js"></script>
                        </div>
                    </div>
                    <div class = "graph-2">
                    <h2 class = "graph-title">Costs</h2>
                        <div  class = "piechart">
                            <canvas id="myPieChart"></canvas>
                            <script src="piechart.js"></script>
                            <script> piechart(); </script>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <footer class="footer">
        
    </footer>  
    

    </body>

</html>