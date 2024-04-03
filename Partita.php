<?php

class Partita{

private $id;
private $squadra_1;
private $squadra_2;
private $goals_squadra_1;
private $goals_squadra_2;

public function __construct($id,$squadra_1,$squadra_2,$goals_squadra_1,$goals_squadra_2){


    $this->id=$id;
    $this->squadra_1=$squadra_1;
    $this->squadra_2=$squadra_2;
    $this->goal_squadra_1=$goals_squadra_1;
    $this->goal_squadra_2=$goals_squadra_2;

}

}

?>
