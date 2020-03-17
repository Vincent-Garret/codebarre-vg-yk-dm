<?php

include_once 'elements.php';

class CodeBar{
private $code;
private $premierChiffre = [
    0=>['A','A','A','A','A','A'],
    1=>['A','A','B','A','B','B'],
    2=>['A','A','B','B','A','B'],
    3=>['A','A','B','B','B','A'],
    4=>['A','B','A','A','B','B'],
    5=>['A','B','B','A','A','B'],
    6=>['A','B','B','B','A','A'],
    7=>['A','B','A','B','A','B'],
    8=>['A','B','A','B','B','A'],
    9=>['A','B','B','A','B','A'],
];
private $elements = [
        'ZoneNormale' => [1,0,1],
        'ZoneCentrale' => [0,1,0,1,0],
        'A' => [
            0 => [0,0,0,1,1,0,1],
            1 => [0,0,1,1,0,0,1],
            2 => [0,0,1,0,0,1,1],
            3 => [0,1,1,1,1,0,1],
            4 => [0,1,0,0,0,1,1],
            5 => [0,1,1,0,0,0,1],
            6 => [0,1,0,1,1,1,1],
            7 => [0,1,1,1,0,1,1],
            8 => [0,1,1,0,1,1,1],
            9 => [0,0,0,1,0,1,1]
        ],
        'B' => [
            0 => [0,1,0,0,1,1,1],
            1 => [0,1,1,0,0,1,1],
            2 => [0,1,1,0,0,1,1],
            3 => [0,1,0,0,0,0,1],
            4 => [0,0,1,1,1,0,1],
            5 => [0,1,1,1,0,0,1],
            6 => [0,0,0,0,1,0,1],
            7 => [0,0,1,0,0,0,1],
            8 => [0,0,0,1,0,0,1],
            9 => [0,0,1,0,1,1,1]
        ],
        'C' => [
            0 => [1,1,1,0,0,1,0],
            1 => [1,1,0,0,1,1,0],
            2 => [1,1,0,1,1,0,0],
            3 => [1,0,0,0,0,1,0],
            4 => [1,0,1,1,1,0,0],
            5 => [1,0,0,1,1,1,0],
            6 => [1,0,1,0,0,0,0],
            7 => [1,0,0,0,1,0,0],
            8 => [1,0,0,1,0,0,0],
            9 => [1,1,1,0,1,0,0]
        ]
    ];

    /**
     * @return mixed
     */
    public function getZoneNormale() {
        foreach ($this->elements['ZoneNormale'] as $bit){
            if ($bit == 1) {
                echo "<div class='garde'></div>";
            } else {
                echo "<div class='blanche'></div>";
            }
        }
    }
    /**
     * @return mixed
     */
    public function getZoneCentrale() {
        foreach ($this->elements['ZoneCentrale'] as $bit){
            if ($bit == 1) {
                echo "<div class='garde'></div>";
            } else {
                echo "<div class='blanche'></div>";
            }
        }
    }

    public function partie1()
    {
        $A = $this->elements['A'];
        $B = $this->elements['B'];
        //foreach ($A as $value) {
            //var_dump($value);
        //}
        $str = str_split($this->code);
        if(count($str) == 8){
            for ($i = 0 ; $i <=3 ; $i++) {
                foreach ($A[$str[$i]] as $bit) {
                    if ($bit == 1) {
                        echo "<div class='noire'></div>";
                    } else {
                        echo "<div class='blanche'></div>";
                    }
                }
            }
        } elseif (count($str) == 13){
            $matrice = $this->premierChiffre[substr($this->code, 0, 1)];
            for ($i = 1 ; $i <=6 ; $i++) {
                if($matrice[$i - 1]=='A') {
                    foreach ($A[$str[$i]] as $bit) {
                        if ($bit == 1) {
                            echo "<div class='noire'></div>";
                        } else {
                            echo "<div class='blanche'></div>";
                        }
                    }
                }
                if ($matrice[$i - 1]=='B') {
                    foreach ($B[$str[$i]] as $bit) {
                        if ($bit == 1) {
                            echo "<div class='noire'></div>";
                        } else {
                            echo "<div class='blanche'></div>";
                        }
                    }
                }
            }
        }else
            return $message = 'Vous devez taper 8 ou 13 chiffres';

    }
    public function partie2(){
        $C = $this->elements['C'];
        //foreach ($C as $key => $value) {}
            //return $value;
        $str = str_split($this->code);
        if(count($str)==8){
            for ($i = 4 ; $i <=7 ; $i++) {
                foreach ($C[$str[$i]] as $bit) {
                    if ($bit == 1) {
                        echo "<div class='noire'></div>";
                    }else{
                        echo "<div class='blanche'></div>";
                    }
                }
            }
        } elseif (count($str) == 13){
            for ($i = 7 ; $i <=12 ; $i++) {
                foreach ($C[$str[$i]] as $bit) {
                    if ($bit == 1) {
                        echo "<div class='noire'></div>";
                    }else{
                        echo "<div class='blanche'></div>";
                    }
                }
            }
        }else
            return $message = 'Vous devez taper 8 ou 13 chiffres';

    }

    public function __construct($code) {
       $this->code = $code;
    }

    public function affiche(){
        $str = str_split($this->code);
        if(count($str) == 13 || count($str) == 8 ){
            $this->getZoneNormale();
            $this->partie1();
            $this->getZoneCentrale();
            $this->partie2();
            $this->getZoneNormale();
        }else
            echo $this->partie2();
    }
}


