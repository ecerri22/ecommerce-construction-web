<?php

    require_once('Classes.php');

    function display_head()
    {
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
            <script src="javascript/functions.js"></script>
        </head>
        <?php
    }

    function display_template()
    {
        ?>
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
        <?php

    }

    function display_content()
    {
        ?>
            <div class="admin-dashboard">
                <button onclick="undoRemoveStatistic()" class = "undo-btn">Undo Delete</button>
            <!-- YOU SHOULD WORK HERE AND CONTINUE BUILDING YOUR PAGE -->
            
            <!-- If you need lorem text just type: lorem(number of words) and press the "enter"/"tab" key.
            Ex: lorem5 => Lorem ipsum dolor sit amet. -->
            <div class="statistics-box"></div>
            <!-- by using php to dynamically generate the statistics, we can easily customize the display of the statistics -->
                    <?php
                        Statistic::get_statistics(1);
                        if(isset(Statistic::$statistic_array1))
                            echo '<div class="statistics-content">';
                        foreach(Statistic::$statistic_array1 as $statistic)
                        {
                            $statistic->display_statistic();
                        }
                        if(isset(Statistic::$statistic_array1))
                            echo '</div>';
                    ?>
                    <?php
                        Statistic::get_statistics(2);
                        //this is a good way to dynamically generate the statistics, we can easily add more statistics to the page.
                        //for example , try to see the difference after the commented line below is uncommented
                        //and when its commented.
                        Statistic::$statistic_array2[count(Statistic::$statistic_array2)] = new Statistic(8,"Statistic Name",1000,-1,"icons/bar-chart.png","https://www.google.com",2);
                        //the "https://www.google.com" is just a placeholder, if we are going to make it so when the statistic is clicked 
                        //it sends you to another file instead of just modfying the current file we can change this to the file path.
                        if(isset(Statistic::$statistic_array2))
                            echo '<div class = "statistics-content-2">';
                        foreach(Statistic::$statistic_array2 as $statistic)
                        {
                            $statistic->display_statistic();
                        }
                        ?>
                        
                        <button class="green-button" id="statistic_2_maker">
                            <i class="fas fa-plus" style="color: white; "></i>
                        </button>
                        <?php
                        if(isset(Statistic::$statistic_array2))
                            echo '</div>';
                    ?>
                <!-- the graphs are a little bit more complex to generate dynamically, so i will do this part later-->
                <?php
                    //again , all these values should be retrieved from the database
                    $graphs = array(new graph(1,"Yearly Performance",[[65, 59, 80, 81, 56, 55, 40],[28, 48, 40, 19, 86, 27, 90],[93, 34, 67, 12, 56, 78, 23]],[["Jan","Feb","Mar","Apr","May","Jun","Jul"],["Users","Sales","Orders"]],"line")
                    ,new graph(2,"Costs",[5000,3000,2000,1500],["Marketing","Operations","Supplies","Utilites"],"pie"));
                    if(isset($graphs))
                        echo '<div class="graphs">';
                        echo '<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>';
                        echo ' <script src="javascript/graphs.js"></script>';
                    foreach($graphs as $graph)
                    {
                        $graph->display_graph();
                    }
                    if(isset($graphs))
                        echo '</div>';
                ?>
            </div>
    </div>

        <?php
    }


?>