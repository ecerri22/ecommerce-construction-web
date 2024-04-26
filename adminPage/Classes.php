<?php
    require_once 'database/dbconnect.php';
    class Statistic{
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

        public function __construct($statistic_id,$statistic_name, $statistic_value, $statistic_prev_value, $statistic_icon, $statistic_destination ,$statistic_type){
            $this->statistic_id = $statistic_id;
            $this->statistic_name = $statistic_name;
            $this->statistic_value = $statistic_value;
            $this->statistic_prev_value = $statistic_prev_value;
            $this->statistic_icon = $statistic_icon;
            $this->statistic_type = $statistic_type;
            $this->statistic_destination = $statistic_destination;

        }

        public function display_statistic(){ // displays the statistic, icon, name and value
            if($this->statistic_type == 1){

                echo '<a href="'. $this->statistic_destination .'" id="statistic_'. self::$cnt . '" class="statistic">';
                echo '<img class = "statistic-icon" src ="'. $this->statistic_icon . '">';
                echo '<button class="delete-btn" onclick ="removeStatisticAndAnimate(event,this,'.$this->statistic_id.');">X</button>'; // Add delete button
                echo '<h3 style="color:gray; font-size:24px">' . $this->statistic_name .'</h3>';
                echo "<p style = 'font-weight:900; font-size:30px;'>".$this->statistic_value ."</p>";
                $this->display_diff();
                echo '<h4 style="color:gray;">From Last Month</h4>';
                echo '</a>';
                echo '<script> addClickEventToDiv("'.$this->statistic_destination.'","statistic_'. self::$cnt.'");</script>';
            }
            else if($this->statistic_type == 2){
                echo '<a href="'. $this->statistic_destination .'" id="statistic_'. self::$cnt . '" class = "statistic-2">';
                        echo '<img class = "statistic-icon-2" src = "'.$this->statistic_icon .'">';
                    echo '<div class = "statistic-2-info">';
                        echo '<div>'.$this->statistic_name .'</div>';
                            echo '<div>';
                                echo "<p style = 'font-weight:900; font-size:30px;'>".$this->statistic_value."</p>";
                            echo '</div>';
                    echo '</div>';
                echo '<button class="delete-btn" onclick ="removeStatisticAndAnimate(event,this,'.$this->statistic_id.');">X</button>
                </a>';
                 echo '<script> addClickEventToDiv("'.$this->statistic_destination.'","statistic_'. self::$cnt.'");</script>';
            }
            self::$cnt+=1;
            
        }

        public function display_diff()//displays growth compared to another time period,parameters will be retreived from database later.
        {
            $diff = (($this->statistic_value-$this->statistic_prev_value)/$this->statistic_value)*100;
            $diff = number_format($diff,2);
            if ($this->statistic_value > $this->statistic_prev_value) {
                echo "<i class='fas fa-arrow-up arrow' style='color:green;margin-left:-60px;padding-top:30px;'>$diff%</i>";
            } elseif ($this->statistic_value < $this->statistic_prev_value) {
                echo "<i class='fas fa-arrow-down arrow' style='color:red;margin-left:-60px;padding-top:30px'>$diff%</i>";
            } else {
                echo "<i class='fas fa-minus arrow' style='color:orange;margin-left:-60px;padding-top:30px'>Equal</i>";
            }
        }
        public static function get_statistics($type){
            global $conn;
            $sql = "SELECT * FROM statistics WHERE statistics.type = $type";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            $i=0;
            foreach($result as $row){
                if($type == 1)
                    Statistic::$statistic_array1[$i++] = Statistic::db_to_statistic($row);
                else if($type == 2)
                    Statistic::$statistic_array2[$i++] = Statistic::db_to_statistic($row);
            }
        }

        public function to_db_format(){
            return array($this->statistic_name, $this->statistic_value, $this->statistic_prev_value, $this->statistic_icon, $this->statistic_type, $this->statistic_destination);
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

    class graph{
        private $graph_name;
        private $graph_data;
        private $graph_labels;
        private $graph_type;

        public function __construct($graph_name, $graph_data, $graph_labels, $graph_type){
            $this->graph_name = $graph_name;
            $this->graph_data = $graph_data;
            $this->graph_labels = $graph_labels;
            $this->graph_type = $graph_type;
        }

        function display_graph(){
            if($this->graph_type == "line"){
                echo '<div class = "graph-line">';
                    echo '<h2 class = "graph-title">'.$this->graph_name.'</h2>';
                    echo '<div class = "line-graph">';
                        echo '<canvas class="myLineChart"></canvas>';//the Line-graph class is just there so i can access it with javascript. i must target the canvas element
                        echo '<script>linechart()</script>';//here we initialize the counter
                        echo '<script>linechart.createchart(' . json_encode($this->graph_data).', '.json_encode($this->graph_labels[0]).','.json_encode($this->graph_labels[1]).');</script>';
                    echo '</div></div>';
            }
            else if($this->graph_type == "pie"){
                $data = array();
                for($i = 0; $i < count($this->graph_data); $i++){
                    $data[$this->graph_labels[$i]] = $this->graph_data[$i];
                }
                echo '<div class = "graph-pie">';
                echo '<h2 class = "graph-title">'.$this->graph_name.'</h2>';
                echo '<div  class = "piechart">';
                echo '<canvas class="myPieChart"></canvas>';
                echo '<script>piechart()</script>';//here we initialize the counter
                echo '<script>piechart.createchart(' . json_encode($data) . ', "' . $this->graph_name .'");</script>';
                echo '</div></div>';
                    
            }
        }
    }

?>