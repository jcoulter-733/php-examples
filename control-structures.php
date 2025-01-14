<?php
    include 'partials/header.php';
    $score = 80;
    if ($score >=70){
        echo 'Congratulations! You passed the exam.';    
    } else{
        echo 'Oops! You did not pass the exam.';
    }
?>

<?php
    include 'partials/footer.php';
?>