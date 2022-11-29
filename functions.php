<?php 
$title = "Creating Functions"; 
include "includes\header.php" ?>
<body>
    <h1><?php echo $title ?> </h1>
    <?php

        /*Defining a function */ 
        function writemessage(){
            echo "You are really nice person, have a nice time! <br/>";
        }
      

      writemessage(); 
      writemessage(); 

        function add($num1, $num2){
            $sum =$num1 + $num2;
            echo "The sum of $num1 and $num2 is $sum <br/>"  ;
        }

        add(10 ,20);
        add("10" ,'20');


    ?>




<?php require 'includes/footer.php' ?> 