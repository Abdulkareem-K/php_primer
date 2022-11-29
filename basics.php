<?php 
$title = "Basics";
include "includes\header.php" ?>
<body>
    <h1><?php echo $title ?> </h1>
    <!-- Basic HTML -->
    <h1>Hello HTML World - PHP Primer</h1>
    <p>Hello</p>
    <br/>

    <?php 
        /*

        */
        //printing to HTML using eco 
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
      
    
    ?>

    <?php
        // Variables need a '$', They are not stongly typed:) 
        $name = 'Abdulkarim Katbi';
        $age = 34;
        // Echo (Print) Variables
        echo $name;
        echo '<h1> My Name is: '. $name. '</h1>' ;
        echo '<h1> My age is: '. $age. '</h1>' ;
        // scho using double quotes and interpolation 
        echo "<h1> My name is: <br/> $name <br/> and my age is:  $age </h1>";




    ?>
    
    <?php require 'includes/footer.php' ?> 