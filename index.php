<?php
require('gambe.php');
require('braccia.php');
require('defense.php');

class Ironman {
    public $attack;
    public $defense;
    public static $counter = 0;
    
    public function __construct($attack, $defense) {
        $this->attack = $attack;
        $this->defense = $defense;
        self::$counter++;
    }

    public function ironmanAttack(){
        $this->attack->attack();
    }
    
    public function ironmanDefense(){
        $this->defense->def();
    }
    
    
}

$ironman = new Ironman(new Raggio(), new Missili());


$ironman->ironmanAttack();
$ironman->ironmanDefense();
echo Ironman::$counter . "\n";
$ironman2 = new Ironman(new Raggio(), new Missili());
echo Ironman::$counter . "\n";
