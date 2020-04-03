<?php

declare(strict_types=1);

class ArabicToRomanNumbers
{
    private $rest;
    private $output = "";

    private $matchingSymbolsArray = [
        1000000 => "<span style=\"text-decoration:overline;\">M</span>",
        900000 => "<span style=\"text-decoration:overline;\">CM</span>",
        500000 => "<span style=\"text-decoration:overline;\">D</span>",
        400000 => "<span style=\"text-decoration:overline;\">CD</span>",
        100000 => "<span style=\"text-decoration:overline;\">C</span>",
        90000 => "<span style=\"text-decoration:overline;\">XC</span>",
        50000 => "<span style=\"text-decoration:overline;\">L</span>",
        40000 => "<span style=\"text-decoration:overline;\">XL</span>",
        10000 => "<span style=\"text-decoration:overline;\">X</span>",
        9000 => "M<span style=\"text-decoration:overline;\">X</span>",
        5000 => "<span style=\"text-decoration:overline;\">V</span>",
        4000 => "M<span style=\"text-decoration:overline;\">V</span>",
        1000 => "M",
        900 => "CM",
        500 => "D",
        400 => "CD",
        100 => "C",
        90 => "XC",
        50 => "L",
        40 => "XL",
        10 => "X",
        9 => "IX",
        5 => "V",
        4 => "IV", 
        1 => "I"
    ];

    function __construct(int $rest)
    {
$this->rest = $rest;
    }

    public function get_output() : string
    {
        foreach ($this->matchingSymbolsArray as $key => $value) 
        {
            $this->checkNumbers(
                $this->rest,
                $key,
                $value
            );
        }

        return $this->output;
    }

    public function checkNumbers(int $rest1, int $check_number, string $symbol_if_true)
    {
                $amount = $rest1 / $check_number;
                $amount2 = floor($amount);
                for ($i = 1; $i <= $amount2; $i++) {
                    $this->output = "$this->output" . "$symbol_if_true";
                }
                $rest2 = $rest1 % $check_number;
                $this->rest = $rest2;
    }
}
