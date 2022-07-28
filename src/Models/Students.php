<?php

namespace App\Models;

use App\Database;

class Students
{

    private ?int $id;
    private string $name;
    private string $class;
    private ?string $date_time;

    private $database;
    private $table = "appointments";

    public function __construct(int $id = null, string $name = "", string $class = "", string $date_time = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->class = $class;
        $this->date_time = $date_time;

        if (!$this->database) {
            $this->database = new Database();
        }
    }

    public function all()
    {
        $query = $this->database->mysql->query("SELECT * FROM {$this->table}");
        $studentsArray = $query->fetchAll();

        $studentsList = [];

        foreach ($studentsArray as $student) {
            $studentItem = new Students($student["id"], $student["name"], $student["class"], $student["date_time"]);
            array_push($studentsList, $studentItem);
        }

        return $studentsList;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getClass()
    {
        return $this->class;
    }
    public function getDateTime()
    {
        return $this->date_time;
    }

    public function findByStudentId($id)
    {
        $query = $this->database->mysql->query("SELECT * FROM `{$this->table}` WHERE `id` = {$id}");
        $studentSelected = $query->fetchAll();
        return new Students($studentSelected[0]["id"], $studentSelected[0]["name"], $studentSelected[0]["class"], $studentSelected[0]["date_time"]);
    }

    public function delete()
    {
        $query = $this->database->mysql->query("DELETE FROM `{$this->table}` WHERE `{$this->table}`.`id` = {$this->id}");
    }
    public function save()
    {
        $query = $this->database->mysql->query("INSERT INTO `{$this->table}` (`name`, `class`) VALUES ('$this->name','$this->class');");
    }

    public function rename($name, $class)
    {
        $this->name = $name;
        $this->class = $class;
    }

    public function update()
    {
        $this->database->mysql->query("UPDATE `{$this->table}` SET `name` =  '{$this->name}', `class` =  '{$this->class}' WHERE `id` = {$this->id}");
    }
}
