<?php

include_once 'elements.php';

class CodeBar{

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
    public function getZoneNormale()
    {
        return $this->elements['ZoneNormale'];
    }
    /**
     * @return mixed
     */
    public function getZoneCentrale()
    {
        return $this->elements['ZoneCentrale'];
    }
    public function partie1()
    {
        $A = $this->elements['A'];
        foreach ($A as $value) {
            //var_dump($value);
        }

        foreach ($A[] as $bit) {
            if ($bit == 1) echo 'div noire'; else echo 'div blanche';
        }

    }
    public function partie2(){
        $C = $this->elements['B'];
        foreach ($C as $key => $value) {}
            return $value;

    }
}


