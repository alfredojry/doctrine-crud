<?php

use Course\Doctrine\Entity\Course;
use Course\Doctrine\Entity\Phone;
use Course\Doctrine\Entity\Student;
use Course\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$studentId = $argv[1];
$courseId = $argv[2];

$student = $entityManager->find(className: Student::class, id: $studentId);
$course = $entityManager->find(className: Course::class, id: $courseId);

$student->enrollInCourse($course);

$entityManager->flush();
