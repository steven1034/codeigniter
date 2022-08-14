<?php namespace App\models;
use CodeIgniter\Model;

class EmployeesModel extends Model
{
    protected $table = 'employees';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'first_name',
        'last_name',
        'email',
        'phone',
        'designation',
    ];
}
?>