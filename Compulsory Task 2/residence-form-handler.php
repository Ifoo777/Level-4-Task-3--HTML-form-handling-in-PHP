<style>
    .err {
        color: red;
        font-weight: bold;
    }
</style>

<?php

// Parse POST data about a person's residence into php
//Create variables and add a post method to associate an array of variables passed to the current script via the HTTP POST method
//Add if and else statements to check wether values are specified correctly by the user if not throw an error and print out the variable created 


function error($msg){
    echo '<p class="err">'.$msg.'</p>';
}


$name = $_POST['full_name'];
if (!$name) 
    error("Full name not specified!");
else
    echo '<h1>resident details for: '. $name . '</h1>';

    $address = $_POST['address'];
if (!$address)
    error("Address not specified!");
else
    echo '<p><strong>Address</strong>: ' . $address . '</p>';

    $floors = $_POST['floors'];
if (!$floors)
    error("Floor not specified");
else
    echo '<p><strong>Floors</strong>: ' . $floors . '</p>';

   if(isset($_POST['res_type'])) {

    $res_type = $_POST ['res_type'];
    echo ("Your resident type is " .$res_type);
   }
   else{
    echo ("No resident type selected!");
   }

   $buildingcolor = $_POST['building_color'];
   if (!$buildingcolor)
       error("Building color not specified");
   else
       echo '<p><strong>Building color</strong>: ' . $buildingcolor . '</p>';

   ?>
