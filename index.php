<?php

require('functions.php');

class Task {

    public $description;
    public $completed = false;
    
    public function __construct( $description ) {
        $this->description = $description;
    }

    public function  isComplete () {
        return $this->completed;
    }

    public function complete () {
        $this->completed = true;
    }

}

$tasks = [
new Task('mine poodi'),
new Task('vaata korvpalli kell neli'),
new Task('täida bena'),
];
$tasks[0]->complete();

//$task->complete();

//var_dump($task->isComplete());

require('index.view.php');