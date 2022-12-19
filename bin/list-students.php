<?php
use Course\Doctrine\Entity\Course;
use Course\Doctrine\Entity\Phone;
use Course\Doctrine\Entity\Student;
use Course\Doctrine\Helper\EntityManagerCreator;

require_once __DIR__ . '/../vendor/autoload.php';

$entityManager = EntityManagerCreator::createEntityManager();

$studentRepository = $entityManager->getRepository(entityName: Student::class);

/** @var Student[] StudentsList */
$studentsList = $studentRepository->findAll();

// var_dump($studentsList);

foreach ($studentsList as $student) {
    echo "ID: $student->id\nName: $student->name\n";
    
    if (count($student->phones())) {
        echo 'Phones: ' . join(
            ', ',
            $student->phones()
                ->map(fn(Phone $phone) => $phone->number)
                ->toArray()
        ) . PHP_EOL;
    }

    if (count($student->courses())) {
        echo 'Courses: ' . join(
            ', ',
            $student->courses()
                ->map(fn(Course $course) => $course->name)
                ->toArray()
        ) . PHP_EOL;
    }

    echo PHP_EOL;
}

/*
$student = $studentRepository->find(5);
var_dump($student);

$student = $studentRepository->findOneBy(
    [
        'name' => 'Jessica Jones'
    ]
);

var_dump($student);
*/
