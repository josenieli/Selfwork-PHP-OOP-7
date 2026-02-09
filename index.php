<?php
require_once ('gambe.php');
require_once ('braccia.php');
require_once ('petto.php');

class Ironman {
    public $gamba;
    public $braccio;
    public $spalla;
    public static $counter = 0;
    
    public function __construct() {
        self::$counter++;  
        
        $sceltaGamba = rand(1, 2);
        switch ($sceltaGamba) {
            case 1:
                $this->gamba = new Volo();
                break;
            case 2:
                $this->gamba = new Cammina();
                break;
        }
        
        $sceltaBraccio = rand(1, 2);
        switch ($sceltaBraccio) {
            case 1:
                $this->braccio = new Raggio();
                break;
            case 2:
                $this->braccio = new Pugno();
                break;
        }
        
        $sceltaSpalla = rand(1, 2);
        switch ($sceltaSpalla) {
            case 1:
                $this->spalla = new Razzo();
                break;
            case 2:
                $this->spalla = new Missili();
                break;
        }
    }
    
    public function attaccoCompleto() {
        echo "Ironman #" . self::$counter . ": ";
        $this->gamba->move();
        $this->braccio->attack1();
        $this->spalla->attack2();
        echo "\n";
    }
    
    public static function getContatore() {
        return self::$counter;  
    }
}


echo "GENERAZIONE ESERCITO IRONMAN\n";
$ironman1 = new Ironman();
$ironman1->attaccoCompleto();

$ironman2 = new Ironman(); 
$ironman2->attaccoCompleto();

$ironman3 = new Ironman();
$ironman3->attaccoCompleto();

$ironman3 = new Ironman();
$ironman3->attaccoCompleto();

echo "Totale Ironman creati: " . Ironman::getContatore() . "\n";
