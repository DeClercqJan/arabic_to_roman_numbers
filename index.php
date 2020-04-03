<?php

declare(strict_types=1);

require_once (__DIR__ . '/ArabicToRomanNumbers.php');
require_once (__DIR__ . '/functions.php');

if (isset($_POST["arabic_numbers"])) {
    $input = (int) $_POST["arabic_numbers"];

$ArabicToRomanNumbers = new ArabicToRomanNumbers($input);
$output =  $ArabicToRomanNumbers->get_output();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<main>
<article>
<h1>Arabic To Roman Numbers</h1>
<section>
<h2>How it works</h2>
<p>Enter a number, send form and get the number in Roman numerals</p>
<p>Largest supprt symbol is <span style="text-decoration: overline;">M</span> 
for one million. Any number above that is not supported and therefore may not be correct, 
probably starting around 1,499,999 (depending on how zhe Romans actually did it)</p>
</section>
<section>
<form action="index.php" method="POST">
    <input type="numbers" name="arabic_numbers" maxlength="10">
    <input type="submit">
</form>
</section>
<?php
if (isset($_POST["arabic_numbers"])) {
?>
<section>
<h2>Result</h2>
<p>
<?php
echo $output;
?>
</p>
</section>
<?php
}
?>
</article>
</main>
</body>
</html>


