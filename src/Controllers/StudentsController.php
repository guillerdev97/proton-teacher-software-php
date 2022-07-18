<?php

namespace App\Controllers;

use App\Models\Students;
use App\Core\View;

class StudentsController {

    public function __construct()
    {
        $this->index();
    }


    public function index() {
        $student = new Students();
        $students = $student->all();

        new View ("studentsHome", ["studentData" => $students]);
    }
}