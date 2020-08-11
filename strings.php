<?php

$cnt = 1;
// 1

$subCnt = 0;
// a
echo "1. <b>a. </b>";

$string  = "Buna dimineata, s-a trezit dulceata!";
$stringUpper = strtoupper($string);

echo "<p>{$stringUpper}</p>";

// b
echo "1. <b>b. </b>";

$stringLower = strtolower($string);
echo "<p>{$stringLower}</p>";

// c
echo "1. <b>c. </b>";

$stringUpperFirst = ucfirst($stringLower);
echo "<p>{$stringUpperFirst}</p>";

// d
echo "1. <b>d. </b>";

$stringUpperWords = ucwords($string);
echo "<p>{$stringUpperWords}</p>";

// 2
echo "<b>2. </b>";

$string = "082307";
echo "<p>" . implode(":", str_split($string, 2)) . "</p>";

// 3
echo "<b>3. </b>";

$string = "The quick brown fox jumps over the lazy dog.";
$subString = "jumps";
$position = strpos($string, $subString);
echo $position === false ? "<p><q>{$subString}</q> not found in <q>{$string}</q></p>" : "<p><q>{$subString}</q> found in <q>{$string}</q> at position {$position}</p>";

// 4
echo "<b>4. </b>";

$val = 10;
$stringVal = strval($val);
echo "<p>{$stringVal}</p>";

// 5
echo "<b>5. </b>";

$string = "www.example.com/public_html/index.php";
$fileName = preg_replace("/www.[a-z0-9]*.com\/public_html\//", "", $string);
echo "<p>{$fileName}</p>";

// 6
echo "<b>6. </b>";

$string = "rayy@example.com";
$fileName = preg_replace("/@[a-z0-9]*.com/", "", $string);
echo "<p>{$fileName}</p>";

// 7
echo "<b>7. </b>";

$string = "rayy@example.com";
$fileName = substr($string, strlen($string) - 3);
echo "<p>{$fileName}</p>";

// 8
echo "<b>8. </b>";

$val1 = 104.45;
$val2 = 65.35;
$res = number_format($val1 + $val2, 2);

echo "<p>{$res}</p>";

// 9
echo "<b>9. </b>";

$source = "1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz";
$numberChars = 10 + date_timestamp_get(date_create()) % 11;
$password = "";

for($i = 0; $i < $numberChars; ++$i) {
    echo microtime() . "<br/>";
    $genChar = $source[date_timestamp_get(date_create()) % strlen($source)];
    $password .= $genChar;
}

echo "<p>{$password}</p>";

// 10
echo "<b>10. </b>";

$string = "the quick brown fox jumps over the lazy dog.";
$res = preg_replace("/the/", "That", $string, 1);
echo "<p>{$res}</p>";

// 11
echo "<b>11. </b>";

$string1 = "football";
$string2 = "football";

$differencePosition = strspn($string1, $string2);

$char1 = $differencePosition < strlen($string1) ? $string1[$differencePosition] : "";
$char2 = $differencePosition < strlen($string2) ? $string2[$differencePosition] : "";

echo "<p>First difference between two strings at position {$differencePosition}: \"{$char1}\" vs \"{$char2}\"</p>";

// 12
echo "<b>12. </b>";

$string = "http://www.w3resource.com/index.php";
$erasedSuffix = preg_replace("/http:\/\/www.[a-z0-9]*.com\//", "", $string);
$res = preg_replace("/.php/", "", $erasedSuffix);

echo "<p>$res</p>";

// 13
echo "13. ";

$char = 'y';
$res = $char !== 'z' ? chr(ord($char) + 1) : 'a';

echo "<p>$res</p>";

// 14
echo "14. ";

$string = "rayy@example.com";
$res = preg_replace("/[a-z0-9]*@/", "", $string);

echo "<p>$res</p>";

// 15
echo "15. ";

$string = "rayy@example.com";
$res = bin2hex($string);

echo "<p>$res</p>";