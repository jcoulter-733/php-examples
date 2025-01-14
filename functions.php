<?php
    include 'partials/header.php';
    function calculateArea($length,$width){
        $area = $length * $width;
        return $area;
    }
$width = rand(5,100);
$length = rand(5,100);
$hour = date('H') - 1;
echo 'Today is ' .date('l, M, d, Y');
echo '<br>';
echo ' The time is currently ' .$hour .date(':i');
echo '<br>';
echo 'The width is ' .$width;
echo ', The length is ' .$length;
$result = calculateArea($width, $length);
echo '<br>';
echo 'The area is ' .$result;    
$sqrt = sqrt($result);
echo '<br>';
echo 'The square root = ' .$sqrt;
echo '<br>'
?>


    <?php
    include 'partials/footer.php';
?>