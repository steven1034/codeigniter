<?php

namespace App\Controllers;
use App\Models\EmployeesModel;

class Employee extends BaseController
{
    public function index()
    {
        $employee = new EmployeesModel();
        $data['employee'] = $employee->findAll();
        echo view("Employee/index", $data);
    }
}
