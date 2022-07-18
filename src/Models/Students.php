<?php

namespace App\Models;

use App\Database;

class Students {

    private ?int $id;
    private string $name;
    private string $class;
    private ?string $date_time;

    private $database;
    private $table = "appointments";

    public function __construct(int $id = null, string $name = "", string $class = "", string $date_time = null) {
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
        $this->date_time = $date_time;

        if(!$this->database) {
            $this->database = new Database();
        }
    }

    public function all() {
        $query = $this->database->mysql->query("SELECT * FROM {$this->table}");
        $studentsArray = $query->fetchAll();

        $studentsList = [];

        foreach($studentsArray as $student) {
            $studentItem = new Students($student["id"], $student["name"], $student["class"], $student["date_time"]);
            array_push($studentsList,$studentItem);
        }

        return $studentsList;
    }

    public function getId() {
        return $this->id;
    }
    public function getName() {
        return $this->name;
    }
    public function getClass() {
        return $this->class;
    }
    public function getDateTime() {
        return $this->date_time;
    }
   
}