<?php 
    class calculadora {
        public function soma($numero1, $numero2){
            return $numero1 + $numero2;
        }
        public function subtrai($numero1, $numero2){
            return $numero1 - $numero2;
        }
        public function divide($numero1, $numero2){
            return $numero1 / $numero2;
        }
        public function multiplica($numero1, $numero2){
            return $numero1 * $numero2;
        }
    }
        $calc = new calculadora();
        echo $calc->soma(7,3) . "<br>";
        echo $calc->subtrai(2,4) ."<br>";
        echo $calc->divide(5,8) ."<br>";
        echo $calc->multiplica(4,2) . "<br>";
?>