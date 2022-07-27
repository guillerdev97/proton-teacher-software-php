<?php

namespace App\Controllers;

use App\Models\Students;
use App\Core\View;

class StudentsController
{

    public function __construct()
    {
        if (isset($_GET["action"]) && ($_GET["action"] == "delete")) {

            $this->delete($_GET["id"]);
            return;
        }
        if (isset($_GET["action"]) && ($_GET["action"] == "create")) {

            $this->create();
            return;
        }
        if (isset($_GET["action"]) && ($_GET["action"] == "store")) {

            $this->store($_POST);
            return;
        }
      /*   if (isset($_GET["action"]) && ($_GET["action"] == "edit")) {
            $this->edit($_GET["id"]);
            return;
        }

        if (isset($_GET["action"]) && ($_GET["action"] == "update")) {
            $this->update($_POST, $_GET["id"]);
            return;
        } */
        if (isset($_GET["action"]) && ($_GET["action"] == "backHome")) {

            $this->backHome();
            return;
        }

        $this->index();
    }

    public function index()
    {
        $student = new Students();
        $students = $student->all();

        new View("studentsHome", ["studentData" => $students]);
    }

    public function delete($id)
    {
        $studentClassDone = new Students();
        $studentDeleted = $studentClassDone->findByStudentId($id);
        $studentDeleted->delete();
        $this->index();
    }

    public function create()
    {
        new View("studentsCreate");
    }

    public function store(array $request)
    {
        $newStudent = new Students(null, $request["name"], $request["class"]);
        $newStudent->save();
        $this->index();
    }

    public function backHome()
    {
        $this->index();
    }

    public function edit($id)
    {
        $studentHelped = new Students();
        $student = $studentHelped->findByStudentId($id);
        return $student;
    }

    public function update(array $request, $id)
    {
        $studentHelped = new Students();
        $student = $studentHelped->findByStudentId($id);
        $student->rename($request["name"],$request["class"]);
        $student->update();
        
        $this->index();
    }
}
