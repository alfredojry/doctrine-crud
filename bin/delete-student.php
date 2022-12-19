<?php
use Course\Doctrine\Entity\Student;
use Course\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

/*
$studentRepository = $entityManager->getRepository(entityName: Student::class);

$student = $studentRepository->find($argv[1]);

$entityManager->remove($student);
$entityManager->flush();
*/

/*
$student = $entityManager->getPartialReference(
    entityName: Student::class,
    identifier: $argv[1]
);
*/

$student = $entityManager->find(
    className: Student::class,
    id: $argv[1]
);

var_dump($student);

$entityManager->remove($student);
$entityManager->flush();
