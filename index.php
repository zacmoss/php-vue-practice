<?php

require 'functions.php';

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


$task = ['Title' => 'Complete To Do List', 'due' => 'today', 'assigned_to' => 'Zac', 'completed' => true];

/*
if ($task['completed'] == false) {
    echo 'is false';
} else {
    echo 'is true';
}
*/


// CLASSES

// public deals with encapsulation

class Task {

    protected $description;

    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }
}

$task2 = new Task('Go to the store');





require 'vue.php';

?>