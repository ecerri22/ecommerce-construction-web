<?php

use Pages\ProductsAdminView;

$path = __DIR__;
include_once str_replace("public\\Atea", "app\\Pages\\ProductsAdminView.php", $path);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
        $search = $_POST['search'];
        $search = trim($search); // Remove any whitespace from the beginning and end of the data
        $search = htmlspecialchars($search);
        $data = json_decode($_POST['data'],true);
        
        if($search == "Reset" || $search == "Mumbo Jumbo") // If the data is empty, display all products
        {
            return ProductsAdminView::showtable($data);
        }

        $category = $_POST['category'];
        $material = $_POST['Material'];
        $measures = $_POST['measurement'];

        if($category == "Select category")
        {
            $category = "";
        }
        if($material == "Select Material")
        {
            $material = "";
        }
        if($measures == "Select Unit of Measurement")
        {
            $measures = "";
        }

        foreach($data as $rows)
        {
            $nameDistance = levenshtein($search, $rows['name']);
            $descriptionDistance = levenshtein($search, $rows['description']);
            if ($nameDistance <= $descriptionDistance/25 || str_contains($rows['name'], $search)) {
                if(str_contains($rows['name'], $search))
                {
                    $nameDistance = 0;
                }
                if($nameDistance <= 4)
                {
                    if((($rows["category_name"] == $category) || $category == "") && (($rows["material"] ==  $material) || $material == "") && (($rows["unit_of_measure"] == $measures) || $measures == ""))
                    {
                        $matches[] = ['product' => $rows, 'distance' => $nameDistance];
                    }
                    
                }
                
            }
            // If the description is a better match, add to matches
            else {
                if(str_contains($rows['description'], $search))
                {
                    if((($rows["category_name"] == $category) || $category == "") && (($rows["material"] ==  $material) || $material == "") && (($rows["unit_of_measure"] == $measures) || $measures == ""))
                    {
                        $matches[] = ['product' => $rows, 'distance' => $nameDistance];
                    }
                }
            }
        }

        if(isset($matches)){
            usort($matches, function($a, $b) {
                return $a['distance'] - $b['distance'];
            });
            }
            else{
                $matches = array();
            }

        $newdata = array_map(function($match) {
            return $match['product'];
        }, $matches);
        return ProductsAdminView::showtable($newdata);
        
}
else
{
    header("Location: /allProducts");
}
?>