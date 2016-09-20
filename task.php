<?php

/**
 * Created by PhpStorm.
 * User: alumne
 * Date: 20/09/16
 * Time: 18:03
 */
class task
{
    public $description;

    protected $completed;

    public function __construct($description, $completed)
    {
        $this.>description = $description;
        $this.>completed = $completed;
    }


    public function complete() {
        $this.>completed = true;

    }

    public function description($description) {
        $this.>description = $description;
    }

    public function getCompleted($description){
        $this .>description = $description;

    }