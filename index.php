<?php

declare(strict_types=1);

function var_dump_pretty($input) {
    echo '<pre>';
    var_dump($input);
    echo '</pre>';
}
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

    function __construct(int $rest)
    {
$this->rest = $rest;
    }

    // public function get_input() :int
    // {
    //     return $this->input;
    // }

    public function get_rest_so_far() : int
    {
        return $this->rest;
    }

    public function get_output() : string
    {

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

$matchingSymbolsArray = [
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

if (isset($_POST["arabic_numbers"])) {
    $input = (int) $_POST["arabic_numbers"];

$transformer = new Transformer($input);

// $input2 = $transformer->get_input();

// echo $transformer->checkNumbers(
//     $input2,
//     1000000,
//     "<span style=\"text-decoration:overline;\">M</span>"
// );

foreach ($matchingSymbolsArray as $key => $value) 
{
    // echo "key: $key is value: $value <br>";
    echo $transformer->checkNumbers(
        $transformer->get_rest_so_far(),
        $key,
        $value
    );
    // var_dump_pretty($transformer);
}

echo $transformer->get_output();

// echo $transformer->checkNumbers(
//     $input,
//     1000,
//     "M",
//     true
// );


// echo "<p>";
// echo $transformer->checkNumbers(
//     $input2,
//     1000000,
//     "<span style=\"text-decoration:overline;\">M</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     900000,
//     "<span style=\"text-decoration:overline;\">CM</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     500000,
//     "<span style=\"text-decoration:overline;\">D</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     400000,
//     "<span style=\"text-decoration:overline;\">CD</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     100000,
//     "<span style=\"text-decoration:overline;\">C</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     90000,
//     "<span style=\"text-decoration:overline;\">XC</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     50000,
//     "<span style=\"text-decoration:overline;\">L</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     40000,
//     "<span style=\"text-decoration:overline;\">XL</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     10000,
//     "<span style=\"text-decoration:overline;\">X</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     9000,
//     "M<span style=\"text-decoration:overline;\">X</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     5000,
//     "<span style=\"text-decoration:overline;\">V</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     4000,
//     "M<span style=\"text-decoration:overline;\">V</span>"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     1000,
//     "M"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     900,
//     "CM"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     500,
//     "D"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     400,
//     "CD"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     100,
//     "C"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     90,
//     "XC"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     50,
//     "L"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     40,
//     "XL"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     10,
//     "X"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     9,
//     "IX"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     5,
//     "V"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     4,
//     "IV"
// );
// echo $transformer->checkNumbers(
//     $transformer->get_rest_so_far(),
//     1,
//     "I"
// );
// echo $transformer->get_output();
// echo "</p>";
}
?>

<p>Largest supprt symbol is <span style="text-decoration: overline;">M</span> 
for one million. Any number above that is not supported and therefore may not be correct, 
probably starting around 1,499,999 (depending on how zhe Romans actually did it)</p>
<form action="index.php" method="POST">
    <input type="numbers" name="arabic_numbers" maxlength="10">
    <input type="submit">
</form>

<?php
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