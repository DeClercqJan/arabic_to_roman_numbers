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
    <title>Arabic To Roman Numbers Convertor</title>
</head>
<body>
<h1>Arabic To Roman Numbers Convertor</h1>
<p>Also includes Roman symbols over 4000, which is <span style="text-decoration:overline;">V</span>, up to one million</p>
<main>
<article>
<section>
<h2>How it works</h2>
<p>Enter a number, send form and get the number in Roman numerals</p>
<p>Caveats:
<ul>
<li>Decimals are not supported, wheter points or commas are used</li>
<li>Spaces are not supported</li>
<li>Largest supprted symbol is <span style="text-decoration: overline;">M</span> 
for one million.</li>
<li>Any number above one million is not supported and therefore may not be correct </br>
, errors probably starting around 1499999 (depending on how zhe Romans actually did it - I don't know)</li>
</ul>
</p>
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
<footer>
<p> 	&copy; 2020 <a href="mailto:declercqjan@gmail.com">Jan De Clercq</a></p>
</footer>
</body>
</html>


