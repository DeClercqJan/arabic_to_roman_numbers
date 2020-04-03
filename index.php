<?php

// declare(strict_types=1);

// if (isset($_POST["arabic_numbers"])) {
//     $total = $_POST["arabic_numbers"];

//     if ($total % 1000 >= 1) {
//         // $test = floor($total - $total % 1000);
//         $amount = $total / 1000;
//         $amount2 = floor($amount);
//         // echo $test2;
//         for ($i = 1; $i <= $amount2; $i++) {
//             echo "M";
//         }
//         $total %= 1000;
//     }
//     // echo "na %1000 is het $total <br>";
//     // if ($total % 900 == 0) {
//     if ($total % 900 >= 0) {
//         // echo "$total IN if 900 is <br>";
//         $amount = $total / 900;
//         $amount2 = floor($amount);
//         // echo $test2;
//         for ($i = 1; $i <= $amount2; $i++) {
//             echo "CM";
//         }
//         $total %= 900;
//     }
//     echo "na %900 is het $total <br>";
//     if ($total % 500 >= 1) {
//         // echo "$total IN if 900 is <br>";
//         $amount = $total / 500;
//         $amount2 = floor($amount);
//         // echo $test2;
//         for ($i = 1; $i <= $amount2; $i++) {
//             echo "D";
//         }
//         // echo "D <br>";
//         $total %= 500;
//     }

//     echo $total;
// }

// gonna try to write this in a more reuasable manner
class Transformer
{
    private $input = 0;
    private $rest = 0;
    private $output = "";

    function __construct()
    {
        if (isset($_POST["arabic_numbers"])) {
            $this->input = (int) $_POST["arabic_numbers"];
        }
    }

    public function get_input()
    {
        return $this->input;
    }

    public function get_rest_so_far()
    {
        return $this->rest;
    }

    public function get_output()
    {
        return $this->output;
    }

    public function check_input(int $rest1, int $check_number, string $symbol_if_true, bool $_check_greater_than_or_equal)
    {
        // if ($_check_greater_than_or_equal) {
        //     if ($rest1 % $check_number >= 1) {
                $amount = $rest1 / $check_number;
                $amount2 = floor($amount);
                for ($i = 1; $i <= $amount2; $i++) {
                    $this->output = "$this->output" . "$symbol_if_true";
                }
                $rest2 = $rest1 % $check_number;
                $this->rest = $rest2;
            // }
        // } elseif (!$_check_greater_than_or_equal) {
        //     // note: had to be zero
        //     if ($rest1 % $check_number == 0) {
        //         $amount = $rest1 / $check_number;
        //         $amount2 = floor($amount);
        //         for ($i = 1; $i <= $amount2; $i++) {
        //             $this->output = "$this->output" . "$symbol_if_true";
        //         }
        //         $rest2 = $rest1 % $check_number;
        //         $this->rest = $rest2;
        //     }
        // }
    }
}

// drive-by edit: got a tip: also 4's 40's and such need to be done still
$transformer = new Transformer();
$input = $transformer->get_input();

// $matchingSymbolsArray = [900 => "CM", 500 => "D"];

// echo $transformer->check_input(
//     $input,
//     1000,
//     "M",
//     true
// );

