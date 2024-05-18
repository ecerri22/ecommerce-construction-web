<?php

namespace Models;

class Graph{
    private $statistic_id;
    private $graph_name;
    private $graph_data;
    private $graph_labels;
    private $graph_type;

    public function __construct($statistic_id,$graph_name, $graph_data, $graph_labels, $graph_type){
        $this->statistic_id = $statistic_id;
        $this->graph_name = $graph_name;
        $this->graph_data = $graph_data;
        $this->graph_labels = $graph_labels;
        $this->graph_type = $graph_type;
    }

    function display_graph(){
        if($this->graph_type == "line"){
            echo '<div class = "graph-line">';
            echo '<button class="delete-btn" onclick ="removeStatisticAndAnimate(event,this,'.$this->statistic_id.');">X</button>';
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
            echo '<button class="delete-btn" onclick ="removeStatisticAndAnimate(event,this,'.$this->statistic_id.');">X</button>';
            echo '<h2 class = "graph-title">'.$this->graph_name.'</h2>';
            echo '<div  class = "piechart">';
            echo '<canvas class="myPieChart"></canvas>';
            echo '<script>piechart()</script>';//here we initialize the counter
            echo '<script>piechart.createchart(' . json_encode($data) . ', "' . $this->graph_name .'");</script>';
            echo '</div></div>';
                
        }
    }
}

