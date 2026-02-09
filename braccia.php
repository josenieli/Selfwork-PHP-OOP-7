<?php

abstract class Braccia{
    abstract public function attack1();
}

class Raggio extends Braccia{
    public function attack1(){
        echo "Zium zium! ";
    }
}

class Pugno extends Braccia {
    public function attack1() {
        echo "Pugno repulsore! ";
    }
}