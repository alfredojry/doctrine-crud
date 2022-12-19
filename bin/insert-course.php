<?php

use Course\Doctrine\Entity\Phone;
use Course\Doctrine\Entity\Student;
use Course\Doctrine\Entity\Course;
use Course\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$course = new Course(name: $argv[1]);

$entityManager->persist($course);
$entityManager->flush();
