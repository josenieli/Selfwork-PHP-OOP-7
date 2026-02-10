<?php

abstract class Gambe{
    abstract public function move();
}

class Volo extends Gambe{
    public function move(){
        echo "Verso l'infito e oltre! ";
    }
}

