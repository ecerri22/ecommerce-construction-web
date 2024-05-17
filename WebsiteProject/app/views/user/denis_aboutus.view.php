<?php

use Pages\AboutUsView;

$aboutUsView = new AboutUsView("About Us", 'Denis/denisStyles.css');
$aboutUsView->render();

$query = "SELECT * FROM about_us_content";
$query_run= mysqli_query($connection,$query);

if(mysqli_num_rows($query_run))
{


foreach($query_run as $row)
{
   ?>
   echo $row['id'];
   echo  $row['section_name'];
   echo $row['content'];
   <?php
}
}
else
{
    echo "No info found!!";
}
?>