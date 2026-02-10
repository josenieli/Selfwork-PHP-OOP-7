<?php

abstract class Braccia{
    abstract public function attack();
}

class Raggio extends Braccia{
    public function attack(){
        echo "Zium zium! ";
    }
}

