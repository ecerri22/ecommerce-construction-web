<?php
//we should probably make a sort of mini database for each page in order to store
//the customaizable elements of the page and then use that to generate the page
//this will make it easier to add new/remove/modify elements of the page as the customer wants to
//this way of generating html is also shorter line wise i think

use Pages\DashboardAdminView;

$dashboard = new DashboardAdminView();
$dashboard->render();

