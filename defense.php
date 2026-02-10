<?php
abstract class Defense {
    abstract public function def();
}

class Missili extends Defense {  
    public function def() {
        echo "Missili multipli! ";
    }
}
