<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Models\Students;


class StudentTest extends TestCase
{

	public function testIfGetNameAndGetClassWorkCorrectly()
	{
		$newStudent = new Students(null, "StudentTest", "Comment for Test");
		$resultStudentName = $newStudent->getName();
		$resultStudentClass = $newStudent->getClass();

		$this->assertEquals("StudentTest", $resultStudentName);
		$this->assertEquals("Comment for Test", $resultStudentClass);
	}
}