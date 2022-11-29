<?php  
$title = "If Statement";
include 'includes\header.php' ?>
<body>
    <h1><?php echo $title ?> </h1>
    <h3 style="color: red "></h3>
    <?php
    echo '<h2>If Statement </h2>'; 
    
    $grade = 99; 
    // ==== exactly the same 
    if($grade >= 50) {
        echo '<h3 style="color: green"> YOU HAVE PASSED :)  </h3>';
    }
    else {
        echo '<h3 style="color:red"> YOU HAVE FAILED :( </h3>';
    }





    ?>
</body>
</html>