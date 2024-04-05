<?php

    class Statistic{
        private $statistic_name;
        private $statistic_value;
        private $statistic_prev_value;
        private $statistic_icon;

        public function __construct($statistic_name, $statistic_value, $statistic_prev_value, $statistic_icon){
            $this->statistic_name = $statistic_name;
            $this->statistic_value = $statistic_value;
            $this->statistic_prev_value = $statistic_prev_value;
            $this->statistic_icon = $statistic_icon;
        }

        function display_statistic_one(){ // displays the statistic, icon, name and value
            echo '<div class="statistic">';
            echo '<img class = "statistic-icon" src ="'. $this->statistic_icon . '">';
            echo '<h3 style="color:gray; font-size:24px">' . $this->statistic_name .'</h3>';
            echo "<p style = 'font-weight:900; font-size:30px;'>".$this->statistic_value ."</p>";
            $this->display_diff();
            echo '<h4 style="color:gray;">From Last Month</h4>';
            echo '</div>';
        }

        function display_statistic_two(){ // displays the statistic, icon, name and value
               echo '<div class = "statistic-2">';
                        echo '<img class = "statistic-icon-2" src = "'.$this->statistic_icon .'">';
                    echo '<div class = "statistic-2-info">';
                        echo '<div>'.$this->statistic_name .'</div>';
                            echo '<div>';
                                echo "<p style = 'font-weight:900; font-size:30px;'>".$this->statistic_value."</p>";
                            echo '</div>';
                    echo '</div>';
                echo '</div>';
        }

        function display_diff()//displays growth compared to another time period,parameters will be retreived from database later.
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

        function display_graph($i){
            if($this->graph_type == "line"){
                echo '<div class = "graph-line">';
                    echo '<h2 class = "graph-title">'.$this->graph_name.'</h2>';
                    echo '<div class = "line-graph">';
                        echo '<canvas class="myLineChart"></canvas>';//the Line-graph class is just there so i can access it with javascript. i must target the canvas element
                        echo '<script>linechart()</script>';//here we initialize the counter
                        echo '<script>linechart.createchart(' . json_encode($this->graph_data).', '.json_encode($this->graph_labels[0]).','.json_encode($this->graph_labels[1]).','.$i.');</script>';
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
                echo '<script>piechart.createchart(' . json_encode($data) . ', "' . $this->graph_name .','.$i.'");</script>';
                echo '</div></div>';
                    
            }
        }
    }


?>