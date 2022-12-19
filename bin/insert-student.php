<?php

use Course\Doctrine\Entity\Phone;
use Course\Doctrine\Entity\Student;
use Course\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

// $student = new Student(name: 'Tony Stark');

//$student = new Student(name: $argv[1]);

$phones = [
    new Phone('+1 2232 3234343'),
    new Phone('(82) 99955 6636'),
];

$student = new Student(name: 'Moon Knight');

foreach ($phones as $phone) {
    $student->addPhone($phone);
}

$entityManager->persist($student);
$entityManager->flush();
