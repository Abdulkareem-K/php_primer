
<?php 
$title = "Array";
include "includes\header.php" 

?>
<body>
    <h1><?php echo $title ?> </h1>
    <?php
    
    $numArray = array(1,2,3,4,5,6,7,8,9,10);

    echo "<p style = 'color: red' > $numArray[9] </p> ";

    $size = count($numArray);
    echo "<p> Array numbers is size: $size </p> ";

    for ($count = 0 ; $count<$size ; $count++){
        echo "<p> $numArray[$count] </p>";
        
    }

    ?>


<?php require 'includes/footer.php' ?> 