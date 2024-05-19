<?php

namespace Models;
use Core\Database;
use Core\App;

class Statistic {
    static $db;
    private $statistic_id;
    private $statistic_name;
    private $statistic_value;
    private $statistic_prev_value;
    private $statistic_icon;
    private $statistic_type;
    private $statistic_destination;
    static $cnt = 0;
    static $statistic_array1 = array();
    static $statistic_array2 = array();

    public function __construct($statistic_id, $statistic_name, $statistic_value, $statistic_prev_value, $statistic_icon, $statistic_destination ,$statistic_type){
        $this->statistic_id = $statistic_id;
        $this->statistic_name = $statistic_name;
        $this->statistic_value = $statistic_value;
        $this->statistic_prev_value = $statistic_prev_value;
        $this->statistic_icon = $statistic_icon;
        $this->statistic_type = $statistic_type;
        $this->statistic_destination = $statistic_destination;
    }

    public function display_statistic(){ // displays the statistic, icon, name and value
        
        $val = $this->statistic_value;
        if(!ctype_digit($this->statistic_value))
        {
            $val = App::container()->resolve('Core\Database')->query($this->statistic_value,[])->get();
            $this->statistic_value = str_replace("'","\\'",$this->statistic_value);
        }
        if($this->statistic_type == 1){
            echo '<a href="'. $this->statistic_destination .'" id="statistic_'. $this->statistic_id. '" class="statistic">';
            echo '<img class="statistic-icon" src ="Thanas/'. $this->statistic_icon . '">';
            //echo '<button class="delete-btn" onclick ="removeStatisticAndAnimate(event,this,'.$this->statistic_id.');">X</button>'; // Add delete button
            echo '<h3 style="color:gray; font-size:1.4rem; font-weight:500;">' . $this->statistic_name .'</h3>';
            echo "<p style = 'font-weight:900; font-size:3rem; color: #061538;'>".$val ."</p>";
            $this->display_diff();
            echo '<h4 style="color:gray; font-weight:500; font-size:1rem; ">From Last Month</h4>';
            echo '</a>';
            echo '<script> addClickEventToDiv("'.$this->statistic_destination.'","statistic_'. $this->statistic_id.'");</script>';
        }
        else if($this->statistic_type == 2){
            echo '<a href="'.$this->statistic_destination.'" id="statistic_'. $this->statistic_id . '" class = "statistic-2">';
                echo '<img class="statistic-icon-2" src="Thanas/'.$this->statistic_icon.'">';
            echo '<div class = "statistic-2-info">';
                    echo "<div style='color:gray; font-size:1.1rem; font-weight:500;'>".$this->statistic_name ."</div>";
                        echo '<div>';
                            echo "<p style = 'font-weight:900; font-size:30px; color: #061538;'>".$val[0]['COUNT(*)']."</p>";
                        echo '</div>';
                echo '</div>';
                ?>
            <button class="delete-btn" onclick ="removeStatisticAndAnimate(event,this,'<?php echo $this->statistic_name?>','<?php echo $this->statistic_value?>','<?php echo $this->statistic_prev_value?>','<?php echo $this->statistic_icon?>','<?php echo $this->statistic_type?>','<?php echo $this->statistic_destination?>','<?php echo $this->statistic_id?>');">X</button></a><?php
                //echo '<script> addClickEventToDiv("'.$this->statistic_destination.'","statistic_'. $this->statistic_id.'");</script>';
        }
        self::$cnt+=1;     
    }

    private function display_diff()//displays growth compared to another time period,parameters will be retreived from database later.
    {
        $diff = (($this->statistic_value-$this->statistic_prev_value)/$this->statistic_value)*100;
        $diff = number_format($diff,2);
        if ($this->statistic_value > $this->statistic_prev_value) {
            echo "<p style='color:green; font-family: inherit; font-size:2rem; font-weight:700;'>&uarr; $diff%</p>";
        } elseif ($this->statistic_value < $this->statistic_prev_value) {
            echo "<p style='color:red; font-family: inherit; font-size:2rem; font-weight:700;'>&darr; $diff%</p>";
        } else {
            echo "<p style='color:orange; font-family: inherit; font-size:2rem; font-weight:700;'>&#45; Equal</p>";
        }
    }

    public static function get_statistics($type){
        self::$db = App::container()->resolve('Core\Database');
        $sql = "SELECT * FROM statistics WHERE statistics.type = $type";
        $result = self::$db->query($sql)->get();

        $i=0;
        foreach($result as $row){
            if($type == 1)
                Statistic::$statistic_array1[$i++] = Statistic::db_to_statistic($row);
            else if($type == 2)
                Statistic::$statistic_array2[$i++] = Statistic::db_to_statistic($row);
        }
    }

    public function to_db_format(){
        return array($this->statistic_name, $this->statistic_value, $this->statistic_prev_value, $this->statistic_icon, $this->statistic_type, $this->statistic_destination,$this->statistic_id);
    }

    public static function db_to_statistic($row){
        return new Statistic($row['id'],$row['name'], $row['value'], $row['prev_value'], $row['icon'],$row['destination'], $row['Type']);
    }

    public static function add_statistic_to_array($statistic, $type){
        if($type == 1){
            Statistic::$statistic_array1[count(Statistic::$statistic_array1)] = $statistic;
        }
        else if($type == 2){
            Statistic::$statistic_array2[count(Statistic::$statistic_array2)] = $statistic;
        }
    }

    public static function remove_statistic_from_array($statistic_idd, $type){
        if($type==1)
            $arr=Statistic::$statistic_array1;
        else if($type==2)
            $arr=Statistic::$statistic_array2;
        for($i = 0; $i < count($arr); $i++){
            if($arr[$i]->statistic_id == $statistic_idd){
                unset($arr[$i]);
                $arr = array_values($arr);
                if($type==1)
                    Statistic::$statistic_array1 = $arr;
                else if($type==2)
                    Statistic::$statistic_array2 = $arr;
                return;
            }
        }
    }
}

