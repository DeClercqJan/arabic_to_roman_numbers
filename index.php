<?php

// echo 1500 % 1000;

if (isset($_POST["arabic_numbers"])) {
    $total = $_POST["arabic_numbers"];

    if ($total % 1000 >= 1) {
        // $test = floor($total - $total % 1000);
        $amount = $total / 1000;
        $amount2 = floor($amount);
        // echo $test2;
        for ($i = 1; $i <= $amount2; $i++) {
            echo "M";
        }
        $total %= 1000;
    }
    // echo "na %1000 is het $total <br>";
    // if ($total % 900 == 0) {
    if ($total % 900 >= 0) {
        // echo "$total IN if 900 is <br>";
        $amount = $total / 900;
        $amount2 = floor($amount);
        // echo $test2;
        for ($i = 1; $i <= $amount2; $i++) {
            echo "CM";
        }
        $total %= 900;
    }
    echo "na %900 is het $total <br>";
    if ($total % 500 >= 1) {
        // echo "$total IN if 900 is <br>";
        $amount = $total / 500;
        $amount2 = floor($amount);
        // echo $test2;
        for ($i = 1; $i <= $amount2; $i++) {
            echo "D";
        }
        // echo "D <br>";
        $total %= 500;
    }

    echo $total;
}

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

<form action="index.php" method="POST">
    <input type="numbers" name="arabic_numbers">
    <input type="submit">
</form>