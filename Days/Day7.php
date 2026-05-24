
<?php

$name = 'IshfaqBuilds';
$cost = 15;


$business = [
    'name' => 'Seaport Ship Services',
    'cost' => 25,
    'category' => ["Marketing", "Accounting", "Sales"]
];



$business['name']; // Seaport Ship Services 

if ($business['cost'] > 30) {

    echo "Not Interested";
};



// foreach ($business['category'] as $category) {
//     echo $category . "<br>";
// }


function register($user)
{

}

require "Day7.view.php";