<?php

abstract class Spalle{
    abstract public function attack2();
}

class Razzo extends Spalle{
    public function attack2(){
        echo "Boom boom ";
    }
}

class Missili extends Spalle {
    public function attack2() {
        echo "Missili multipli! ";
    }
}