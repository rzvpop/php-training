<?php

function order($ex, $subEx = null) {
    if(isset($subEx)) {
        echo "<b>{$ex}. {$subEx}. </b>";
    }
    else {
        echo "<b>{$ex}. </b>";
    }
}

// 1
order(1);

$color = array('white', 'green', 'red', 'blue', 'black');
echo "<p>The memory of that scene for me is like a frame of film forever frozen at that moment: the {$color[2]} carpet,
        the {$color[1]} lawn, the {$color[0]} house, the leaden sky. The new president and his first lady. - Richard M. Nixon</p>";

// 2
order(2);

$color = array('white', 'green', 'red');

echo "<p>";
foreach ($color as $colorElement) {
    echo "{$colorElement}, ";
}
echo "<br>";

sort($color);

foreach ($color as $colorElement) {
    echo "{$colorElement}<br>";
}
echo "</p>";

// 3
order(3);

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels",
    "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava",
    "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin",
    "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm",
    "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech
    Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga",
    "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

ksort($ceu);

foreach ($ceu as $key => $item) {
    echo "<p>The capital of {$key} is {$item}</p>";
}

// 4
order(4);

$x = array(1, 2, 3, 4, 5);
array_splice($x, 3, 1);

echo "<p>";
var_dump($x);
echo "</p>";

// 5
order(5);

$color = array(4 => 'white', 6 => 'green', 11=> 'red');
$reversed = array_reverse($color);
$first = array_pop($reversed);
echo "<p>{$first}</p>";

// 6
order(6);

$json = "{\"Title\": \"The Cuckoos Calling\",\"Author\": \"Robert Galbraith\",\"Detail\": {\"Publisher\": \"Little Brown\"}}";
$decoded = json_decode($json);

echo "<p>";
foreach ($decoded as $key => $value) {
    if(is_object($value))
        foreach ($value as $subKey => $subValue) {
            echo "{$subKey}: {$subValue}<br>";
        }
    else
        echo "{$key}: {$value}<br>";
}
echo "</p>";

// 7
order(7);

$x = array(1, 2, 3, 4, 5);
echo "<p>";
foreach ($x as $item) {
    echo "{$item} ";
}
echo "</p>";

echo "<p>";
array_splice($x, 3, 0, '$');

foreach ($x as $item) {
    echo "{$item} ";
}
echo "</p>";

// 8 a
order(8, 'a');

$x = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
asort($x);

echo "<p>";

var_dump($x);

echo "</p>";

// 8 b
order(8, 'b');

$x = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
ksort($x);

echo "<p>";

var_dump($x);

echo "</p>";

// 8 c
order(8, 'c');

$x = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
arsort($x);

echo "<p>";

var_dump($x);

echo "</p>";

// 8 d
order(8, 'd');

$x = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
krsort($x);

echo "<p>";

var_dump($x);

echo "</p>";

// 9
order(9);

$temperatures = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74,
                        62, 62, 65, 64, 68, 73, 75, 79, 73);

$average = number_format(array_reduce($temperatures, function ($carry, $item) {
                $carry += $item;
                return $carry;
            }) / count($temperatures), 1);

sort($temperatures);
$lowest = array_slice($temperatures, 0, 5);

$temperatures = array_reverse($temperatures);
$highest = array_reverse(array_slice($temperatures, 0, 5));

echo "<p>";

echo "Average temperature is: {$average}<br>";

echo "List of lowest temperatures:";
foreach ($lowest as $item) {
    echo " {$item},";
}

echo "<br>List of highest temperatures:";
foreach ($highest as $item) {
    echo " {$item},";
}

echo "</p>";

// 10
order(10);

echo "<p>";

echo "</p>";

// 11
order(11);

$array1 = array(array(77, 87), array(23, 45));
$array2 = array("w3resource", "com");
$merged = [];

foreach ($array1 as $key => $item) {
    $merged[$key] = array_merge([$array2[$key]], $item);
}

echo "<p>";

var_dump($merged);

echo "</p>";

// 12
order(12);

$color = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');
$lowerCase = array_map(function ($item) {
                return strtolower($item);
            }, $color);
