<?

$normal = 339872456; #filter_input(INPUT_POST, "number");
$len = strlen($normal);
$split = str_split($normal);
asort($split);
$min = $split[0];
$max = ($split[mt_rand(0, count($split) -1 )] * $split[mt_rand(0, count($split) - 1)]) * mt_rand(0, 10);
$gongo = mt_rand($min, $max);
echo $gongo;