// foreach ($matchingSymbolsArray as $key => $value) 
// {
//     echo "$key is $value <br>";
//     echo $transformer->get_rest_so_far(),
//             ,
//         $key,
//         $value,
//         true
//     );
// }
echo "<p>";
echo $transformer->check_input(
    $input,
    1000000,
    "<span style=\"text-decoration:overline;\">M</span>",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    900000,
    "<span style=\"text-decoration:overline;\">CM</span>",
    false
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    500000,
    "<span style=\"text-decoration:overline;\">D</span>",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    400000,
    "<span style=\"text-decoration:overline;\">CD</span>",
    false
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    100000,
    "<span style=\"text-decoration:overline;\">C</span>",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    90000,
    "<span style=\"text-decoration:overline;\">XC</span>",
    false
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    50000,
    "<span style=\"text-decoration:overline;\">L</span>",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    40000,
    "<span style=\"text-decoration:overline;\">XL</span>",
    false
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    10000,
    "<span style=\"text-decoration:overline;\">X</span>",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    9000,
    "M<span style=\"text-decoration:overline;\">X</span>",
    false
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    5000,
    "<span style=\"text-decoration:overline;\">V</span>",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    4000,
    "M<span style=\"text-decoration:overline;\">V</span>",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    1000,
    "M",
    true
);
// echo $transformer->check_input(
//     $transformer->get_rest_so_far(),
//     999,
//     "MCMXCIX",
//     false
// );
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    900,
    "CM",
    false
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    500,
    "D",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    400,
    "CD",
    false
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    100,
    "C",
    true
);
// echo $transformer->check_input(
//     $transformer->get_rest_so_far(),
//     99,
//     "XCIX",
//     true
// );
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    90,
    "XC",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    50,
    "L",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    40,
    "XL",
    false
);
// echo $transformer->check_input(
//     $transformer->get_rest_so_far(),
//     44,
//     "XLIV",
//     false
// );
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    10,
    "X",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    9,
    "IX",
    false
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    5,
    "V",
    true
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    4,
    "IV",
    false
);
echo $transformer->check_input(
    $transformer->get_rest_so_far(),
    1,
    "I",
    true
);
echo $transformer->get_output();
echo "</p>";


// echo $_POST["arabic_numbers"];

// // zal werken, maar veel werk
// $character_splitted_array = str_split($_POST["arabic_numbers"]);
// $length_character_splitted_array = count($character_splitted_array);

// // var_dump($character_splitted_array);
// // var_dump($length_character_splitted_array);

// // for ($i = 0; $i <= $length_character_splitted_array; $i++) {
// for ($i = $length_character_splitted_array; $i >= $length_character_splitted_array; $i--) {
//     echo "$i <br>";
//     // echo "$i <br>";
//     // var_dump($character_splitted_array[$i]);
//     if ($i == 0) {
//         switch ($character_splitted_array[$i]) {
//             case "1":
//                 echo "I";
//                 continue;
//             case "2":
//                 echo "II";
//                 continue;
//             case "3":
//                 echo "II";
//                 continue;
//             case "4":
//                 echo "IV";
//                 continue;
//             case "5":
//                 echo "V";
//                 continue;
//             case "6":
//                 echo "VI";
//                 continue;
//             case "7":
//                 echo "VII";
//                 continue;
//             case "8";
//                 echo "VIII";
//                 continue;
//             case "9":
//                 echo "IX";
//                 continue;
//         }
//     }
//     if ($i == 1) {
//         switch ($character_splitted_array[$i]) {
//             case "1":
//                 echo "X";
//                 continue;
//             case "2":
//                 echo "XX";
//                 continue;
//             case "3":
//                 echo "XXX";
//                 continue;
//             case "4":
//                 echo "VL";
//                 continue;
//             case "5":
//                 echo "V";
//                 continue;
//             case "6":
//                 echo "VX";
//                 continue;
//             case "7":
//                 echo "VXX";
//                 continue;
//             case "8";
//                 echo "VXXX";
//                 continue;
//             case "9":
//                 echo "XC";
//                 continue;
//         }
//     }
// }


// MOGELIJKHEID. VEEL WERK?
// switch ($_POST["arabic_numbers"]) {
//     case $_POST["arabic_numbers"] > 1000 && $_POST["arabic_numbers"] > 500:
//         echo "M";
//         continue;
//     case $_POST["arabic_numbers"] > 500:
//         echo "D";
//         continue;
//     case $_POST["arabic_numbers"] > 100:
//         echo "C";
//         continue;
//     case $_POST["arabic_numbers"] > 50:
//         echo "L";
//         continue;
//     case $_POST["arabic_numbers"] > 10:
//         echo "X";
//         continue;
//     case $_POST["arabic_numbers"] > 5:
//         echo "V";
//         continue;
//     case $_POST["arabic_numbers"] = 1:
//         echo "I";
//         continue;
// }

?>
<p>Largest supprt symbol is <span style="text-decoration: overline;">M</span> 
for one million. Any number above that is not supported and therefore may not be correct, 
probably starting around 1,499,999 (depending on how zhe Romans actually did it)</p>
<form action="index.php" method="POST">
    <input type="numbers" name="arabic_numbers" maxlength="10">
    <input type="submit">
</form>
