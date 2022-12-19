<?php
use Course\Doctrine\Entity\Student;
use Course\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$studentRepository = $entityManager->getRepository(entityName: Student::class);

$student = $studentRepository->find($argv[1]);
$student->name = $argv[2];

$entityManager->persist($student);
$entityManager->flush();