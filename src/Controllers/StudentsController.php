<?php

namespace App\Controllers;

use App\Models\Students;
use App\Core\View;

class StudentsController {

    public function __construct()
    {
        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {

            $this->delete($_GET["id"]);
            return;
        }
        
        $this->index();
    }

    public function index() {
        $student = new Students();
        $students = $student->all();

        new View ("studentsHome", ["studentData" => $students]);
    }

    public function delete($id) {
        $studentClassDone = new Students();
        $studentDeleted = $studentClassDone->findByStudentId($id);
        $studentDeleted->delete();
        $this->index();
    }
}