$upperCase = array_map(function ($item) {
    return strtoupper($item);
}, $color);

echo "<p>";

echo "Values are in lower case.<br>";
var_dump($lowerCase);

echo "<br>Values are in upper case.<br>";
var_dump($upperCase);

echo "</p>";

// 13
order(13);

$interval = range(200, 250);
$filtered = array_filter($interval, function ($item) {
                return $item % 4 === 0;
            });

echo "<p>";

foreach ($filtered as $item) {
    echo "{$item}, ";
}

echo "</p>";

// 14
order(14);

$strings = array ("abcd","abc","de","hjjj","g","wer");
usort($strings, function ($val1, $val2) {
    return strlen($val1) - strlen($val2);
});

$shortest = strlen($strings[0]);
$longest = strlen(array_pop($strings));

echo "<p>";

echo " The shortest array length is {$shortest}. The longest array length is {$longest}.";

echo "</p>";

// 15
order(15);

$range = range(10, 20);
$length = 0;
try {
    $length = random_int(0, 10);
} catch (Exception $e) {
    echo "Naspi: {$e}";
}

$numbers = [];
for($i = 0; $i < $length; ++$i) {
    $index = 0;
    try {
        $index = random_int(0, count($range) - 1);
    } catch (Exception $e) {
        echo "Naspi: {$e}";
    }
    array_push($numbers, $range[$index]);
}

echo "<p>";

foreach ($numbers as $number) {
    echo "{$number} ";
};

echo "</p>";

// 16
order(16);

$arr = array(2 => null,
            12 => null,
            9 => null,
            -2 => null,
            4 => null);

$largestKey = max(array_keys($arr));

echo "<p>";

echo "Largest key is: {$largestKey}";

echo "</p>";

// 17
order(17);

$arr = array(2, 12, 9, 0, -2, 4);
$smallestNotZero = min(array_filter($arr,
    function ($item) {
        return $item !== 0;
    }));

echo "<p>";

echo "Smallest non-zero element is: {$smallestNotZero}";

echo "</p>";

// 18
order(18);

function floorDecimal($number, $precision, $separator) {
    $integer = (int) $number;
    $decimals = abs((int)($number * (10 ** $precision)) % (10 ** $precision));

    return "{$integer}{$separator}{$decimals}";
}

echo "<p>";

echo floorDecimal(1.155, 2, ".") . "<br>" . floorDecimal(100.257815, 4, ".") . "<br>" . floorDecimal(-2.9636, 3, ".");

echo "</p>";

// 19
order(19);

$color = array ( "color" => array ( "a" => "Red", "b" => "Green", "c" => "White"),
                "numbers" => array ( 1, 2, 3, 4, 5, 6 ),
                "holes" => array ( "First", 5 => "Second", "Third"));

echo "<p>";

echo $color["holes"][5] . " " . $color["color"]["a"];

echo "</p>";

// 20
order(20);

$arr1 = array(2, 12, 9, 0, -2, 4);
$priorityArr = [3, 2, 1, 4, 5, 0];

// will go from current position to specified position
uksort($arr1, function ($key1, $key2) {return $GLOBALS["priorityArr"][$key1] - $GLOBALS["priorityArr"][$key2];});

$arr2 = array(2, 12, 9, 0, -2, 4);

// will go from specified position to the current position
$newArr2 = [];
foreach ($priorityArr as $position) {
    array_push($newArr2, $arr2[$position]);
}

echo "<p>";

var_dump($arr1);
echo "<br>";
var_dump($newArr2);

echo "</p>";

// 21
order(21);

$subnets = ["10.0.1.1", "192.169.0.10", "192.168.0.9", "10.0.0.1", "192.168.1.10"];
usort($subnets,
    function ($val1, $val2) {
        $val1Arr = explode(".", $val1);
        $val2Arr = explode(".", $val2);

        for($i = 0; $i < count($val1Arr); ++$i) {
            $diff = intval($val1Arr[$i]) - intval($val2Arr[$i]);
            if($diff !== 0)
                return $diff;
        }

        return 0;
    });

echo "<p>";

var_dump($subnets);

echo "</p>";