<?php

$names = ['Zac', 'Steven', 'Tristan'];

foreach ($names as $name) {
    echo $name;
}


// associative arrays

$jobs = ['Zac' => 'Developer', 'Steven' => 'Banker', 'Tristan' => 'Firefighter'];


foreach ($jobs as $person => $job) {
    echo $person.' works as a '.$job;
}

// php push to array
$jobs['Dave'] = 'Policeman';

// prints array to screen
var_dump($jobs);


$task = ['Title' => 'Complete To Do List', 'due' => 'today', 'assigned_to' => 'Zac', 'completed' => false];

/*
if ($task['completed'] == false) {
    echo 'is false';
} else {
    echo 'is true';
}
*/

require 'vue.php';

?>