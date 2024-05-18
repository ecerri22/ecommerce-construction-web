<?php

function search(callable $function){
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
            $search = $_POST['search'];
            $search = trim($search); // Remove any whitespace from the beginning and end of the data
            $search = htmlspecialchars($search);
            $data = json_decode($_POST['data'],true);
            
            $search = strtoupper($search);
            if($search == "RESET" || $search == "MUMBO JUMBO") // If the data is empty, display all products
            {
                return $function($data);
            }
            
            $basics = $_POST['basics'];
            $paras = $_POST['params'];
            $vars = $_POST['vars'];
            $id = $_POST['id'];
            $searchspan = $_POST['searchspan'];
            for($i = 0; $i<count($basics); $i++)
            {
                if($basics[$i] == $vars[$i])
                {
                    $vars[$i] = "";
                }
            }

            if(ctype_digit($search))
            {
                $search = (int)$search;
                foreach($data as $rows)
                {
                    if($rows[$id] == $search)
                    {
                        $matches[] = ['product' => $rows, 'distance' => 0];
                    }
                }
                $prods = array_map(function($match) {
                    return $match['product'];
                }, $matches);
                return $function($prods);
            }

            foreach($data as $rows)
            {
                $closest = $searchspan[findminlev($rows,$searchspan,$search)];
                $distance = (float) levenshtein($search, strtoupper($rows[$closest]))/strlen($rows[$closest]);
                if(str_contains(strtoupper($rows[$closest]), $search))
                {
                    if(hasall($paras,$vars,$rows))
                    $matches[] = ['product' => $rows, 'distance' => -1];
                }
                else if($distance <= 0.799)
                {

                    if(hasall($paras,$vars,$rows))
                    $matches[] = ['product' => $rows, 'distance' => $distance];
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
            return $function($newdata);
            
    }
    else
    {
        header("Location: /error");
    }
}

function findminlev($row,$searchspan,$search){
    $minimum = 10000000;
    $index = -1;
    for($i = 0; $i<count($searchspan); $i++)
    {
        $distance = (float) levenshtein($search, strtoupper($row[$searchspan[$i]]))/strlen($row[$searchspan[$i]]);
        if($distance <= $minimum)
        {
            $minimum = $distance;
            $index = $i;
        }
    }
    return $index;
}

function hasall($paras,$vars,$row){
    for($i = 0; $i<count($vars); $i++)
    {
        if($vars[$i] != $row[$paras[$i]] && $vars[$i] != "")
        {
            return false;
        }
    }
    return true;
}
?>