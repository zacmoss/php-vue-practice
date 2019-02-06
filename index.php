<?php

require 'functions.php';

/*
$names = ['Zac', 'Steven', 'Tristan'];

foreach ($names as $name) {
    echo $name;
}
*/


// associative arrays

/*
$jobs = ['Zac' => 'Developer', 'Steven' => 'Banker', 'Tristan' => 'Firefighter'];


foreach ($jobs as $person => $job) {
    echo $person.' works as a '.$job;
}

// php push to array
$jobs['Dave'] = 'Policeman';

// prints array to screen
var_dump($jobs);


$task = ['Title' => 'Complete To Do List', 'due' => 'today', 'assigned_to' => 'Zac', 'completed' => true];
*/

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

    // property protected from outside scope
    public $description;

    // property protected from outside scope
    public $completed = false;

    // property that can be publicly shared
    public function __construct($description)
    {
        $this->description = $description;
    }

    public function complete()
    {
        $this->$completed = true;
    }

    public function isComplete()
    {
        return $this->completed;
    }
    public function testFunc()
    {
        echo 'testing';
    }
}

//$task2 = new Task('Go to the store');

//$task2->complete();

//var_dump($task2->isComplete());
//var_dump($task2);


$tasksArray = [
    new Task('Go to the store'),
    new Task('Finish my screencast'),
    new Task('Clean my room')
];

$tasksArray[1]->complete();
$tasksArray[0]->testFunc();



// require 'vue.php';
require 'index.view.php';

?>