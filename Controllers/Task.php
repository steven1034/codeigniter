<?php

namespace App\Controllers;

class Task extends BaseController
{
    public function index()
    {
        echo view("Tasks/index");
    }
    public function index1()
    {
        echo "try";
    }
}
