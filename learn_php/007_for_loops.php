<?php
$even_numbers = [2,4,6,8,10,12,14,16,18,20];

foreach ($even_numbers as $numbers) {
    echo $numbers . "\n";
}
?>

<?php
$even_numbers = [2,4,6,8,10,12,14,16,18,20];

for ($i=0; $i <count($even_numbers); $i=$i+1)
{
    $numbers =$even_numbers[$i];
    echo $numbers . "\n";
}
?>