<?php

use Core\App;
use Core\Database;
use Models\Statistic;


$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\App.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\Container.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Core\\Database.php", $path);
$path = __DIR__;
include_once str_replace("public\\Thanas\\javascript", "app\\Models\\statistic.php", $path);


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    

    $name = $_POST['name'];
    $type = $_POST['type'];
    $category = $_POST['category'];

    $nrtotabel = array(1=>'orders', 2=> "products", 3=>"users", 4=>"reviews");
    $nrtodestination = array(1=>'/allOrdersAdmin', 2=> "/allProductsAdmin", 3=>"/allUsersAdmin", 4=>"allProductsAdmin");
    $dest = $nrtodestination[$category];
    $table = $nrtotabel[$category];
    $name = htmlspecialchars(trim($name));


    if(is_null(App::container())){
        App::setContainer(new \Core\Container());
        App::container()->bind('Core\Database', function () {
            $path = __DIR__;
            $config = require str_replace("public\\Thanas\\javascript", "app\\config.php", $path);
            return new Database($config);
        });
    }

    $icon = null;

    if (!empty($_FILES["icon"]["name"])) {
        $fileName = basename($_FILES["icon"]["name"]);
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION);
        $icon = "icons/" . $fileName;
        $allowedTypes = array('jpg', 'png', 'jpeg', 'gif');

        if (in_array($fileType, $allowedTypes)) {
            $image = $_FILES["icon"]['tmp_name'];
            
            $destination = "..\\icons\\" . $fileName;
            
            move_uploaded_file($image, "..\\icons\\" . $fileName);
        }
    }
    else{
        $icon = "icons/bar-chart.png";
    }   

    $where = "";
    if($category == 1 && $type != "All")
        $where = 'WHERE status = \''. $type.'\'';
    else if($category == 2 && $type != "All")
        $where = 'JOIN categories on products.category_id = categories.category_id WHERE category_name = \''. $type.'\'';

    $query1 = "SELECT COUNT(*) FROM ".$table." " . $where.";";
    $params = [];

    $id = rand(101,9999999);
    $statistic = new Statistic($id,$name,$query1,-1,$icon ,$dest,2);
    $query = "INSERT INTO statistics(name, value, prev_value, icon, type,destination,id) VALUES (?, ?, ?, ?, ?, ?,?)";
    $params = $statistic->to_db_format();
    App::container()->resolve('Core\Database')->query($query, $params)->get();
    echo $statistic->display_statistic();
} else {
    echo header('Location: /error');
}
?>